<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:event.list',   ['only' => ['index']]);
        $this->middleware('permission:event.show',   ['only' => ['show']]);
        $this->middleware('permission:event.create', ['only' => ['create','store']]);
        $this->middleware('permission:event.edit',   ['only' => ['edit','update']]);
        $this->middleware('permission:event.delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view('pages.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
            'status'        => 'required|not_in:0',
        ]);

        $data = $request->all();

        $event = Event::create($data);

        if ($event) {
            return redirect()->route('events.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('pages.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('pages.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name'          => 'required|string',
            'description'   => 'required|string',
            'status'        => 'required|not_in:0',
        ]);

        $data = $request->all();

        $eventUp = $event->update($data);

        if ($eventUp) {
            return redirect()->route('events.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $eventDel  = $event->delete();

        if ($eventDel) {
            return redirect()->route('events.index');
        }
    }
}
