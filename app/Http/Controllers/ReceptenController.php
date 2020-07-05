<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recepten;

class ReceptenController extends Controller
{
    public function index(){
      return Recepten::get()->all();
    }
}
