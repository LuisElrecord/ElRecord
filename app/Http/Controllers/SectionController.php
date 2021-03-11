<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Requests\Section\StoreRequest;
use App\Http\Requests\Section\UpdateRequest;

class SectionController extends Controller
{
    public function index()
    {
        $sections = Section::get();
        return view('admin.section.index',compact('sections'));
    }

    public function create()
    {
        return view('admin.section.create');
    }

    public function store(StoreRequest $request)
    {
        Section::create($request->all());
        return redirect()->route('admin.section.index');
    }

    public function show(Section $section)
    {
         return view('admin.section.index',compact('section'));
    }

    public function edit(Section $section)
    {
       return view('admin.section.edit',compact('section'));
    }

    public function update(UpdateRequest $request, Section $section)
    {
        $section->update($request->all());
        return redirect()->route('admin.section.index');
    }

    public function destroy(Section $section)
    {
        $section->delete();
        return redirect()->route('admin.section.index');
    }
}
