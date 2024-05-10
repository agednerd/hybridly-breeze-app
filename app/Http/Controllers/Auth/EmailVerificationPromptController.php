<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Hybridly\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|Factory
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : hybridly('auth.verify-email', ['status' => session('status')]);
    }
}
