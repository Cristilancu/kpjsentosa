<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class PatientMiddleware {
	protected $auth;

	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}
	
	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
        {
            return redirect()->to('/patient/login');
        }

		return $next($request);
	}

}
