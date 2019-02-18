<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posting;
use App\Subforum;
use App\Comment;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Input;

class PostingController extends Controller
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
        $this->middleware('auth');
        $subforums = Subforum::all();
        $data = [];
        foreach ($subforums as $subforum) {
            $data[$subforum->subforum_id] = $subforum->subforum_name;
        }
        return view('posting.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Posting;

        date_default_timezone_set('Asia/Jakarta');

        $id = "COM" . date("Ymd") . (rand(0,9) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)));
        $session = Session::get('member_id');
        $buat = date("YmdHis");
    
        $model->posting_id = $id;
        $model->subforum_id = Input::get('subforum');
        $model->member_id = $session;
        $model->tgl_buat = $buat;
        $model->judul = Input::get('judul');
        $model->isi  = Input::get('isi');
        $model->status = 1;

        $model->save();
         return redirect('forum');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($posting_id)
    {   
        $detailpost = Posting::where('posting_id', $posting_id)->first();
        $getcomment = Comment::where('posting_id', $posting_id)->get();

        if (isset($_POST['isi'])) {
            $isi = $_POST['isi'];

            $model = new Comment;
            
            date_default_timezone_set('Asia/Jakarta');

            $id = "COM" . date("Ymd") . (rand(0,9) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)));
            $session = Session::get('member_id');
            $buat = date("YmdHis");

            $model->comment_id = $id;
            $model->posting_id = $posting_id;
            $model->member_id = $session;
            $model->tgl_buat = $buat;
            $model->isi  = Input::get('isi');

            $model->save();    
        }
        return view('posting.post', compact('detailpost'), compact('getcomment'));
    }

    public function savecomment($posting_id)
    {  


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
