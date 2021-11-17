<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    //
    public function store(){

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        try {
            session()->flash("success","Message sent successfully");
            Mail::to('info@threecousinsenergy.co.ke')->send(new ContactMail($data));
            return redirect("/");
        } catch (\Exception $e) {
            session()->flash("error","Failed! Please try again");
            return redirect("/");
        }
    }
}
