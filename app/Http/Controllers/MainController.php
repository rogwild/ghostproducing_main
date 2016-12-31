<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Track;
use App\Producer;
use Illuminate\Http\Request;
use Auth;

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
