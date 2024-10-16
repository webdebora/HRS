<?php

namespace App\Http\Controllers;

use App\Models\FamilyData;
use Illuminate\Http\Request;

class FamilyDataController extends Controller
{
    public function index()
    {
        $familyData = FamilyData::all();
        return view('family-data.index', compact('familyData'));
    }

    public function create()
    {
        return view('family-data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_number' => 'required|exists:employees,id_number',
            'mate_name' => 'required|string|max:255',
            'child_name' => 'nullable|string|max:255',
            'wedding_date' => 'required|date',
            'marriage_certificate_number' => 'required|string|max:255',
        ]);

        FamilyData::create($request->all());
        return redirect()->route('family-data.index')->with('success', 'Family data created successfully.');
    }

    public function show(FamilyData $familyData)
    {
        return view('family-data.show', compact('familyData'));
    }

    public function edit(FamilyData $familyData)
    {
        return view('family-data.edit', compact('familyData'));
    }

    public function update(Request $request, FamilyData $familyData)
    {
        $request->validate([
            'id_number' => 'required|exists:employees,id_number',
            'mate_name' => 'required|string|max:255',
            'child_name' => 'nullable|string|max:255',
            'wedding_date' => 'required|date',
            'marriage_certificate_number' => 'required|string|max:255',
        ]);

        $familyData->update($request->all());
        return redirect()->route('family-data.index')->with('success', 'Family data updated successfully.');
    }

    public function destroy(FamilyData $familyData)
    {
        $familyData->delete();
        return redirect()->route('family-data.index')->with('success', 'Family data deleted successfully.');
    }
}
