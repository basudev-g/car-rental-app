<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{
    public function userRegistration(Request $request)
    {
        return Inertia::render('UserRegistration');
    }

    public function userLogin(Request $request)
    {
        return Inertia::render('UserLogin');
    }

    public function userLogout(Request $request)
    {

    }

    public function sendOTPCode(Request $request)
    {

    }

    public function verifyOTP(Request $request)
    {

    }

    public function resetPassword(Request $request)
    {

    }

    public function userProfile(Request $request)
    {

    }

    public function updateProfile(Request $request)
    {

    }


}
