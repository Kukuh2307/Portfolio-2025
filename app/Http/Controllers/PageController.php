<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Education;
use App\Models\Achievement;
use App\Models\Organization;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $experiences = \App\Models\Experience::orderBy('start_date', 'desc')->get();
        $profile = \App\Models\Profile::first();
        $developer_name = $profile->name;
        $developer_title = $profile->title;
        $profile_image = $profile->image;
        $developer_bio = $profile->bio;
        $developer_subtitle = $profile->subtitle;
        $developer_email = $profile->email;
        $developer_phone = $profile->phone;
        $developer_address = $profile->address;
        $organizations = Organization::all();
        $educations = Education::orderBy('start_date', 'desc')->get();
        $achievements = Achievement::orderBy('date', 'desc')->get();
        $hard_skills = \App\Models\Hardskill::all();
        $soft_skills = \App\Models\Softskill::all();
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('pages.index', compact(
            'developer_name',
            'developer_title',
            'profile_image',
            'developer_subtitle',
            'developer_email',
            'developer_phone',
            'developer_address',
            'developer_bio',
            'experiences',
            'organizations',
            'educations',
            'achievements',
            'hard_skills',
            'soft_skills',
            'projects'
        ));
    }
}
