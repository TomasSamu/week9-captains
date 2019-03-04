<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class CaptainController extends Controller
{
    //
    public function show($captain_slug)
    {
        $captain = \App\Captain::where('slug', $captain_slug)->first();

        if (!$captain) {
            abort(404, 'Captain not found');
        }

        $view = view('captain/show');
        $view->captain = $captain;
        return $view;
    }

    public function index()
    {

        $captains = \App\Captain::orderBy('name', 'asc')->get();
        return view('captain.index', compact('captains'));
    }

    public function store(Request $request)
    {

   /*  $data = $request->all();
    Assignment::create($data); */

    $assignment = new \App\Assignment;
    $assignment->subject = $request->subject;
    $assignment->description = $request->description;
    $assignment->save();

    return redirect('/captains');
    }
}
