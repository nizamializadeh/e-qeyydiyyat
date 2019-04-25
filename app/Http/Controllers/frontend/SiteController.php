<?php

namespace App\Http\Controllers\frontend;

use App\Country;
use App\Experience;
use App\Partner;
use App\Select1;
use App\Select2;
use App\Select3;
use App\Select4;
use App\Slider;
use App\Univestety;
use App\Video;
use Illuminate\Auth\Access\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SiteController extends Controller
{
    public function index()
    {
        $univestetys = DB::table('countries')
            ->join('univesteties', ['countries.id' => 'univesteties.country_id'])
            ->where('univesteties.type', 0)
            ->select('univesteties.id','univesteties.img','univesteties.prflimg','countries.name','univesteties.header','univesteties.desc','univesteties.price','univesteties.year')
            ->get()->chunk(2);

        $sliders=Slider::all();
        $video =Video::all()->first();
        $partners =Partner::all();
        $select1s =Select1::all();
        return view('frontend.index',compact('video','partners','sliders','select1s','univestetys'));
    }
    public function universty()
    {
        $univestetys = DB::table('countries')
            ->join('univesteties', ['countries.id' => 'univesteties.country_id'])
            ->select('univesteties.id','univesteties.img','univesteties.prflimg','countries.name','univesteties.header','univesteties.desc','univesteties.price','univesteties.year')
            ->get();
        $countries =Country::all();
        return view('frontend.universty',compact('univestetys','countries'));
    }
    public function universitydetail($id)
    {
        $univestetys = DB::table('countries')
            ->join('univesteties', ['countries.id' => 'univesteties.country_id'])
            ->where('univesteties.id', $id)
            ->select('univesteties.id','univesteties.img','univesteties.prflimg','countries.name','univesteties.header','univesteties.desc','univesteties.price','univesteties.year')
            ->first();
        $countries =Country::all();
        return view('frontend.universtysingle',compact('univestetys','countries'));
    }
    public function about()
    {

        $partners =Partner::all();
        $experiences =Experience::all();
        return view('frontend.about',compact('partners','experiences'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }

    public function set()
    {
        $country_id =input::get('country_id');
        $unis = DB::table('countries')
            ->join('univesteties', ['countries.id' => 'univesteties.country_id'])
            ->where('countries.id', $country_id)
            ->select('univesteties.id','univesteties.img','univesteties.prflimg','countries.name','univesteties.header','univesteties.desc','univesteties.price','univesteties.year')
            ->get();
        return response()->json($unis);
    }
    public function set1()
    {
        $select_id =input::get('select_id');
        $select2=Select2::where('select1_id','=',$select_id)->get();

        return response()->json($select2);
    }
    public function set2()
    {
        $select_id =input::get('select_id');
        $select3=Select3::where('select2_id','=',$select_id)->get();
        return response()->json($select3);
    }
    public function set3()
    {
        $select_id =input::get('select_id');
        $select4=Select4::where('select3_id','=',$select_id)->get();
        return response()->json($select4);
    }
}
