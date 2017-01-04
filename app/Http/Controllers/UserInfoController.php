<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use View;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Input;
use File; 
use Carbon\Carbon;
use App\UserInfo;

class UserInfoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id, User $user)
	{
            if (Auth::user()->id)
            {
                $user = Auth::user();
                return View::make('pages.profile.profile_settings')->with('user', $user); 
            }
	}

        /*
         * {!! Form::open(['method' => 'PATCH', 'action'=> ['UserInfoController@update', Request::user()->id]]) !!}
         * 
         * {!! Form::label('name', 'псевдоним', ['class' => 'control-label']) !!}
           {!! Form::text('name', null, ['class' => 'form-control']) !!}
         * 
         * {!! Form::submit('сохранить', ['class' => 'btn btn-default btn-lg pull-right']) !!}
         * 
         * {!! Form::close() !!}
         * 
         * 
          */
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request, User $user)
	{
		if ($user->user_id = Auth::user()->id) {
                    $userinfo = new UserInfo($request->all());
                    $track->user_id = Auth::id();
                    $userinfo -> save();
                }
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
		if (Auth::user()->id)
                {
                    $user = Auth::user();
                    return View::make('pages.profile.profile_settings')->with('user', $user); 
                }
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,User $user, UserInfo $userinfo, $id)
	{
                $userinfo -> user_id = Auth::user()->id;
                $input = Input::except(['_method', '_token']);
                $userinfo -> update($input);
                $userinfo->save();
                return back();
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
