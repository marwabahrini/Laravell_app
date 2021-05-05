<?php

namespace App\Http\Controllers;

use App\Note;
use App\Http\Requests\NoteCreateRequest;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }

    public function create()
    {
        return view('note.create');
    }

    public function show(Note $note)
    {
        return view('note.show');
    }

    
    public function edit(Note $note)
    {
        return view('note.edit');
    }

    public function update(NoteCreateRequest $request, Note $note)
    {
        $todo->update(['title' => $request->title]);
        if($request->stepName){
            foreach ($request->stepName as $key => $value ) {
                $id = $request->stepId[$key];
            
            }
        }
        return redirect(route('note.index'))->with('message', 'Updated!');
    }



    public function destroy(Note $note)
    {
    
        $note->delete();
        return redirect()->back()->with('message', 'Note Deleted!');
    }
}