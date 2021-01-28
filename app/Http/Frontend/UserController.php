<?php

namespace App\Http\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function monprofile()
    {
        return view ('frontend.user.profile');
    }
}
