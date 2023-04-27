<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {

        $title = "My Template";
        $meta = [
            "decription" => "Index Page",
            "keywords" => "",
            "author" => ""
        ];
        return view('client.index', ['title' => $title, 'meta' => $meta]);
    }

    public function D040593(){
        return view('client.D040593');
    }

    public function D0405932(){
        return view('client.D0405932');
    }

    public function D0405933(){
        return view('client.D0405933');
    }

    public function cek1 (Request $request)
    {
      $berbohong = $request->query('berbohong');
      
      if ($berbohong == "yoga") return view('client.D040593a');
      else return view ('client.cobalagi');
      //more logic here
    }

    public function cek1a (Request $request)
    {
      $bohong1 = $request->query('bohong1');
      $bohong2 = $request->query('bohong2');
      $bohong3 = $request->query('bohong3');
      $bohong4 = $request->query('bohong4');
      $bohong5 = $request->query('bohong5');
      $bohong6 = $request->query('bohong6');
      $bohong7 = $request->query('bohong7');
      $bohong8 = $request->query('bohong8');
      $bohong9 = $request->query('bohong9');
      $bohong10 = $request->query('bohong10');
      $bohong11 = $request->query('bohong11');
      $bohong12 = $request->query('bohong12');
      $bohong13 = $request->query('bohong13');
      $bohong14 = $request->query('bohong14');
      $bohong15 = $request->query('bohong15');

      
      if ($bohong1 == "1" && 
          $bohong2 == "" &&
          $bohong3 == "" &&
          $bohong4 == "" &&
          $bohong5 == "" &&
          $bohong6 == "" &&
          $bohong7 == "" &&
          $bohong8 == "" &&
          $bohong9 == "" &&
          $bohong10 == "" &&
          $bohong11 == "" &&
          $bohong12 == "" &&
          $bohong13 == "" &&
          $bohong14 == "" &&
          $bohong15 == "15") return view('client.betulQ1');
      else return view ('client.cobalagi');
      //more logic here

    }

    public function cek2 (Request $request)
    {
      $berbohong = $request->query('berbohong');
      
      if ($berbohong == "ardiyanto") return view('client.D0405932a');
      else return view ('client.cobalagi');
      //more logic here
    }

    public function cek2a (Request $request)
    {
      $bohong1 = $request->query('bohong1');
      $bohong2 = $request->query('bohong2');
      $bohong3 = $request->query('bohong3');
      $bohong4 = $request->query('bohong4');
      $bohong5 = $request->query('bohong5');
      $bohong6 = $request->query('bohong6');
      $bohong7 = $request->query('bohong7');
      $bohong8 = $request->query('bohong8');
      $bohong9 = $request->query('bohong9');
      $bohong10 = $request->query('bohong10');
      $bohong11 = $request->query('bohong11');
      $bohong12 = $request->query('bohong12');
      $bohong13 = $request->query('bohong13');
      $bohong14 = $request->query('bohong14');
      $bohong15 = $request->query('bohong15');

      
      if ($bohong1 == "" && 
          $bohong2 == "2" &&
          $bohong3 == "" &&
          $bohong4 == "" &&
          $bohong5 == "" &&
          $bohong6 == "" &&
          $bohong7 == "7" &&
          $bohong8 == "" &&
          $bohong9 == "" &&
          $bohong10 == "" &&
          $bohong11 == "" &&
          $bohong12 == "" &&
          $bohong13 == "" &&
          $bohong14 == "" &&
          $bohong15 == "") return view('client.betulQ2');
      else return view ('client.cobalagi');
      //more logic here

    }

    public function cek3 (Request $request)
    {
      $membunuh = $request->query('membunuh');
      //console.log("isi membunuh: " + $membunuh);
      if ($membunuh == "wina") return view('client.D0405933a');
      else return view ('client.cobalagi');
      //more logic here
    }

    public function cek3a (Request $request)
    {
      $bohong1 = $request->query('bohong1');
      $bohong2 = $request->query('bohong2');
      $bohong3 = $request->query('bohong3');
      $bohong4 = $request->query('bohong4');
      $bohong5 = $request->query('bohong5');
      $bohong6 = $request->query('bohong6');
      $bohong7 = $request->query('bohong7');
      $bohong8 = $request->query('bohong8');
      $bohong9 = $request->query('bohong9');
      $bohong10 = $request->query('bohong10');
      $bohong11 = $request->query('bohong11');
      $bohong12 = $request->query('bohong12');
      $bohong13 = $request->query('bohong13');
      $bohong14 = $request->query('bohong14');
      $bohong15 = $request->query('bohong15');

      
      if ($bohong1 == "" && 
          $bohong2 == "2" &&
          $bohong3 == "" &&
          $bohong4 == "" &&
          $bohong5 == "" &&
          $bohong6 == "" &&
          $bohong7 == "7" &&
          $bohong8 == "8" &&
          $bohong9 == "" &&
          $bohong10 == "" &&
          $bohong11 == "" &&
          $bohong12 == "" &&
          $bohong13 == "" &&
          $bohong14 == "" &&
          $bohong15 == "") return view('client.betulQ3');
      else return view ('client.cobalagi');
      //more logic here

    }
}
