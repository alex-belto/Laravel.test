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

    public function moderation(){

        $country = Country::all();

        $countriesCollection = Country::with('cities', 'sights')->get();

        return view('cities.moder', ['countries'=>$countriesCollection]);

    }

    public function editCountry(Request $request, $id)
    {

        $country = Country::find($id);

        if($request-> has('submit'))
        {

            $country -> name = $request -> input('name');
            $country -> save();

            $request -> session() -> flash('message', 'Запись изменена!');
            return redirect('/moderation/');
        }


        return view('cities.edit', ['edit'=>$country]);
    }

    public function editCity(Request $request, $id)
    {
        $city = City::find($id);

        if($request-> has('submit'))
        {

            $city -> name = $request -> input('name') -> save();

            $request -> session() -> flash('message', 'Запись изменена!');
            return redirect("/moderation/");
        }

        return view('cities.edit', ['edit'=>$city]);

    }

    public function editSight(Request $request, $id)
    {
        $sight = Sight::find($id);

        if($request-> has('submit'))
        {

            $sight -> name = $request -> input('name');
            $sight -> description = $request -> input('description');
            $sight -> save();

            $request -> session() -> flash('message', 'Запись изменена!');
            return redirect("/moderation/");
        }

        return view('cities.edit', ['edit'=>$sight]);
    }
    public function add(Request $request, $loc, $id)
    {

        if($request -> has('submit') AND $loc == 'country'){

            $country = new Country;
            $country -> name = $request -> input('name');
            $country -> save();
            $request -> session() -> flash('message', 'Запись изменена!');
            return redirect("/moderation/");
        }
        if($request -> has('submit') AND $loc == 'city'){

            $city = new City(['name' => $request -> input('name')]);
            $country = Country::find($id);
            $country -> cities() -> save($city);
            $request -> session() -> flash('message', 'Запись изменена!');
            return redirect("/moderation/");
        }
        if($request -> has('submit') AND $loc == 'sight'){
            $sight = new Sight(['name'=>$request -> input('name'), 'description'=>$request -> input('description')]);
            $city = City::find($id);
            $city -> sights() -> save($sight);
            $request -> session() -> flash('message', 'Запись изменена!');
            return redirect("/moderation/");
        }

        return view('cities.add');
    }

    public function dellCountry(Request $request, $id)
    {
        $country = Country::find($id);
        $country -> delete();
        $request -> session() -> flash('message', 'Запись удалена!');
        return redirect("/moderation/");
    }

    public function dellCity(Request $request, $id)
    {
        $city = City::find($id);
        $city -> delete();
        $request -> session() -> flash('message', 'Запись удалена!');
        return redirect("/moderation/");
    }
    public function dellSight(Request $request, $id)
    {
        $sight = Sight::find($id);
        $sight -> delete();
        $request -> session() -> flash('message', 'Запись удалена!');
        return redirect("/moderation/");
    }

}
