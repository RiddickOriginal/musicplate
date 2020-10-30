<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditRequest;
use App\Models\Plate;
use Illuminate\Support\Facades\DB;

class PlateController extends Controller
{
    public function edit(EditRequest $request){
        $id = $request->input('id');
        $plate = Plate::find($id);
        $plate->album = $request->input('album');
        $plate->band = $request->input('band');
        $plate->save();
        return redirect()->route('home')->with('success', 'Пластинка изменена');
    }

    public function getEditData($id){
        return view('edit', ['plate'=>Plate::find($id)]);
    }

    public function getAllData($page){
        $perPage = 12;
        $data = Plate::all()->sortBy('band');
        return view('home', [
            'plates' => $data->forPage($page, $perPage),
            'pagesCount' => $data->count()/$perPage,
            'page' => $page
        ]);
    }

    public function delete(Request $request){
        $id = $request->input('id');
        Plate::find($id)->delete($id);
        return redirect()->route('home')->with('success', 'Пластинка удалена');
    }
}
