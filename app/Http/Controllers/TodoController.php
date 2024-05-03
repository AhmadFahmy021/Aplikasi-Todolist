<?php

namespace App\Http\Controllers;

use App\Models\Collab;
use App\Models\Collabboration;
use App\Models\Lists;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        // dd($user);
        $uniq = Crypt::decrypt($id);
        $collab = Collab::where('list_id', $uniq)->get()->toArray();
        $userId = array_column($collab, 'user_id');
        $user = User::where('id','!=', Auth::user()->id)->whereNotIn('id', $userId)->get();
        $kode = base64_encode($uniq);
        $data = Todo::where('list_id',$uniq)->get();
        $list = Lists::where('id', $uniq)->first();
        // $list = Collabboration::where('list_id', $uniq)->where('user_id', '!=',1)->get();
        // dd($user);
        $title = $list->title;
        return view('detail', compact(['data', 'user','kode', 'id', 'list', 'title']));
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
        
        Todo::insert($request->data);

        return response()->json('sucsess');
    }

    /**
     * Display the specified resource.
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data = Todo::findOrFail($request->kode);
        $data->update(['status' => $request->data]);
        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $todo)
    {
        $decode = Crypt::decrypt($todo);
        $data = Todo::findOrFail($decode);
        $data->delete();
        return back();
    }
    public function deleteAll($todo){
        $decode = Crypt::decrypt($todo);
        $data = Todo::where('list_id', $decode)->get();
        // foreach ($variable as $key => $value) {
        //     # code...
        // }
        Todo::destroy($data);
        // dd($data);
        return back();
    }
}

