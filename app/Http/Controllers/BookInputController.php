<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookInput;
use Illuminate\Support\Facades\DB;

class BookInputController extends Controller
{
    public function create()
    {
        return view('BookInput');
    }

    // Handle the registration request
    public function store(BookInput $request)
    {
        // Retrieve all validated data
        $validated = $request->validated();

        // Here you can handle the registration logic (e.g., saving to the database)

        // Print the validated input
        return view('BookInputData', ['data' => $validated]);
    }
}
