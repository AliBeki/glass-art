<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class MainController extends Controller
{
    public function index() {
        return view('home');
    }

    public function gallery() {
        $images = Image::all();
        return view('gallery', ['images'=>$images]);
    }

    public function workplace() {
        return view('workplace');
    }

    public function contact() {
        return view('contact_me');
    }



    public function de(Request $request) {
        $request->session()->put('locale', 'de');
        return redirect()->route('home');
    }

    public function en(Request $request) {
        $request->session()->put('locale', 'en');
        return redirect()->route('home');
    }

    public function pl(Request $request) {
        $request->session()->put('locale', 'pl');
        return redirect()->route('home');
    }

}
