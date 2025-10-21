<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $profile = \App\Models\Profile::first();
        $developer_name = $profile->name;
        $developer_title = $profile->title;
        $profile_image = $profile->image;
        $developer_bio = $profile->bio;
        return view('pages.index', compact(
            'developer_name',
            'developer_title',
            'profile_image',
            'developer_bio'
        ));
    }
}