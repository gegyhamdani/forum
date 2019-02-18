<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Input;
use Hash;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->middleware('auth');
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store()
    {
        $user = new User;
        
        
        date_default_timezone_set('Asia/Jakarta');
        $join = date("YmdHis");
        $mem_id = "MEM" . date("Ymd") . (rand(0,9) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)));

        $member = $mem_id;
        $name = Input::get('member_name');
        $usern = Input::get('username');
        $pass = Hash::make(Input::get('password'));
        $email = Input::get('email');
        $lahir = Input::get('tgl_lahir');
        $kelamin = Input::get('jk');
        $joins = $join;
        $level = 1;

        if($name == null | $email == null | $pass == null){
            return redirect('user/register')->with('alert','Semua Field Harus Terisi !');        
        }

        if(User::where('email', '=', Input::get('email'))->exists()){
            return redirect('user/register')->with('alert','Email Sudah Terpakai !');  
        }

        if(User::where('username', '=', Input::get('username'))->exists()){
            return redirect('user/register')->with('alert','Username Sudah Terpakai !');
        }

        $user->member_id = $member;
        $user->member_name = $name;
        $user->username = $usern;
        $user->password = $pass;
        $user->email = $email;
        $user->tgl_lahir = $lahir;
        $user->jk = $kelamin;
        $user->tgl_join = $joins;
        $user->level = $level;
        $user->save();
        return redirect('user/login');
    }

    public function login(){
        return view('user.login');
    }

    public function loginPost(Request $request){
        $username = $request->username;
        $password = $request->password;
        $data = User::where('username',$username)->first();
        if(count($data) > 0){ 
            if(Hash::check($password,$data->password)){
                Session::put('username',$data->username);
                Session::put('email',$data->email);
                Session::put('member_id',$data->member_id);
                Session::put('login',TRUE);
                return redirect('forum');
            }
            else{
                return redirect('user/login')->with('alert','Password atau Email, Salah!'.Hash::check($password,$data->password));
            }
        }
        else{
            return redirect('user/login')->with('alert','Password atau Email, Salah!');
        }
    }
    public function logout(){
        Session::flush();
        return redirect('user/login')->with('alert','Kamu sudah logout');
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
}
