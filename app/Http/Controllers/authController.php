<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class authController extends Controller
{
    public function register(Request $request)
    {
        $response = Http::post(env('API') . '/register', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation'),
        ]);
        $response = $response->json();

        return redirect('/login')->with('success', $response['message']);
    }



    public function login(Request $request)
    {
        // Make request to external API
        $response = Http::post(env('API') . '/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $response = $response->json();
        // dd($response);

        if ($response['status'] == 'success') {
            // Get user credentials from API response
            $credentials = [
                'email' => $response['user']['email'],
                'password' => $request->input('password')
            ];

            // Attempt to login the user
            if (auth()->attempt($credentials)) {
                $request->session()->put('user', $response['user']);
                // set cookie
                // Get token from db
                $token = DB::table('user_tokens')->where('user_id', $response['user']['id'])->first();
                // dd($token);
                return redirect('/')->with('success', $response['message'])->cookie('token', $token->token, time() + (86400 * 30), "/");
            } 
        }

        return redirect('/login')->with('error', 'Invalid credentials');
    }

    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/login')->with('success', 'Logged out successfully');
    }

}
