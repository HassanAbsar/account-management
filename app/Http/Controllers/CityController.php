<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Yajra\DataTables\Facades\DataTables;

class CityController extends Controller
{
    public function Data(Request $request)
    {
        if ($request->ajax()) {

            $query = City::select(
                'cities.id',
                'cities.name',

            );


            $datatable = DataTables::eloquent($query)
                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $btn = '<div class="d-flex"><a class="btn btn-info btn-sm mx-2" href="' .
                    route('city.edit', $row->id) .
                    '"><i class="fas fa-pencil"></i></a>
                    <a class="btn btn-success btn-sm mx-2" href="' .
                    route('city.view', $row->id) .
                    '"><i class="fas fa-eye"></i></a>
                    <a class="btn btn-danger btn-sm mx-2" href="' .
                    route('city.destroy', $row->id) .
                    '"><i class="fas fa-trash"></i></a>
                     </div>';
                    return $btn;
                })
                ->rawColumns(['action']);

                if($request->search['value'] == null ){

                    $datatable = $datatable->filter(function ($query) use ($request) {
                    if ($request->has('name') && !is_null($request->name)) {
                        $query->where('name', 'like', "%{$request->name}%");
                    }


                });
            }

               return $datatable->make(true);
        }

    }


    public function index(){
      return view('setting.city.index');
  }
    public function create()
    {
      return view('setting.city.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                Rule::unique('cities', 'name')->whereNull('deleted_at')
            ],
          ]);

      $city = new City();
      $city->name = $request->name;
      $city->save();
      return redirect()->route('city.index')->with('success', 'City Created Successfully.');
    }

    public function edit($id)
    {
     
      $city = city::find($id);
      return view('setting.city.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
     
        $validated = $request->validate([
            'name' => [
                'required',
                Rule::unique('cities', 'name')->whereNull('deleted_at')->ignore($id)
            ],
          ]);
      $city = City::find($id);
      $city->name= $request->name;
      $city->save();
      return redirect()->route('city.index')->with('success', 'City Updated Successfully.');
    }

    public function view($id)
    {
     
      $city = City::find($id);
      return view('setting.city.view', compact('city'));
    }

    public function destroy($id)
    {
    
      $city = City::find($id)->delete();
      return redirect()->route('city.index')->with('success', 'City Deleted Successfully.');
    }
}
