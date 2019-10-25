<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscriber;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.main');
    }

    public function sendEmail(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|required',
            'kota' => 'required',
            'likes' => 'required',
            'times' => 'required',
            'score' => 'required',
            'saran' => 'required'
        ]);

        $data = $request->all();

        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $email = $request->email;
        $kota = $request->kota;
        $likes = $request->likes;
        $times = $request->times;
        $score = $request->score;
        $saran = $request->saran;
        
        $body = "Survey from $firstname $lastname with $email  \n" .
                        "Kota = $kota \n" .
                        "Jumlah futsal/minggu = $times \n" .
                        "Suka futsal = $likes \n" .
                        "Skore desain website = $score \n" .
                        "Saran : " . nl2br($saran);

        $details = [
            'title' => 'Survey from guest',
            'body' => $body
        ];

        \Mail::to('lapangankureceiver@gmail.com')->send(new \App\Mail\MyTestEmail($details));

        return redirect('/')->with('status' , 'Terimakasih telah mengisi survei');

    }

    public function subscribe(Request $request){
        $request->validate([
            'email2' => 'email|required|unique:subscribers,email'
        ], [
            'email2.unique' => "Email has already been taken"
        ]);
            
        $subscriber = new subscriber();
        $subscriber->email = $request->email2;
        $subscriber->save();
        
        return redirect('/')->with('status' , 'Terimakasih sudah mensubscribe');
    }

    public function subscribe2(Request $request)
    {
        $request->validate([
            'email3' => 'email|required|unique:subscribers,email'
        ], [
            'email3.unique' => "Email has already been taken"
        ]);

        $subscriber = new subscriber();
        $subscriber->email = $request->email3;
        $subscriber->save();

        return redirect('/')->with('status', 'Terimakasih sudah mensubscribe');
    }

}
