<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth:api');
    }

    public function index(Request $request)
    {
        //
        $user = Auth::user();
        return response()->json(['welcome' => $user->name]);
    }
}
