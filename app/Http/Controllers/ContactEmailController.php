<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactEmailController extends Controller
{
    function sendEmail(Request $request){
        $validatedData = $request->validate([
          'name' =>'required|string|max:255',
          'email' =>'required|email|max:255',
          'attach' =>'mimes:png,jpg,pdf,xls,doc',
          'message' =>'required|string|min:10|max:1000'
        ]);

        // Attach file if exists
        $file_name = "FA" . time() . "." .  $request->file('attach')->getClientOriginalExtension();
        $request->file('attach')->move('uploads/', $file_name);

        // Send email to owner
        $owenerEmail = "fahizozil17@gmail.com";

       $responce = Mail::to($owenerEmail)->cc("alizaybaloch36@gmail.com")->send(new contactMail($request->all(),$file_name));
       if($responce){
        return redirect()->back()->with("success","email send successfully");
       }else{
        return redirect()->back()->with("error","Failed to send email");
       }
    }
}
