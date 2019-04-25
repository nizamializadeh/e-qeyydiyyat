<?php

namespace App\Http\Controllers\backend;

use App\Country;
use App\Univestety;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UniversitetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $univestetys = DB::table('countries')
            ->join('univesteties', ['countries.id' => 'univesteties.country_id'])
            ->select('univesteties.id','univesteties.img','univesteties.prflimg','countries.name','univesteties.header','univesteties.desc','univesteties.price','univesteties.year')
            ->get();
        $settings = $this->getSettingsForTable();
        return view('backend.universty.index',compact('univestetys','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        $countries=Country::all();
        return view('backend.universty.create',compact('settings','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $home =new Univestety();
        $file = $request->file('prflimg');
        if ($request->hasFile('prflimg')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $home->prflimg = $name;
        }
        $file = $request->file('img');
        if ($request->hasFile('img')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $home->img = $name;
        }
        $home->header = $request->header;
        $home->desc = $request->desc;
        $home->price = $request->price;
        $home->year = $request->year;
        $home->type = $request->type;
        $home->country_id = $request->country_id;
        $home->save();



        return back();
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
        public function edit(Univestety $universty)
    {
        $setting = $this->getSettingsForForm();
        $countries=Country::all();
        $setting['title'] = 'Edit Univestety';
        return view('backend.universty.edit',compact('universty','setting','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Univestety $universty)
    {
        $file = $request->file('prflimg');
        if ($request->hasFile('prflimg')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $universty->prflimg = $name;
        }
        $file = $request->file('img');
        if ($request->hasFile('img')) {
            $name = rand() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('photo'), $name);
            $universty->img = $name;
        }
        $universty->header = $request->header;
        $universty->desc = $request->desc;
        $universty->price = $request->price;
        $universty->year = $request->year;
        $universty->type = $request->type;
        $universty->country_id = $request->country_id;
        $universty->update();
        return back();

    }


    public function destroy(Home $home)
    {
        $home->delete();
        return back();
    }
    public function homeimg(HomeImage $image)
    {

        $image->delete();
        return back();
    }
    public function homeupload(Request $request)
    {
        $files = $request->file('img');
        if ($request->hasFile('img')) {
            foreach ($files as $doc) {
                $namex = rand() . "." . $doc->getClientOriginalExtension();
                $doc->move(public_path('photo'), $namex);
                $image = new HomeImage();
                $image->home_id = $request->home_id;
                $image->img = $namex;
                $image->save();
            }
        }
        return back();

    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create Home',
            'flashSessionKey' => 'universty',
            'flashSessionValue' => 'announcement created',
            'backButton' => [
                'text' => "Back",
                'url' => route('universty.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Homes',
            'table' => 'homes',
            'createButton' => [
                'text' => "Create announcement ",
                'url' => route('universty.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'Profilimage',
                ],
                [
                    'label' => 'Image',
                ],
                [
                    'label' => 'Header',
                ],
                [
                    'label' => 'Description',
                ],
                [
                    'label' => 'Price',
                ],
                [
                    'label' => 'Year',
                ]
                ,
                [
                    'label' => 'Country',
                ]
            ],
        ];
    }
}
