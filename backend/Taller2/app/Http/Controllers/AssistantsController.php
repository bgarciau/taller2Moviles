<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assistant;
use Carbon\Carbon;

class AssistantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assistants = Assistant::all();
        return view('assistants', ['assistants' => $assistants]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $assistants = new Assistant();
        $assistants->name = $request->name;
        $assistants->last_name = $request->last_name;
        $assistants->age = $request->age;
        $assistants->num_companions = $request->num_companions;
        $assistants->register_time = Carbon::now();
        $assistants->save();
        return response()->json([
            'message' => 'registrado exitosamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $assistants = Assistant::find($id);
        $assistants->delete();
        return redirect()->route('assistants.index');
    }
}
