<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Models\Feedback;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendMail;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\Session;

class FeedbackController extends Controller
{

    public function index(Request $request){
        $data = array(
            'massage' => $request->massage,
            'img' => $request->img,
        );
        return view('feedback', compact('data'));
    }

    public function send(FeedbackRequest $request)

    {

        $data = array(
            'massage' => $request->massage,
        );

        Mail::to('weronikanqt@gmail.com')->send(new SendMail($data));
        return view('send');
    }


}
