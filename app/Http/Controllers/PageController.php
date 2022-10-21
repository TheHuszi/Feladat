<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
use App\Http\Requests\HomePageRequest;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    function homepage() {        
        return view('homepage');
    }

    function homepage_process(HomePageRequest $request) {
        $validated = $request->validated();
    
        // dd( $validated );
        // User::create($validated)

        Message::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'textarea'=>$request->textarea,
            ]
            );
        
        Session::flash('uzenet', 'Köszönjük visszajelzésed!');
        return redirect()->back();
    }


}
