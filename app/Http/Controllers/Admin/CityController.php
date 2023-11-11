<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\City;


class CityController extends Controller
{
    public function index(){
        $cities = DB::table('city')->get();
        return view('admin.cities.index', compact('cities'));
    }
    public function create(){
        return view('admin.cities.create'); 
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|max:255',
        ]);

        $lastCityId = City::max('city_id');

        $city = new City;
        $city->city_id = $lastCityId + 1;
        $city->city_name = $request->input('name');
        $city->save();
    
        return redirect()->route('cities.index')->with('success', 'Місто створено успішно.');
        
    }
    public function show($id){
        $city = City::find($id);
        if ($city) {
            return view('admin.cities.show', compact('city'));
        } else {
            return redirect()->route('cities.index')->with('error', 'Місто не знайдено або його не існує');
        }
        
    }
    
    public function edit(City $city, $id){
        $oldCity = City::find($id);
        $newCityName = '';
        
        return view('admin.cities.edit', compact('oldCity', 'newCityName'));
    }
    public function update(Request $request,  $id){
        $newCityName = $request->input('new_city_name');
        $oldCity = City::find($id);

        if ($oldCity) {
            $oldCity->city_name = $newCityName;
            $oldCity->save();
        }

        return redirect()->route('cities.index')->with('success', 'Місто успішно змінено.');
        
    }
    public function delete($id){
        $city = City::find($id);
        if ($city) {
            $city->delete();
            return redirect()->route('cities.index')->with('success', 'Місто успішно видалено.');
        }else {
            return redirect()->route('cities.index')->with('error', 'Помилка видалення міста.');
        } 
    }
}
