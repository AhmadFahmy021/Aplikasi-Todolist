<?php

namespace App\Http\Controllers;

use App\Models\Collab;
use App\Models\Collabboration;
use App\Models\Lists;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ListsController extends Controller
{
    /**
     * Display a listsing of the resource.
     */
    public function index()
    {
        $data = Lists::where('user_id', Auth::user()->id)->with(['todo','collab'])->get();
        // dd($data);
        $collab = Collab::where('user_id', Auth::user()->id)->get()->toArray();
        $list = array_column($collab, 'list_id'); 
        // dd($list);
        $collabData = Lists::whereIn('id',$list)->with(['todo'])->get();
        return view('index', compact(['data', 'collabData']));
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
        // //
        // dd($request);
        $request->validate([
            'title' => 'required',
        ]);
        $req = [
            'title' => $request->title,
            'description' => $request->deskripsi,
            'user_id' => 1,
        ];
        Lists::create($req);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lists $lists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($lists)
    {
        $id = Crypt::decrypt($lists);
        $data = Lists::findOrFail($id);
        return view('edit', compact('data'));
        // dd($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $lists)
    {
        // dd($lists);
        $id = Crypt::decrypt($lists);
        $data = Lists::findOrFail($id);
        $req = [
            'title' => $request->judul,
            'description' => $request->deskripsi,
        ];
        $data->update($req);
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $lists)
    {
        // dd($lists);
        $id = Crypt::decrypt($lists);
        $data = Lists::findOrFail($id);
        $todo = Todo::where('list_id', $data->id)->get();
        $collab = Collab::where('list_id', $data->id)->get();
        // dd($todo);
        Todo::destroy($todo);
        Collab::destroy($collab);
        $data->delete();
        return redirect('/dashboard');
    }
}
