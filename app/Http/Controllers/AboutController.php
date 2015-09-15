<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $staff = [
                    ['name'=>'Mel', 'age'=>31],
                    ['name'=>'Brian', 'age'=>14],
                    ['name'=>'Jake']
                ];

        $comments = [
        //  ['heading'=>'Great Product', 'comment'=>'I love this thing!'],
        //  ['heading'=>'<h1>Hello</h1>', 'comment'=>'<script>location="http://www.trademe.co.nz"</script>']
         ];

        return view('about.index')->with([
            'title' => $title,
            'metaDesc' => $metaDesc,
            'staff' => $staff,
            'comments'=>$comments
        ]);
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
            'last_name'=>'required|min:2|max:30',
        ] );

        // Validation passed
        // $staff = new \App\Staff();

        // $staff->first_name = $request->first_name;
        // $staff->last_name = $request->last_name;
        // // $staff->age = $request->age;

        // $staff->save();
        \App\Staff::create($request->all());

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $request;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
