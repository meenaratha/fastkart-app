<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if(!session()->has('loggedInUser') && ($request->path() != '/dashboard' &&
        // $request->path() !='register')){
        //     return redirect('/login');
        // }
        // if(session()->has('loggedInUser') && ($request->path() == '/dashboard' ||
        // $request->path() == '/register')){
        //     return back();
        // }
        // return $next($request);



         //Check if user is not logged in and trying to access restricted pages
        if (!session()->has('loggedInUser') && !in_array($request->path(), ['login', 'register'])) {
            return redirect('/login');
        }

        // Assuming 'loggedInUser' session has user data and 'role' is a property of this data
        $userRole = session('loggedInUser.role');

        // Define role-based redirection
        $roleBasedRedirect = [
            'admin' => '/admin/dashboard',
            'user' => '/user/dashboard',
            // You can add more roles and their specific redirect paths here
        ];

        // Redirect logged in users trying to access login or register page
        if (session()->has('loggedInUser') && in_array($request->path(), ['login', 'register'])) {
            // Redirect users based on their role to the correct dashboard
            if (array_key_exists($userRole, $roleBasedRedirect)) {
                return redirect($roleBasedRedirect[$userRole]);
            } else {
                // If role is not defined in $roleBasedRedirect, redirect to a default page or throw an error
                return redirect('/'); // or abort(403, 'Unauthorized action.');
            }
        }

        // Additional checks can be placed here, for example, restricting access to certain pages based on user roles

        return $next($request);
    }
}
