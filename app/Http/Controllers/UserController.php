<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freetrial;
use App\Models\ContactUs;
class UserController extends Controller
{
   
     public function signuppage()
    {
        return view('User.signup');
    }

    public function storeFreeTrial(Request $request)
    {
          $request->validate([
         'name' => 'required|regex:/^[A-Za-z\s]+$/|max:255',
         'email' => 'required|email|unique:free_trial,email',
         'mobile' => 'required|digits:10|regex:/^[0-9]+$/'],
         [
        'name.required' => 'Name is required.',
        'name.regex'    => 'Name must contain only alphabets.',
        'name.max'      => 'Name cannot be more than 255 characters.',

        
        'email.required' => 'Email is required.',
        'email.email'    => 'Please enter a valid email.',
        'email.unique'   => 'This email is already registered.',

        
        'mobile.required' => 'Mobile number is required.',
        'mobile.digits'   => 'Mobile number must be exactly 10 digits.',
        'mobile.regex'    => 'Mobile number must contain only numbers.',
        ]);

        Freetrial::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile
        ]);

        return redirect()->back()->with('success',"Thankyou, $request->name");

    }



     public function storeContactUs(Request $request)
      {
          $request->validate([
         'name' => 'required|regex:/^[A-Za-z\s]+$/|max:255',
         'email' => 'required|email|unique:contact_us,email',
         'mobile' => 'required|digits:10|regex:/^[0-9]+$/',
        'message'=>'required|regex:/^[A-Za-z\s]+$/|max:255'],
         [
        'name.required' => 'Name is required.',
        'name.regex'    => 'Name must contain only alphabets.',
        'name.max'      => 'Name cannot be more than 255 characters.',

        
        'email.required' => 'Email is required.',
        'email.email'    => 'Please enter a valid email.',
        'email.unique'   => 'This email is already registered.',

        
        'mobile.required' => 'Mobile number is required.',
        'mobile.digits'   => 'Mobile number must be exactly 10 digits.',
        'mobile.regex'    => 'Mobile number must contain only numbers.',

        'message.required'=>"Message is required",
        'message.regex'=>"Message must contain alphabets only"
        ]);

        Contactus::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'message'=>$request->message
        ]);

        return redirect()->back()->with('success',"Thankyou, $request->name");

    }
}
