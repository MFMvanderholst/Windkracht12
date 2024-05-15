<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Invite;
use App\Events\UserUpdated;
use Illuminate\Support\Arr;

class VerifyInviteController extends Controller
{
    public function __invoke()
    {
        $uriSegments = explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $inviteCode = Arr::last($uriSegments);
        $guest = Invite::where('code', $inviteCode)->first();
        
        if ($guest) {
            session(
                [
                    'id' => $guest['id'],
                    'firstname' => $guest['firstname'],
                    'lastname' => $guest['lastname'],
                    'email' => $guest['email'],
                ]
            );
            
            return view('auth.register', ["guest" => $guest]);
        } else {
            return redirect()->route('login');
        }
    }
}
