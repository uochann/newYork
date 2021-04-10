<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // $test = Event::table('');
        return view('event.index');
    }

    public function create()
    {
        return view('event.create');
    }

    public function store()
    {
        return redirect()->route('event.index');
    }

    public function edit()
    {
        return view('event.index');
    }

    public function update()
    {
        return redirect()->route('event.index');
    }

    public function delete()
    {
        return redirect()->route('event.index');
    }

    public function search()
    {
        return redirect()->route('event.index');
    }
}
