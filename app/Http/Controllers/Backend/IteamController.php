<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IteamController extends Controller
{
    public function iteam()
    {
        return view('admin.layout.iteam');
    }
}
