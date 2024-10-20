<?php

namespace App\Http\Controllers;

use App\Models\Foodchef;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function user()
    {
        $data = User::all();
        return view('admin.users', compact("data"));
    }

    public function deleteuser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function updateview($id)
    {
        $data = food::find($id);
        return view('admin.updateview', compact('data'));
    }
    public function update($id,Request $request)
    {
        $data = food::find($id);
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->Title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function foodmenu()
    {
        $data = food::all();

        return view('admin.foodmenu', compact("data"));
    }

    public function uploadfood(Request $request)
    {
        $data = new Food;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);

        $data->image = $imagename;

        $data->Title = $request->title;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();

    }
    public function reservation(Request $request)
    {
        $data = new Reservation;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;

        $data->save();

        return redirect()->back();

    }

    public function viewreservation()
    {
        if(Auth::id())
        {
            $data = Reservation::all();

            return view("admin.adminreservation", compact("data"));
        } else {
            return redirect('login');
        }
    }

    public function viewchef ()
    {
        $data = foodchef::all();
        return view('admin.adminchef', compact("data"));
    }
    public function uploadchef (Request $request)
    {
        $data = new Foodchef;
        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('chefimage', $imagename);

        $data->image = $imagename;

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function updatechef($id)
    {
        $data = Foodchef::find($id);

        return view('admin.updatechef', compact("data"));
    }

    public function updatefoodchef($id, Request $request)
    {
        $data = Foodchef::find($id);
        $image = $request->image;

        if($image) {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('chefimage', $imagename);
            $data->image = $imagename;
        }

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();
    }

    public function deletechef($id)
    {
        $data = Foodchef::find($id);
        $data->delete();

        return redirect()->back();
    }

    public function orders()
    {
        $data = Order::all();

        return view('admin.orders', compact('data'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $data = Order::where('name', 'like', '%' . $search . '%')->orWhere('foodname', 'Like', '%'.$search. '%')->orWhere('address', 'Like', '%'.$search. '%')->orWhere('quantity', 'Like', '%'. $search . '%')->orWhere('price', 'Like', '%' . $search . '%')->get();

        return view('admin.orders', compact('data'));


    }
}
