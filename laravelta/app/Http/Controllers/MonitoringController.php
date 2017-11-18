<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MonitoringController extends Controller
{
     public function index()
    {
        return view('backend.monitoring.index');
    }
}
