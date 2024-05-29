<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Vendor;
use App\Models\Client;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
