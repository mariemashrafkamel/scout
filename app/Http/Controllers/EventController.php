<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function store(Request $request){
        $input = $request->all();
        $event = Event::create($input);
        return response()->json($event);
    }
}