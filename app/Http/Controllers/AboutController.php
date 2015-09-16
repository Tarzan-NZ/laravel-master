<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Staff;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // Create some data
        $title = 'About Page TEST';
        $metaDesc = 'We have staff members';

        $comments = [];

        $allStaff = Staff::all();

        return view('about.index', compact('title', 'metaDesc','allStaff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {   
        $this->validate( $request, [
            'first_name'=>'required|min:2|max:20',
            'last_name'=>'required|min:2|max:30'
        ] );

        // Validation passed
        // $staff = new Staff();

        // $staff->first_name = $request->first_name;
        // $staff->last_name = $request->last_name;
        // $staff->age = $request->age;

        // $staff->save();

        $request['slug'] = str_slug($request->first_name.' '.$request->last_name);

        $staffMember = Staff::create($request->all());

        return redirect('about/'.$staffMember->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($slug)
    {
        $staffMember = Staff::where('slug', $slug)->firstOrFail();

        return view('about.show', compact('staffMember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($slug)
    {   
        $staffMember = Staff::where('slug', $slug)->firstOrFail();

        return view('about.edit', compact('staffMember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
