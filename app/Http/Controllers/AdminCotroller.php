<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Gallary;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
class AdminCotroller extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $userType = Auth()->user()->usertype;

            if($userType == 'user')
            {
                $data = Room::all();
                $gallary = Gallary::all();
                return view('home.index',compact('data','gallary'));
            }

            if($userType == 'admin')
            {
                return view('admin.index');
            }else {
                return redirect()->route('login'); 
            }
        }
    }

    public function home()
    {
        $data = Room::all();
        $gallary = Gallary::all();

        return view('home.index',compact('data','gallary'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }

    public function add_room(Request $request)
    {
        $data = new Room();

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;
        if($image)
        {
            $imageName= time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imageName);

            $data->image = $imageName;
        }
        $data->save();

        return redirect()->back();
    }

    public function view_room()
    {
        $data = Room::all();
        //  dd($data);   
        return view('admin.view_room',compact('data'));
    }

    public function room_delete($id)
    {
        $data = Room::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function room_update($id)
    {
        $data = Room::find($id);
        return view('admin.room_update',compact('data'));
    }
    public function edit_room(Request $request,$id){
        $data = Room::find($id);

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;

        $image = $request->image;

        if($image)
        {
            $imageName= time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imageName);

            $data->image = $imageName;
        }
        $data->save();

        return redirect()->back();
    }

    public function bookings()
    {
        $data = Booking::all();
        return view('admin.bookings',compact('data'));
    }

    public function delete_booking($id)
    {
        $data = Booking::find($id);

        if ($data) {
            $data->delete();
        }
        return redirect()->back();
    }

    public function approve_booking($id)
    {
        $data = Booking::find($id);

        $data->status = 'approve';

        $data->save();

        return redirect()->back();
    }

    public function rejected_booking($id)
    {
        $data = Booking::find($id);

        $data->status = 'rejected';

        $data->save();

        return redirect()->back();
    }

    public function view_gallary()
    {
        $data = Gallary::all();
        return view('admin.view_gallary',compact('data'));
    }

    public function upload_gallary(Request $request)
    {
        $data = new Gallary();

        $image = $request->image;
        if($image){
            $imageName = time(). '.' .$image->getClientOriginalExtension();

            $request->image->move('gallary',$imageName);
            $data->image = $imageName;
            $data->save();

            return redirect()->route('view_gallary');
        }
    }

    public function delete_gallary($id)
    {
        $data = Gallary::find($id);

        $data->delete();

        return redirect()->back();
    }
}
