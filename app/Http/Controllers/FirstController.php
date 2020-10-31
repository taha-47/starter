<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{

    

    public function __construct() {
      $this->middleware('auth');
    }

    public function index()
    {
        return 'this is the first app from the controller';
    }
}
