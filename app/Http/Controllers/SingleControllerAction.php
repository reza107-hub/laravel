<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleControllerAction extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return 'This is a single controller action';
    }
}
