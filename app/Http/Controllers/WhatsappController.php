<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function homepage()
    {
        return view('Whatsapp.home');
    }

    public function aboutpage()
    {
        return view('Whatsapp.about');
    }

    public function adspage()
    {
        return view('Whatsapp.ads');
    }

    public function contactpage()
    {
        return view('Whatsapp.contactus');
    }

    public function metaapipage()
    {
        return view('Whatsapp.metaapi');
    }
    
     public function virtualnumberpage()
    {
        return view('Whatsapp.virtualnumber');
    }
    
}
