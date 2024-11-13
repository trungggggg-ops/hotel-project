<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function room_details($id)
    {
        $data = Room::find($id);

        return view('home.room_details',compact('data'));
    }

    public function add_booking(Request $request,$id)
    {
        $data = new Booking();

        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
       

        $startDate = $request->startDate;
        $endDate = $request->endDate;
        
        $isBooking = Booking::where('room_id',$id)
        ->where('start_date','<=',$endDate)
        ->where('end_date','>=',$startDate)->exists();
        if($isBooking)
        {
            return redirect()->back()->with('fail','Room is already booked please try different date');
        }else{
            $data->start_date = $request->startDate;
            $data->end_date = $request->endDate;
            $data->save();

            return redirect()->back()->with('message','Room booked Successfully');
        }
        
    }
}
