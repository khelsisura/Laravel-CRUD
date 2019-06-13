<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TableCrud;
use CountryState;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $crud = TableCrud::all();
        return view('crud.index', compact('crud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = CountryState::getCountries();
        return view('crud.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['state'] = CountryState::getCountryName($request->state);
        $this->validate($request, [
            'address' => 'required|string|max:20',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|integer'
        ]);
        TableCrud::create($request->all());
        return redirect()->route('crud.index')->with('success', 'Data created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crud = TableCrud::find($id);
        return view('crud.display', compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = TableCrud::find($id);
        $countries = array_merge([$crud->state => $crud->state], CountryState::getCountries());
        return view('crud.edit', compact('crud'), compact('countries'));
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
        echo $request['state'];
        if (strlen($request['state']) < 3) {
            $request['state'] = CountryState::getCountryName($request->state);
        }
        $this->validate($request, [
            'address' => 'required|string|max:20',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required|integer'
        ]);
        TableCrud::find($id)->update($request->all());
        return redirect()->route('crud.index')->with('success', 'Data udpate success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TableCrud::find($id)->delete();
        return redirect()->route('crud.index')->with('success', 'Data deleted success');
    }
}
