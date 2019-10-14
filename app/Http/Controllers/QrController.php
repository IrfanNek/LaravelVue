<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\preregister;
use DB;

class QrController extends Controller{

public function index(Request $request)
  {
    $request->validate([
      'host_name'=>'required',
      'visitor_name'=>'required',
      'address'=>'required',
      'phone'=>'required',
      'email'=>'required|email',
      'nic'=>'required',

    ]);

    preregister::create($request->all());

    $values = $request->input();
    $name = $values["host_name"];
    $visitorName =$values["visitor_name"];
    $address =$values["address"];
    $phone = $values["phone"];
    $email = $values["email"];
    $nic= $values["nic"];


    $visitor = array(
      "Name" => $name,
      "visitorName" => $visitorName,
      "address" => $address,
      "phone" => $phone,
      "email" => $email,
      "nic" => $nic
    );




    return
    \QRCode::Text(json_encode($visitor))
    ->setErrorCorrectionLevel('H')
    ->setSize(4)
    ->setMargin(2)
    ->svg();
  }

  public function updateClockin(){

  }

}  bro u there ? 
