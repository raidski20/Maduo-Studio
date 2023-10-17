<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Service;

class HomeController extends Controller
{
    public function home()
    {
        $sectionNames = ['hero', 'statistics', 'about-us', 'services'];
        $sections = Section::whereIn('name', $sectionNames)->get()->keyBy('name');

        // Fetch the services associated with the service IDs
        $services = Service::whereIn('id', $sections['services']['extra_data']['services'])
            ->get();

        return view('global.home', compact('sections', 'services'));
    }
}
