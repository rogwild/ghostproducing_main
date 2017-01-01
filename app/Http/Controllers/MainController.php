<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use DB;
use App\Track;
use App\User;
use App\Producer;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class MainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
                //$tracks = Track::with(Producer)->get();
                $tracks = Track::paginate(5);
                //$url = Storage::get('public/cover.jpg');
                //echo '$url';
                if (Auth::check()) {
                    Auth::user()->name;
                }
                else {
                    return view('pages.main', compact('tracks'));
                }
                //$producer = Producer::with(tracks)->get();
		return view('pages.main', compact('tracks'));
	}
        
        public function home()
	{
                //$tracks = Track::with(Producer)->get();
                $tracks = Track::all();
                Auth::user()->name;
                //$producer = Producer::with(tracks)->get();
		return view('pages.main', compact('tracks'));
	}
        
        public function getCover($coverfilename)
	{
            $cover = Storage::disk('local')->get($coverfilename);
            return new Response($cover,200);
	}
        
        public function getTrack($trackname)
	{
            $trackfile = Storage::disk('local')->get($trackname);
            return new Response($trackfile,200);
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
	 * @return Response
	 */
	public function store()
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
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
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
