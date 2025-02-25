<?php
namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken
{
    public static function createToken($userEmail, $userID): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => "laravel-token", // Issuer of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + 60*60*24*30, // Expiration time
            'userEmail' => $userEmail,
            'userID' => $userID
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    public static function createTokenForSetPassword($userEmail): string
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => "laravel-token", // Issuer of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + 60*20, // Expiration time
            'userEmail' => $userEmail,
            'userID' => 0
        ];

        return JWT::encode($payload, $key, 'HS256');
    }

    public static function verifyToken($token)
    {
        try{
            if($token == null){
                return 'unauthorized';
            }else{
                $key = env('JWT_KEY');
                $decoded = JWT::decode($token, new Key($key, 'HS256'));
                return $decoded;
            }
        }catch(Exception $e){
            return 'unauthorized';
        }
    }
}
