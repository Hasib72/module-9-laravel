<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        return view("contact");
    }
}
