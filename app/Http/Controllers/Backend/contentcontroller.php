<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;// ei file ta missing
use Illuminate\Http\Request;

class contentcontroller extends Controller
{
    public function admin(){
        return view ('admin.layout.content');
    }
}


// controllers er vitor controller name ekta file chilo oita delete kore dicho tai ei error dicche
// oi file ta ke base controller bole