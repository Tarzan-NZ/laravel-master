<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function changePassword(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'current_password'=>'required',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required|min:8'
        ]);

        // Make sure the current password is the same as the the one in the database
        $validator->after(

            function($validator) use($request){

                if ( !Auth::attempt([ 'email'=>Auth::user()->email, 'password'=>$request->current_password ]) ) {
                    $validator->errors()->add('current_password','Incorrect Password');
                }
            }
        );

        // If the validation failed
        if ( $validator->fails() ) {
            return redirect('dashboard')->withErrors($validator);
        }

        // Change the users password
        $user = \App\User::find( Auth::user()->id);
        $user->password = bcrypt($request->password);
        $user->save();

        // Prepare a flash message
        \Session::flash('password_change', 'Your password has been successfully updated');


        return redirect('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
