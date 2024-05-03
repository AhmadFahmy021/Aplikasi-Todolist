<?php

namespace App\Http\Controllers;

use App\Models\Collab;
// use App\Models\Collabboration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CollabborationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $decode = Crypt::decrypt($request->kode);
        $data = [
            'user_id' => $request->data,
            'list_id' => $decode,
        ];

         Collab::create($data);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show( $collabboration)
    {
        // dd($collabboration);
        $decode = Crypt::decrypt($collabboration);
        $data = Collab::where('list_id', $decode)->get();
        return view('collab', compact(['data']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collab $collabboration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Collab $collabboration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($collabboration)
    {
        // dd($collabboration);
        $decode = Crypt::decrypt($collabboration);
        $data = Collab::findOrFail($decode);
        // dd($data);
        $data->delete();
        return back();
    }
}
