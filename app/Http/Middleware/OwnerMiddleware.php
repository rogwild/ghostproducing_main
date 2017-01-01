<?php namespace App\Http\Middleware;

use App\Track;
use Closure;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class OwnerMiddleware {
    
        protected $auth;

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
        
        public function __construct(Guard $auth)
        {
            $this->auth = $auth;
        }
        
	public function handle($request, Closure $next)
	{
		$trackId = $request->segments()[1];
                $track = Track::findOrFail($trackId);

                if ($track->user_id !== Auth::user()->id) {
                    abort(403, 'Unauthorized action.');
                }

                return $next($request);
	}

}
