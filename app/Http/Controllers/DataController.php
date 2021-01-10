<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Util\Notification;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = Data::paginate(3);

        return view('index', [
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $data = new Data();

        $data->name = $request->name;
        $data->points = $request->points;
        $data->birthdate = $request->birthdate;

        $data->save();

        return redirect('/data')->with('notification', new Notification('Registration successfull!', 'success'));
    }

    public function show($id)
    {
        $data = Data::find($id);

        return view('show', [
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        $data = Data::find($id);

        return view('form', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Data::find($id);

        $data->name = $request->name;
        $data->points = $request->points;
        $data->birthdate = $request->birthdate;

        $data->save();

        return redirect('/data')->with('notification', new Notification('Updated!', 'success'));
    }

    public function destroy($id)
    {
        Data::find($id)->delete();

        return redirect('/data')->with('notification', new Notification('Item deleted!', 'success'));
    }
}
