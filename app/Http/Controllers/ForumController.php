<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Forum;
use App\Subforum;
use App\User;
use Illuminate\Support\Facades\Input;

class ForumController extends Controller
{
	function __construct() {

	}

	function index() {
		$forum_list = Forum::all();
		return view('forum.index', compact('forum_list'));
	}

	function create() {
		$this->middleware('auth');
		return view('forum.create');
	}

	public function store(Request $request) {
		$forum = new Forum;

		date_default_timezone_set('Asia/Jakarta');	
		$for_id = "FOR" . date("Ymd") . (rand(0,9) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)));

		$forum->forum_id = $for_id;
		$forum->forum_name = Input::get('forum_name');

		$forum->save();
		return redirect('forum');
	}

	public function addSubforum($forum_id) {
		$model = new Subforum;


		date_default_timezone_set('Asia/Jakarta');
		$sub_id = "SUB" . date("Ymd") . (rand(0,9) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)));

		$model->subforum_id = $sub_id;
		$model->forum_id = $forum_id;
		$model->subforum_name = Input::get('subforum_name');

		$model->save();
		return redirect('forum');
	}

	public function LastestMember()
	{
		$model = new User;

		$last = User::orderBy('created_at', 'desc')->first();
		return view('sidebar', compact('last'));
	}

}
