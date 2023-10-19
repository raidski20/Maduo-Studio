<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function renderServicesPage()
    {
        $serviceSectionData = Section::where('name', 'services')
            ->select(['title', 'description'])
            ->first();

        $services = Service::select(['name', 'description'])
            ->get();

        return view("global.services", compact('services', 'serviceSectionData'));
    }
}
