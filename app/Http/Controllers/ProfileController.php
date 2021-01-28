<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        {
            $users = User::find($id);
            if(auth()->user()->id !== $user->user_id){
                return redirect('/frontend')->with('error', 'Page non autorisée');
            }
            return view('frontend.profile')->with('user', $user);
        }
    
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
        $this->validate($request,[
            'name' => 'required',
            'nom' => 'required',
            'date' => 'required',
            'solde' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->input('name');
        $user->nom = $request->input('nom');
        $user->date = $request->input('date');
        $user->solde = $request->input('solde');
        $user->email = $request->input('email');
        $user->save();

        return redirect('/frontend')->with('success', 'Merci nous avions pris en compte votre modification !');
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
}
