<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SmsGateway as SMS;
use App\Http\Requests;

class SmsController extends Controller
{
    //
    public function create(Request $request){
      SMS::Create($request->all());
      return back();
    }

    public function update(SMS $sms, Request $request){
      $sms->fill($request->all());
      $sms->save();
      return back();
    }

    public function delete(SMS $sms){
      $sms->delete();
      return back();
    }

    public function returnAll(){
      return SMS::all()->sortBy('name');
    }


    /* TODO: Add controller function to RUD
     * Need to set up model injection
     *
     *
     ************************/
}
