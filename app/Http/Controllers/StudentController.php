<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'    => 'required|max:255',
            'email'   => 'required|max:255',
            'phone'   => 'required',
            'section' => 'required',
            'image'   => 'required|image|mimes:jpg,jpeg,png,gif,svg',
        ]);

        $image = $request->file('image');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $validateData['image'] = $profileImage;

        Student::create($validateData);

        return redirect('/students');
    }

    public function show(Student $student)
    {
        return view('show', compact('student'));
    }
    // 5. Afficher le formulaire de modification pré-rempli
    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    // 6. Mettre à jour l'étudiant en base de données
    public function update(Request $request, Student $student)
    {
        $validateData = $request->validate([
            'name'    => 'required|max:255',
            'email'   => 'required|max:255',
            'phone'   => 'required',
            'section' => 'required',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $validateData['image'] = $profileImage;
        } else {
            unset($validateData['image']);
        }

        $student->update($validateData);

        return redirect('/students');
    }

    // 7. Supprimer un étudiant
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/students');
    }
}