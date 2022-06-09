<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Govinda;
use App\Models\Yubraj;

class YubrajController extends Controller
{
    function index()
    {
        return Yubraj::find(2)->index;
    }
}
