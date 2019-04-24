<?php

namespace App\Http\Controllers\backend;

use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public function index()
    {
        $countries =Country::all();
        $settings = $this->getSettingsForTable();
        return view('backend.country.index',compact('countries','settings'));
    }
    public function create()
    {
        $settings = $this->getSettingsForForm();
        return view('backend.country.create',compact('settings'));
    }
    public function store(Request $request,Country $country)
    {
        $country->create($request->all());
        return back();
    }
    public function edit(Country $country)
    {
        $setting = $this->getSettingsForForm();
        $setting['title'] = 'Edit category';
        return view('backend.country.edit',compact('country','setting'));
    }
    public function update(Request $request, Country $country)
    {
        $country->update($request->all());
        return back();
    }
    public function destroy(Country $country)
    {
        $country->delete();
        return back();
    }

    private  function  getSettingsForForm()
    {
        return [
            'title' => 'Create country',
            'flashSessionKey' => 'country',
            'flashSessionValue' => 'Country created',
            'backButton' => [
                'text' => "Back",
                'url' => route('country.index')
            ]
        ];
    }



    private function getSettingsForTable()
    {
        return  [
            'title' => 'Country',
            'table' => 'Country',
            'createButton' => [
                'text' => "Create Country ",
                'url' => route('country.create')
            ],
            'columns' => [
                [
                    'label' => 'ID',
                ],
                [
                    'label' => 'name',
                ]


            ],
        ];
    }
}
