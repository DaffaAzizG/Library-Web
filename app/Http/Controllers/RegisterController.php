<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    // Display the registration form
    public function create()
    {
        return view('register');
    }

    // Handle the registration request
    public function store(RegisterRequest $request)
    {
        // Retrieve all validated data
        $validated = $request->validated();

        // Here you can handle the registration logic (e.g., saving to the database)

        // Print the validated input
        return view('Register_succes', ['data' => $validated]);
    }

    public function index (){
        $authors = DB::table('authors')->where('author_name', 'Dr. Dyrrenn')->first();

        dd($authors);
        /*Gagal
        DB::table('authors')->create(
            [
                'author_id' => 'au003',
                'author_name' => 'James J.',
                'author_description' => 'gk tau lupa namanya'
            ]
        );*/
    }
}
