<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class  JobApplicationController extends Controller
{
    public function create(Vacancy $vacancy)
    {
        if (Auth::user()->cannot('apply', $vacancy))
        {
            abort(403);
        }
//        $this->authorize('apply', $vacancy);
        return view('job_application.create', ['vacancy' => $vacancy]);
    }


    public function store(Vacancy $vacancy, Request $request)
    {
        if (Auth::user()->cannot('apply', $vacancy))
        {
            abort(403);
        }
//        $this->authorize('apply', $vacancy);
        $vacancy->jobApplications()->create([
            'user_id' => Auth::user()->id,
            ...$request->validate([
                'expected_salary' => 'required|min:1|max:1000000'
            ])
        ]);



        return redirect()->route('vacancies.show', $vacancy)->with('success', 'Job application submitted');
    }

    public function destroy(string $id)
    {
        //
    }
}
