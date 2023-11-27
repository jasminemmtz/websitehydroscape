<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function editProfile(Request $request)
    {

        session_start();
        
        $id = $request->input('id');
        $username = $request->input('username');
        $email = $request->input('email');
        $telepon = $request->input('telepon');

        // Insert operation
        $response = Http::put('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-aeujc/endpoint/updateUserById?id=' . $id . '&username=' . urlencode($username) . '&email=' . urlencode($email) . '&telepon=' . urlencode($telepon));


        if ($response->failed()) {  
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            session_write_close();
            return redirect('/profile');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    }
}
