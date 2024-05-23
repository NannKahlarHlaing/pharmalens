<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryMail;
use App\Mail\FeedbackMail;
use App\Mail\ComplaintMail;
use App\Models\Information;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class ContactController extends Controller
{
    public function index(){
        $info = Information::first();

        // dd($phone);

        return view('public.contact', [
            'info' => $info,
            'phone' => $this->stringToArray($info->phone),
            'email' => $this->stringToArray($info->email)
        ]);
    }

    public function enquiry_mail(Request $request){
        $mail_to = env('MAIL_FROM_ADDRESS');

        Mail::to($mail_to)->send(new EnquiryMail(request()->all()));

        return back()->with('success', 'Your Message has been send successfully!');

    }

    public function complaint_mail(){
        $mail_to = env('MAIL_FROM_ADDRESS');
        Mail::to($mail_to)->send(new ComplaintMail(request()->all()));
        return back()->with('success', 'Your Message has been send successfully!');    }

    public function feedback_mail(){
        $mail_to = env('MAIL_FROM_ADDRESS');
        Mail::to($mail_to)->send(new FeedbackMail(request()->all()));
        return back()->with('success', 'Your Message has been send successfully!');    
    }

    private function stringToArray($str)
    {
        $arr = explode(',', $str);
        return $arr;
    }

    private function getData($request){
        return [
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'phone' => $request->phone,
            'viber' => $request->viber,
            'commodity' => $request->commodity,
            'quantity' => $request->quantity,
            'message' => $request->message
        ];
    }

}
