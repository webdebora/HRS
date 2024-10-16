<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Violation;

class ViolationController extends Controller
{
    /**
     * Display a listing of the violations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $violation = Violation::all(); // Mengambil semua data pelanggaran
        return view('violations.index', compact('violation'));
    }

    /**
     * Show the form for creating a new violation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('violations.create');
    }

    /**
     * Store a newly created violation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_number' => 'required|string|max:255',
            'offense_type' => 'required|string|max:255',
            'offense_date' => 'required|date',
            'description' => 'required|string|max:1000',
        ]);

        try {
            Violation::create([
                'id_number' => $request->id_number,
                'offense_type' => $request->offense_type,
                'offense_date' => $request->offense_date,
                'description' => $request->description,
            ]);

            return redirect()->route('violations.index')->with('status', 'Data pelanggaran berhasil disimpan!');
        } catch (\Exception $e) {
            // Log error for debugging
            \Log::error('Failed to store violation: ' . $e->getMessage());
            return redirect()->back()->withErrors('Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
        }
    }

    /**
     * Show the form for editing the specified violation.
     *
     * @param  \App\Models\Violation  $violation
     * @return \Illuminate\Http\Response
     */

     public function edit(Violation $violation)
     {
         return view('violations.edit', compact('violation')); 
     }


    /**
     * Update the specified violation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Violation $violation)
    {
        $request->validate([
            'id_number' => 'required|string|max:255',
            'offense_type' => 'required|string|max:255',
            'offense_date' => 'required|date',
            'description' => 'required|string|max:1000',
        ]);

        $violation->update([
            'id_number' => $request->id_number,
            'offense_type' => $request->offense_type,
            'offense_date' => $request->offense_date,
            'description' => $request->description,
        ]);

        return redirect()->route('violations.index')->with('status', 'Data pelanggaran berhasil diupdate!');
    }

    /**
     * Remove the specified violation from storage.
     *
     * @param  \App\Models\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Violation $violation)
    {
        $violation->delete(); // Ubah variabel dari $violations ke $violation
        return redirect()->route('violations.index')->with('status', 'Data pelanggaran berhasil dihapus!');
    }

}
