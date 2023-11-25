<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Work;

class WorkController extends Controller
{
    public function renderWorksPage()
    {
        $workSectionData = Section::where('name', 'work')
            ->select(['title', 'description'])
            ->first();

        $works = Work::with(['attachment' => function ($query) {
            $query->select(['name', 'extension', 'path', 'disk']);
        }])->get();

        return view("global.work", compact('works', 'workSectionData'));
    }
}
