<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrController extends Controller{

public function index(Request $request)
  {

    $values = $request->input();
    $firstName = $values["firstname"];
    $lastName = $values["lastname"];


    QrController::make($firstName,$lastName);


  }

    public function make($firstName,$lastName)
    {

      $file=public_path('qr.png');
      return \QRCode::text(QrController::vcard($firstName,$lastName))->setOutfile($file)->png();
    }

    public function vcard($firstName,$lastName)
    {

      $title='Mr.';
      $email='john.doe@example.com';


      //Addresses

        $homeAddress= [
        'type'=>'work',
        'pref'=>true,
        'street'=>'123 my work street st',
        'city'=>'My Beautiful Town',
        'state'=>'LV',
        'country'=>'Hell',
        'zip'=>'12335-678',
      ];

      $wordAddress=[
        'type'=>'work',
        'pref'=>false,
        'street'=>'123 my work street st',
        'city'=>'My Dreadful Town',
        'state'=>'LV',
        'country'=>'Hell',
        'zip'=>'12345-678',
      ];

      $addresses = [$homeAddress, $wordAddress];

      //Phones
      $workPhone = [
        'type'=>'work',
        'number'=>'001555-1234',
        'cellPhone'=>false,
      ];

      $homePhone = [
        'type'=>'work',
        'number'=>'001 444-5555',
        'cellPhone'=>false,
      ];

      $cellPhone = [
        'type'=>'work',
        'number'=>'001 999-0000',
        'cellPhone'=>true,
      ];

      $phones =[$workPhone,$homePhone,$cellPhone];



      return \QRCode::vCard($firstName, $lastName ,$title ,$email, $addresses, $phones)
                ->setErrorCorrectionLevel('H')
                ->setSize(4)
                ->setMargin(2)
                ->svg();
      }


  }
