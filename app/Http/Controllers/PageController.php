<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
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
        $organizations = \App\Models\Organization::all();
        $educations = \App\Models\Education::orderBy('start_date', 'desc')->get();
        $achievements = Achievement::orderBy('date', 'desc')->get();
        return view('pages.index', compact(
            'developer_name',
            'developer_title',
            'profile_image',
            'developer_bio',
            'experiences'
            ,'organizations',
            'educations'
            ,'achievements'
        ));
    }
}