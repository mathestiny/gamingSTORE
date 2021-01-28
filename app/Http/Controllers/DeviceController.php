<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeviceController extends Controller
{
    function search($name)
    {
        return Device::where("name", "like", "%".$name. "%")->get();
    }
}
