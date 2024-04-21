<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Events\eventExample;
use Illuminate\Http\Request;
use Exception; // Import the Exception class


class EventsController extends Controller
{
    //

    public function launchEvent(Request $request){
        // $user=new User;
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $name=$request->name;
        // dd($request);
        $person = User::getUserById($name);
        if(!empty($person)){ 
            event(new eventExample($person));
            return view('eventSuccessful', ['person' => $person]);
            // try{
            //      eventExample::dispatch($person);   
            // }
            // catch(Exception $e){
            // return view('eventfailed');
           
         }
        else{
            return view('eventfailed');
        }
       
    }
}
