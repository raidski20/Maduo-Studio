<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function home()
    {
        $sectionNames = ['hero', 'statistics', 'about-us', 'services', 'contact-us'];
        $sections = Section::whereIn('name', $sectionNames)->get()->keyBy('name');

        // Fetch the services associated with the service IDs
        $services = Service::whereIn('id', $sections['services']['extra_data']['services'])
            ->get();

        return view('welcome', compact('sections', 'services'));
    }
}
