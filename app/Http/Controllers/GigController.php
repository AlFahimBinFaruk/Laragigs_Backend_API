<?php

namespace App\Http\Controllers;

use App\Models\Giglist;
use Illuminate\Http\Request;

class GigController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Giglist::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $authenticatedUserInfo= $this->me();

        $fields=$request->validate([
            'companyName'=>'required',
            'jobTitle'=>'required',
            'jobLocation'=>'required',
            'contactEmail'=>'required',
            'webappURL'=>'required',
            'tags'=>'required',
            'companyLogo'=>'required',
            'jobDesc'=>'required'
         ]);


          return Giglist::create([
            'companyName'=>$fields['companyName'],
            'jobTitle'=>$fields['jobTitle'],
            'jobLocation'=>$fields['jobLocation'],
            'contactEmail'=>$fields['contactEmail'],
            'webappURL'=>$fields['webappURL'],
            'tags'=>$fields['tags'],
            'companyLogo'=>$fields['companyLogo'],
            'jobDesc'=>$fields['jobDesc'],
            'gigCreatedBy'=>$authenticatedUserInfo->email
          ]);
      
        
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return auth()->user();
    }
}
