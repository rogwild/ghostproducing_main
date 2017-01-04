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
                if (Auth::check()) {
                    Auth::user()->name;
                }
                else {
                    return view('pages.tracks', compact('tracks'));
                }
            return view('pages.tracks', compact('tracks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request, Track $track, User $user)
	{
            if ($user->user_id = Auth::user()->id)
            {
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
                $track->save();
            }
            
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
	public function edit(Track $track, $id)
	{
            $track=Track::find($id);
            if ($track->user_id = Auth::user()->id)
            {
                return view('pages.profile.profile_edit_track',['track'=>$track]);
            }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Track $track, $id)
	{
                $track = Track::find($id);
                $trackname_old = $track -> name.'.mp3';
                $coverfilename_old = $track -> name.'.jpg';
                if ($track->user_id = Auth::user()->id)
                {
                    $input = Input::except(['_method', '_token']);
                    $track -> update($input);
                    $trackname = $request['name'].'.mp3';
                    $coverfilename = $request['name'].'.jpg';
                    $cover = $request->file('cover');
                    $trackfile = $request->file('track');
                        if ($cover) {
                            Storage::disk('local')->put($coverfilename, File::get($cover));
                        }
                        else {
                            Storage::move($coverfilename_old, $coverfilename);
                        }
                        if ($trackfile) {
                            Storage::disk('local')->put($trackname, File::get($trackfile));
                        }
                        else {
                            Storage::move($trackname_old, $trackname);
                        }
                    
                    
                    $track->save();
                    return back();
                }
                else {
                    return back();
                }
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
                $trackname = $track -> name;
                Storage::disk('local')->delete($trackname.'.mp3');
                $coverfilename = $track -> name;
                Storage::disk('local')->delete($coverfilename.'.jpg');
                return back();
            }
            else {
                return back();
            }
	}

}
