<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
      if (Auth::check()) {
        $user = Auth::user();
        
        if ($request->is('status-surat') && $user->status === 'specific-status') {
            return redirect('/halaman-status');
        }
        if ($request->is('surat') && $user->status === 'another-status') {
            return redirect('/halaman-surat');
        }
      }
      return $next($request);
    }
}
