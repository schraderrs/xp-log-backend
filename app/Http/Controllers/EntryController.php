<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entries = Entry:all()->toArray();
        return view('entries.index', compact('entries'))

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entry.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name'       =>       'required',
          'email'      =>       'required',
          'password'   =>       'required'
        ]);
        $entry = new Entry([
          'entry'     =>        $request->get('entry')
        ])
        $entry->save();
        return redirect()->route('student.index')->with('succes', 'Nieuwe entry aangemaakt')
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entry = Entry::find($id);
        return view('entry.edit', compact('entry', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'name'    =>  'required',
          'email'     =>  'required'
        ]);
        $entry = Entry::find($id);
        $entry->entry = $request->get('entry');
        $entry->save();
        return redirect()->route('student.index')->with('success', 'Is aangepast broer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entry = Entry::find($id);
        $entry->delte();
        return redirect()->route('student.index')->with('succes', 'Doei entry')
    }
}
