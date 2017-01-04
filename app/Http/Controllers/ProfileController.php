<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Track;
use DB;
use Illuminate\Http\Request;

class ProfileController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{
                Auth::user()->id;
                $tracks = Track::where('user_id', '=', Auth::user()->id)->get();
                return view('pages.profile.profile_main', compact('tracks'));
	}
        
        public function purchases($id)
	{
                Auth::user()->id;
                $tracks = Track::all();
                return view('pages.profile.profile_purchases', compact('tracks'));
	}
        
        public function addTrack($id)
	{
                Auth::user()->id;
                return view('pages.profile.profile_add_track');
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
		//$user=User::find($id);
                //$user = $this->user->find($id);
                //$user = $this->user->find(Auth::id());
                $user = User::first($id);
                return view('pages.profile.profile_settings', compact ('user'));
                
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		/*$user=User::find($id);
                $input = Input::except(['_method', '_token']);
                $user -> update($input);
                $user->save();
                return back();*/
                $user = User::first($id);

                /*$this->validate($request, [
                    'title' => 'required',
                    'description' => 'required'
                ]);*/

                $input = $request->all();

                $user->fill($input)->save();

                //Session::flash('flash_message', 'Task successfully added!');

                return redirect()->back();
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
