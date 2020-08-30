<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::orderBy('id','desc')->get();

      return View::make('users.index', [
      'users'=> $users
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $validator = Validator::make($request->all(), [
        'last_name' => 'required|max:255',
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed'
        ]);

        if($validator->fails()){
          return back()->witherrors($validator)->withInput();
        }

        $data = $request->only('name', 'email', 'password', 'last_name');
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect('/users')->with('success', 'Utilisateur enregistré avec succès');

    }
    public function saveUser(Request $request)
    {


      $validator = Validator::make($request->all(), [
        'last_name' => 'required|max:255',
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8|confirmed'
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'data' => $validator->messages(),
            ]);

        }

        $data = $request->only('name', 'email', 'password', 'last_name');
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return response()->json([
            'success' => true,
            'data' => "Utilisateur enregistré !",
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
        $user = User::find($id);

        return View::make('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return View::make('users.edit', ['user' => $user ]);
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

         $data = $request->only(['name', 'email', 'password', 'last_name']);
         $data['password'] = Hash::make($data['password']);
         User::find($id)->update($data);
         return redirect('/users')->with('success', 'Utilisateur modifié avec succès');
     }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::where('id',$id)->delete();
      return Response()->json();
    }

}
