<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function addService(request $req)
    {
       $req->file('logo')->store('service');
    }
    
}
