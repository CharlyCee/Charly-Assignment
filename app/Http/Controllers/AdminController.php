<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreadminRequest;
use App\Http\Requests\UpdateadminRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $admins = admin::all();
        return view('admin.dashboard', compact('users', 'admins'));
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
     * @param  \App\Http\Requests\StoreadminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreadminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateadminRequest  $request
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateadminRequest $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(admin $admin)
    {
        //
    }
    public function allusers(){
        $users = User::all();
        return view('admin.users.all', compact('users'));
    }
    public function resetpassword($id){
        $user = User::find($id);
        if ($user) {
            $user->password = Hash::make('123456');
            $user->update();
        }
        return redirect()->back()->with('success', 'Password has been reset to 123456');
    }
    public function deleteuser($id){
        $user = User::find($id);
        if ($user) {
            $user->delete();
        }
        return redirect()->back()->with('success', 'User Has Been Deleted');
    }
}
