<?php

namespace App\Http\Controllers;

use App\Models\Time;
use Illuminate\Http\Request;


class TimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $times = Time::all();
        return view("time.times", ['times' => $times]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view("time.create-time");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        try {
            Time::create([
                'name' => $request->input('name'),
                'league' => $request->input('league'),
                'country' => $request->input('country')
            ]);
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', $ex->getMessage());
        }
        return redirect()->route("times.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Time $time)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $time = Time::findOrFail($id);

        return view("time.edit-time", ["time"=> $time]);
    }

    /**
     * Update the specified resource in storage.
     */
        public function update(Request $request, string $id)
        {   
            $time = Time::findOrFail($id);
            
            $request->validate([
                'name' => 'required',
                'league' => 'required',
                'country' => 'required',
            ]);
            $time->update([
                'name' => $request->name,
                'league' => $request->league,
                'country' => $request->country,
            ]);

            return redirect()->route('times.index')->with('success', 'Team updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $time = Time::findOrFail($id);
        $time->delete();

        return redirect()->route('times.index')->with('success', 'Time deletado com sucesso');
    }

    public function delete(Request $request, string $id)
    {
        $time = Time::findOrFail($id);
        return view("time.delete-time", ['time' => $time]);
    }
}
