<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){

    }

    public function show(Company $company){
        return view('pages.company.show', compact('company'));
    }

    public function edit(Company $company){
        return view('pages.company.edit', compact('company'));
    }

    public function update(Company $company, Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'address'=> 'required',
            'latitude'=> 'required',
            'longitude'=> 'required',
            'radius_km'=> 'required',
            'time_in'=> 'required',
            'time_out'=>'required'
        ]);

        $company->update($request->validated);

        return redirect()->route('companies.show')->with('success', 'Company updated successfully');
    }
}
