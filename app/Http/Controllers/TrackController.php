<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Track;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Input;
use File; 
use Carbon\Carbon;

class TrackController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tracks = Track::paginate(30);
                //$url = Storage::get('public/cover.jpg');
                //echo '$url';
                if (Auth::check()) {
                    Auth::user()->name;
                }
                else {
                    return view('pages.tracks', compact('tracks'));
                }
                //$producer = Producer::with(tracks)->get();
		return view('pages.tracks', compact('tracks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request, Track $track, User $user)
	{
            //$user = Auth::user();
            $track = new Track($request->all());
            $track -> coverfilename = $request['name'];
            $track -> trackfile = $request['name'];
            $track->user_id = Auth::id();
            $cover = $request->file('cover');
            $coverfilename = $request['name'].'.jpg';
            if ($cover) {
                Storage::disk('local')->put($coverfilename, File::get($cover));
            }
            $trackfile = $request->file('track');
            $trackname = $request['name'].'.mp3';
            if ($trackfile) {
                Storage::disk('local')->put($trackname, File::get($trackfile));
            }
            //$path = $request->file('cover')->storeAs(
            //    'covers', $request->user()->id
            //);
            //$cover = Input::file('cover')->getClientOriginalName();
            //Storage::put('cover.JPG', $track);
            //$url = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
            //$url = $url.'cover';
           // Image::make(Input::file('cover'))->resize(300, 200)->save('cover.jpg');
            //$path = $request->file('cover')->store('covers');
            //$coverfilename = $file->getClientOriginalName();
            //Storage::disk('local')->put($coverfilename);
            //$file = $request->file('cover');
            //$file->move('../images', $coverfilename);//папка для загрузки изображения
            //$track->cover = $url;
            $track->save();
            //$track->user_id = 2;
            /*Storage::put(
                'covers/'.'1',
                file_get_contents($request->file('cover')->getRealPath())
              );*/
            
            return back();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request,Track $track, User $user)
	{
            //$user = Auth::user();
            //$track->new Track($request->all());
            //$track->user_id = Auth::id();
            //return back();
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
	public function destroy(Track $track, $id)
	{
            
            if ($track->user_id = Auth::user()->id)
            {
                $track = Track::find($id);
                $track -> delete();
                return back();
            }
            else {
                return back();
            }
	}

}
