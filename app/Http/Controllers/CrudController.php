<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
   public function index()
   {

    return view('crud/index');
   }

    public function view()
   {

    return view('crud/view');
   }


}
