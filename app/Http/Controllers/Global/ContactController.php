<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactUs;
use App\Models\Section;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('global.contact');
    }

    public function sendMail(ContactRequest $request)
    {
        $contactSectionData = Section::where('name', 'contact-us')->first();

        Mail::to($contactSectionData->extra_data['email'])->send(new ContactUs($request->validated()));

        dd('email sent');
    }
}
