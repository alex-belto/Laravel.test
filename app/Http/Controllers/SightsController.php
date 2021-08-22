<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\Sight;


class SightsController extends Controller
{
    public function getCountries()
    {
        $countries = Country::all();


        return view('cities.countries', ['countries'=>$countries]);
    }
    public function getCities($id)
    {
        $cities = City::where('country_id', $id)
            ->orderBy('name', 'desc')
            ->get();

        return view('cities.cities', ['cities'=> $cities]);
    }
    public function getSights($id)
    {
        $sights = Sight::where('city_id', $id)
            ->orderBy('name', 'desc')
            ->get();

        return view('cities.sights', ['sights'=>$sights]);
    }
    public function getSight($id)
    {
        $sight = Sight::find($id);

        return view('cities.sight', ['sight'=>$sight]);
    }
}
