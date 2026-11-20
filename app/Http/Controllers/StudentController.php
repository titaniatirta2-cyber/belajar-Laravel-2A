<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->get();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => ['required', 'string', 'max:30', 'unique:students,nim'],
            'nama' => ['required', 'string', 'max:120'],
            'prodi' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:120', 'unique:students,email'],
            'alamat' => ['nullable', 'string', 'max:255'],
        ]);

        Student::create($validated);

        return redirect('/students')->with('success', 'Data student berhasil ditambahkan.');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'nim' => ['required', 'string', 'max:30', 'unique:students,nim,' . $student->id],
            'nama' => ['required', 'string', 'max:120'],
            'prodi' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:120', 'unique:students,email,' . $student->id],
            'alamat' => ['nullable', 'string', 'max:255'],
        ]);

        $student->update($validated);

        return redirect('/students')->with('success', 'Data student berhasil diperbarui.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/students')->with('success', 'Data student berhasil dihapus.');
    }
}