<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ad;
use \Illuminate\Validation\ValidationException;

class BoardController extends Controller
{
    public function mainPage()
    {
        $categories = Category::all();

        return view('task2.main', ['categories'=>$categories]);

    }

    /**
     * @throws ValidationException
     */
    public function adsPage(Request $request, $id)
    {

        if($request->has('submit'))
        {

            $request -> validate([
                'name' => 'required',
                'text' => 'required',
                'date' => 'required',
            ]);

            $name = $request->input('name');
            $text = $request->input('text');
            $date = $request->input('date');

            $ad = new Ad(['name'=>$name, 'text'=>$text, 'date'=>$date]);

            $category = Category::find($id);

            $category -> ads() -> save($ad);

        }


        $ads = Ad::where('category_id', $id)
            ->orderBy('date', 'desc')
            ->get();

        return view('task2.ads', ['ads'=>$ads]);
    }


}
