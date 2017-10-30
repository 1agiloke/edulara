<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;

class EventController extends Controller
{
    //
    public function Show($id)
    {
    	$event = Event::where('idevent', $id)->first();

    	return view('event', ['event'=>$event]);
    }


    public function Index()
    {
 		// $users = DB::table('users')->get(); Query Builder
 		$events = Event::all();
    	return view('pages.event', ['events'=>$events]);
    }

    public function Edit($id)
    {
    	$event = Event::find($id);

    	return view('editEvent', ['event'=>$event]);
    }

    public function Update(Request $req, $id)
    {

    	$event = Event::find($id);
    	$event->namaevent = $req->nama;
    	$event->ketevent = $req->desk;
    	$event->venevent = $req->venue;
		$event->addevent = $req->alamat;
		$event->save();

		return redirect('/events');
    }
    public function Add()
    {
    	return view('addEvent');
    }

    public function Insert(Request $req)
    {
    	$this->validate($req, [
    		'id' => 'required'
    	]);

    	$event = new Event;
    	$event->idevent = $req->id;
    	$event->namaevent = $req->nama;
    	$event->ketevent = $req->desk;
    	$event->venevent = $req->venue;
		$event->addevent = $req->alamat;
		$event->save();

		return redirect('/events');	
    	return view('editEvent', ['event'=>$event]);
    }

    public function Delete($id)
    {
    	// $event = Event::find($id);
    	// $event->delete();
    	Event::destroy($id);
    	return redirect('/events');
    }

}
