<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employee = Employee::get();
        return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_number' => 'required|integer|unique:employees,id_number',
            'full_name' => 'required|string|max:255',
            'nickname' => 'nullable|string|max:255',
            'contract_date' => 'required|date',
            'work_date' => 'required|date',
            'status' => 'required|in:Aktif,Berhenti',
            'position' => 'required|string|max:255',
            'nuptk' => 'nullable|string|max:255',
            'gender' => 'required|in:Pria,Wanita',
            'place_birth' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'religion' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'hobby' => 'nullable|string|max:255',
            'marital_status' => 'required|in:Menikah,Belum',
            'residence_address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address_emergency' => 'nullable|string|max:255',
            'phone_emergency' => 'nullable|string|max:20',
            'blood_type' => 'nullable|string|max:3',
            'last_education' => 'nullable|string|max:255',
            'agency' => 'nullable|string|max:255',
            'graduation_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'competency_training_place' => 'nullable|string|max:255',
            'organizational_experience' => 'nullable|string',
        ]);

        Employee::create([
            'id_number' => $request->id_number,
            'full_name' => $request->full_name,
            'nickname' => $request->nickname,
            'contract_date' => $request->contract_date,
            'work_date' => $request->work_date,
            'status' => $request->status,
            'position' => $request->position,
            'nuptk' => $request->nuptk,
            'gender' => $request->gender,
            'place_birth' => $request->place_birth,
            'birth_date' => $request->birth_date,
            'religion' => $request->religion,
            'email' => $request->email,
            'hobby' => $request->hobby,
            'marital_status' => $request->marital_status,
            'residence_address' => $request->residence_address,
            'phone' => $request->phone,
            'address_emergency' => $request->address_emergency,
            'phone_emergency' => $request->phone_emergency,
            'blood_type' => $request->blood_type,
            'last_education' => $request->last_education,
            'agency' => $request->agency,
            'graduation_year' => $request->graduation_year,
            'competency_training_place' => $request->competency_training_place,
            'organizational_experience' => $request->organizational_experience,
        ]);

        return redirect('employee/create')->with('status', 'Data telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function showArchived()
    {
        $archivedEmployees = Employee::archived()->get();
        return view('employee.archived', compact('archivedEmployees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id_number)
    {
        $employee = Employee::findOrFail($id_number);
        // return $employee;
        return view('employee.edit', compact('employee'));
    }



    public function update(Request $request, int $id_number)
    {
        $request->validate([
            'id_number' => ['required', 'integer', Rule::unique('employees', 'id_number')->ignore($id_number, 'id_number')],
            'full_name' => 'required|string|max:255',
            'nickname' => 'nullable|string|max:255',
            'contract_date' => 'required|date',
            'work_date' => 'required|date',
            'status' => 'required|in:Aktif,Berhenti',
            'position' => 'required|string|max:255',
            'nuptk' => 'nullable|string|max:255',
            'gender' => 'required|in:Pria,Wanita',
            'place_birth' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'religion' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'hobby' => 'nullable|string|max:255',
            'marital_status' => 'required|in:Menikah,Belum',
            'residence_address' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'address_emergency' => 'nullable|string|max:255',
            'phone_emergency' => 'nullable|string|max:20',
            'blood_type' => 'nullable|string|max:3',
            'last_education' => 'nullable|string|max:255',
            'agency' => 'nullable|string|max:255',
            'graduation_year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'competency_training_place' => 'nullable|string|max:255',
            'organizational_experience' => 'nullable|string',
        ]);

        $employee = Employee::where('id_number', $id_number)->firstOrFail();
        $employee->update([
            'id_number' => $request->id_number,
            'full_name' => $request->full_name,
            'nickname' => $request->nickname,
            'contract_date' => $request->contract_date,
            'work_date' => $request->work_date,
            'status' => $request->status,
            'position' => $request->position,
            'nuptk' => $request->nuptk,
            'gender' => $request->gender,
            'place_birth' => $request->place_birth,
            'birth_date' => $request->birth_date,
            'religion' => $request->religion,
            'email' => $request->email,
            'hobby' => $request->hobby,
            'marital_status' => $request->marital_status,
            'residence_address' => $request->residence_address,
            'phone' => $request->phone,
            'address_emergency' => $request->address_emergency,
            'phone_emergency' => $request->phone_emergency,
            'blood_type' => $request->blood_type,
            'last_education' => $request->last_education,
            'agency' => $request->agency,
            'graduation_year' => $request->graduation_year,
            'competency_training_place' => $request->competency_training_place,
            'organizational_experience' => $request->organizational_experience,
        ]);

        return redirect()->route('employee.index')->with('success', 'Data updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function archive($id_number)
    {
        // Cari karyawan berdasarkan NIK (id_number)
        $employee = Employee::where('id_number', $id_number)->first();

        if ($employee) {
            // Ubah status arsip menjadi true
            $employee->archived = true;
            $employee->save();

            return redirect()->back()->with('status', 'Karyawan berhasil diarsipkan.');
        }

        return redirect()->back()->with('error', 'Karyawan tidak ditemukan.');
    }


}



