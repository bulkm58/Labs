<?php

namespace App\Http\Controllers;

use App\Welcome;
use App\Header;
use App\ImgHeader;
use App\About;
use App\User;
use App\Promo;
use App\Contact;
use App\Footer;
use App\Testi;
use App\SeeServ;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $overview = SeeServ::inRandomOrder()->take(3)->get();
        $seeServ = SeeServ::latest()->take(9)->get();
        




        $testi = Testi::orderby('id', 'desc')->take(6)->get();

        $CEO = User::where('role_id','=', 1)->first();
        $teams = User::inRandomOrder()->where('role_id','!=', 4)->where('role_id','!=', 1)->take(2)->get();
        $header = Header::all();
        $about = About::all();
        $imgHeader = ImgHeader::all();
        $promo = Promo::all();
        $contactSection = Contact::all();
        $footer = Footer::find(1);
        return view('welcome.welcome', compact("header", "imgHeader", "about", "promo", "contactSection", "footer",'teams','CEO','testi','overview','seeServ'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function show(Welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function edit(Welcome $welcome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Welcome  $welcome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Welcome $welcome)
    {
        //
    }
}
