<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = factory(User::class, 20)->make();

        return view('index', compact('users'));
    }

    public function create()
    {
        $user = new User;
        return view('create', compact('user'));
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show($id)
    {
        return view('show', compact(User::find($id)));
    }

    public function edit($id)
    {
        return view('edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
