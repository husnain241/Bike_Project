<?php

namespace App\Http\Controllers;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(){
        return view('home.feedback');
    }

    public function feedbackAdd(Request $request){
        $data=new Feedback();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->feedback=$request->feedback;
        $data->star=$request->star;
        $data->save();
        return redirect()->back();
    }
}
