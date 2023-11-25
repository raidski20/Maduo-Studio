<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Models\Work;

class WorkController extends Controller
{
    public function renderWorksPage()
    {
        $works = Work::with(['attachment' => function ($query) {
            $query->select(['name', 'extension', 'path', 'disk']);
        }])->get();

        return view("global.work", compact('works'));
    }
}
