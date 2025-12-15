<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Project;
use App\Models\Hardskill;
use App\Models\Softskill;
use App\Models\Achievement;
use App\Models\Organization;
use App\Models\SocialMedia;
use App\Models\Training;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Response;

class CVController extends Controller
{
    /**
     * Generate and download ATS-friendly CV as PDF
     */
    public function downloadCV(): Response
    {
        // Fetch all data from database
        $profile = Profile::first();

        if (!$profile) {
            abort(404, 'Profile data not found. Please add your profile information first.');
        }

        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $education = Education::orderBy('created_at', 'desc')->get();
        $projects = Project::latest()->take(5)->get(); // Top 5 projects
        $hardskills = Hardskill::all();
        $softskills = Softskill::all();
        $achievements = Achievement::orderBy('date', 'desc')->get();
        $organizations = Organization::all();
        $socialMedia = SocialMedia::all();
        $trainings = Training::orderBy('start_date', 'desc')->get();

        // Prepare data for template
        $data = compact(
            'profile',
            'experiences',
            'education',
            'projects',
            'hardskills',
            'softskills',
            'achievements',
            'organizations',
            'socialMedia',
            'trainings'
        );

        // Generate PDF with ATS-friendly template
        $pdf = Pdf::loadView('cv-template', $data)
            ->setPaper('a4', 'portrait')
            ->setOption('defaultFont', 'Arial');

        // Generate filename with name and date
        $filename = 'CV_' . str_replace(' ', '_', $profile->name) . '_' . date('Y-m-d') . '.pdf';

        // Download PDF
        return $pdf->download($filename);
    }

    /**
     * Preview CV in browser (optional)
     */
    public function previewCV()
    {
        $profile = Profile::first();

        if (!$profile) {
            abort(404, 'Profile data not found.');
        }

        $experiences = Experience::orderBy('start_date', 'desc')->get();
        $education = Education::orderBy('created_at', 'desc')->get();
        $projects = Project::latest()->take(5)->get();
        $hardskills = Hardskill::all();
        $softskills = Softskill::all();
        $achievements = Achievement::orderBy('date', 'desc')->get();
        $organizations = Organization::all();
        $socialMedia = SocialMedia::all();
        $trainings = Training::orderBy('start_date', 'desc')->get();

        $data = compact(
            'profile',
            'experiences',
            'education',
            'projects',
            'hardskills',
            'softskills',
            'achievements',
            'organizations',
            'socialMedia',
            'trainings'
        );

        $pdf = Pdf::loadView('cv-template', $data)
            ->setPaper('a4', 'portrait')
            ->setOption('defaultFont', 'Arial');

        // Stream PDF to browser
        return $pdf->stream();
    }
}
