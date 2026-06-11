<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function index()
    {

    }

    function show(Event $event)
    {
        $categories = \App\Models\Category::all();

        return view('event-detail', compact('categories', 'event'));
    }

    function checkout()
    {
        return view('checkout');
    }

    function ticket()
    {
        return view('ticket');
    }
}