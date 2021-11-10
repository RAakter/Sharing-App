<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    //
    //division
    public function index()
    {
        return view('backend.division.add-division');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'division_title' => 'required|unique:divisions',
            'division_status' => 'required'
        ]);

        $division = new Division();
        $division->division_title = $request->division_title;
        $division->division_status = $request->division_status;
        $division->save();

        return back()->with('success', 'Added successfully');
    }

    public function manage()
    {
        return view('backend.division.manage-division', [
            'divisions' => Division::all()->sortByDesc('id')->whereNotNull('division_title')
        ]);
    }

    public function edit($id)
    {
        return view('backend.division.edit-division', [
            'division' => Division::find($id)
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'division_title' => 'required',
            'division_status' => 'required'
        ]);
        $division = Division::find($request->id);

        $division->division_title = $request->division_title;
        $division->division_status = $request->division_status;
        $division->save();

        return redirect('admin/division/manage-division')->with('success','Updated Successfully');
    }

    public function delete(Request $request)
    {

        $division = Division::find($request->id);
        $division->delete();

        return back()->with('success', 'Information deleted successfully');
    }
}
