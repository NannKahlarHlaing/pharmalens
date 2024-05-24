<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryMail;
use App\Mail\FeedbackMail;
use App\Mail\ComplaintMail;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(){
        $info = Information::first();

        return view('public.contact', [
            'info' => $info,
            'phone' => $this->stringToArray($info->phone),
            'email' => $this->stringToArray($info->email)
        ]);
    }

    public function inquiry_mail(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'commodity' => 'required|string|max:255',
            'quantity' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' =>  $validator->errors()
            ]);
        }

        $mail_to = env('MAIL_FROM_ADDRESS');

        Mail::to($mail_to)->send(new EnquiryMail(request()->all()));

        session()->flash('success', 'Your Inquiry message has been submitted successfully.');

        return response()->json([
            'success' =>  'success'
        ]);

    }

    public function complaint_mail(Request $request){

        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'product_name' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' =>  $validator->errors()
            ]);
        }

        $mail_to = env('MAIL_FROM_ADDRESS');
        Mail::to($mail_to)->send(new ComplaintMail(request()->all()));
        
        session()->flash('success', 'Your complaint has been submitted successfully.');

        return response()->json([
            'success' =>  'success'
        ]);
    }

    public function feedback_mail(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' =>  $validator->errors()
            ]);
        }

        $mail_to = env('MAIL_FROM_ADDRESS');
        Mail::to($mail_to)->send(new FeedbackMail(request()->all()));

        session()->flash('success', 'Your feedback has been submitted successfully.');

        return response()->json([
            'success' =>  'success'
        ]);
    }

    private function stringToArray($str)
    {
        $arr = explode(',', $str);
        return $arr;
    }

}
