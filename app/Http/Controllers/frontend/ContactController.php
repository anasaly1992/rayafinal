<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Setting;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = Setting::find(1);
        return view('front.contact', compact('settings'));
    }

}
