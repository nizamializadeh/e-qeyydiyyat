<?php

namespace App\Http\Controllers\backend;

use App\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences =Experience::all();
        $settings = $this->getSettingsForTable();
        return view('backend.experience.index',compact('experiences','settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.experience.create',compact('settings'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Experience $experience)
    {
        $experience->create($request->all());
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
    public function edit(Experience $experience)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit experience';
        return view('backend.experience.edit',compact('experience','setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience $experience)
    {
        $experience->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back();
    }
    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create experience',
            'flashSessionKey' => 'experience',
            'flashSessionValue' => 'Experience created',
            'backButton' => [
                'text' => "Back",
                'url' => route('experience.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Experience',
            'table' => 'Experience',
            'createButton' => [
                'text' => "Create Country ",
                'url' => route('experience.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'Count',
                ]
                ,
                [
                    'label' => 'Header',
                ]
                ,
                [
                    'label' => 'Description',
                ]


            ],
        ];
    }
}
