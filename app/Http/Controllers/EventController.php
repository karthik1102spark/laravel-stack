<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\PostCreated;

class EventController extends Controller
{
    public function doEvents(Request $request){
        
        event(new PostCreated('from controller'));
        // (or)
        //PostCreated::dispatch('from controller');
        dd('success');
    }

}
