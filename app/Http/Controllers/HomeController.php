<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //論文を取得 全員の OK　&& 消されてないもの
        $papers = Paper::select('papers.*')
            ->whereNull('deleted_at')
            ->orderBy('updated_at', 'DESC')
            ->get();
        return view('home', compact('papers'));
    }

    public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {
        $posts = $request->all();
        Paper::insert(['title' => $posts['title'], 'url' => $posts['url'], 'comment' => $posts['comment'], 'abstract' => $posts['abstract'], 'assessment' => $posts['rate'], 'user_id' => \Auth::id()]);
        return redirect(route('home'));
    }
}
