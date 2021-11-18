<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    public function distribution()
    {
        return view('admin.layout.distribution');
    }
}
