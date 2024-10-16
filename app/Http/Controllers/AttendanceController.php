<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the attendance records.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Fetch all attendance records with pagination
        $attendances = Attendance::paginate(10); // Mengambil 10 item per halaman
        return view('attendance.index', compact('attendances'));
    }

    /**
     * Show the form for creating a new attendance record.
     *
     * @return \Illuminate\Http\Response
     */
// AttendanceController.php

// Method create untuk menampilkan form pembuatan data baru
public function create()
{
    // Menampilkan form untuk menambah data absensi baru
    return view('attendance.create');
}




    /**
     * Store a newly created attendance record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'id_number' => 'required|exists:employees,id_number',
            'date' => 'required|date',
            'status' => 'required|in:present,absent,on_leave',
        ]);

        // Create a new attendance record
        Attendance::create($request->all());

        // Redirect with a success message
        return redirect()->route('attendance.index')->with('success', 'Attendance record added successfully.');
    }

    /**
     * Show the form for editing the specified attendance record.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        // Pass the attendance record to the view

        return view('attendance.edit', compact('attendances'));
    }

    /**
     * Update the specified attendance record in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        // Validate the request
        $request->validate([
            'id_number' => 'required|exists:employees,id_number',
            'date' => 'required|date',
            'status' => 'required|in:present,absent,on_leave',
        ]);

        // Update the attendance record
        $attendance->update($request->all());

        // Redirect with a success message
        return redirect()->route('attendance.index')->with('success', 'Attendance record updated successfully.');
    }

    /**
     * Remove the specified attendance record from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        // Delete the attendance record
        $attendance->delete();

        // Redirect with a success message
        return redirect()->route('attendance.index')->with('success', 'Attendance record deleted successfully.');
    }
}
