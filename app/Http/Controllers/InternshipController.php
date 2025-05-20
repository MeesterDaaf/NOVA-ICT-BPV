<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class InternshipController extends Controller
{
    public function index()
    {
        $internships = DB::table('internships')->get();

        return view('internships.index', compact('internships'));
    }

    public function show($id)
    {
        $internship = DB::table('internships')->where('id', $id)->first();

        if(!$internship){
            abort(404);
        }

        return view('internships.show', compact('internship'));
    }

    public function edit($id)
    {
        $internship = DB::table('internships')->find($id);

        if(!$internship){
            abort(404);
        }

        return view('internships.edit', compact('internship'));
    }

    public function update(Request $request, $id)
{
      $request->validate([
         'title' => 'required',
         'description' => 'required',
         'start_date' => 'required|date',
         'end_date' => 'required|date|after:start_date',
         'hours_per_week' => 'required|numeric|min:1',
         'compensation' => 'required',
         'type' => 'required',
         'level_of_education' => 'required'
      ]);

      $internship = DB::table('internships')->where('id', $id)->update([
         'title' => $request->title,
         'slug'  => Str::slug($request->title),
         'description' => $request->description,
         'start_date' => $request->start_date,
         'end_date' => $request->end_date,
         'hours_per_week' => $request->hours_per_week,
         'compensation' => $request->compensation,
         'type' => $request->type,
         'level_of_education' => $request->level_of_education
      ]);

      return redirect('/internships');
}

    public function create()
    {
        return view('internships.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'hours_per_week' => 'required|integer|min:1',
            'compensation' => 'nullable|integer|min:0',
            'type' => 'required|in:full-time,part-time',
            'levels_of_education' => 'nullable|string|max:255',
        ]);

        DB::table('internships')->insert(
            [
                'title' => $request->title,
                'description' => $request->description,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'hours_per_week' => $request->hours_per_week,
                'compensation' => $request->compensation,
                'type' => $request->type,
                'level_of_education' => $request->level_of_education,
                'company_id' => $request->company_id ?? 1
            ]
        );
    }

    
   

   
}
