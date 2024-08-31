<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;


class HomeController extends Controller
{
    public function room_detail($id){
        $data=Room::find($id);
        return view('home.room_detail',compact('data'));

    }
}
