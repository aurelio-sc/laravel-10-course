<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $support)
    {        
        $supports = $support->all();        
        return view('admin/supports/index', compact('supports')); // compact('supports) == ['supports' => $supports] / returns data to the supports view
    }
}
