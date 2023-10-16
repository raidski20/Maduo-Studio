<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact()
    {
        return view('global.contact');
    }

    public function sendMail(ContactRequest $request)
    {
        $validated = $request->validated();
        dd($validated);
    }
}
