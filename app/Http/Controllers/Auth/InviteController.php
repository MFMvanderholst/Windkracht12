<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\UserUpdatedEmail;
use App\Models\Invite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use App\Events\UserUpdated;

class InviteController extends Controller
{
    public string $firstname = '';
    public string $lastname = '';
    public string $email = '';
    public bool $success = false;

    public function invite(Request $request)
    {
        $code = Str::random(32);
        $validated = $request->validate(
            [
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
            ]
        );

        $validated['code'] = $code;
 
        $invite = Invite::create($validated);

        $this->success = true;

        UserUpdated::dispatch($invite);

        return view('auth.verify-email');
    }
}
