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
        return redirect()->route('picker_index');
        break;
    case 2:
        return redirect()->route('verkoper_index');
        break;
    case 3:
        return redirect()->route('voorraadmanager_index');
        break;
}
    }
}
