<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role_id;

switch ($role) {
    case 1:
        return redirect('/picker');
        break;
    case 2:
        return redirect('/verkoper');
        break;
    case 3:
        return redirect('/voorraadmanager');
        break;
}
    }
}
