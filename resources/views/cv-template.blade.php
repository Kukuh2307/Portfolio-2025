<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - {{ $profile->name }}</title>
    <style>
        /* ATS-Friendly Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11pt;
            line-height: 1.5;
            color: #000000;
            background: #ffffff;
            padding: 15mm;
        }

        h1 {
            font-size: 20pt;
            font-weight: bold;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        h2 {
            font-size: 14pt;
            font-weight: bold;
            margin-top: 15px;
            margin-bottom: 8px;
            text-transform: uppercase;
            border-bottom: 2px solid #000000;
            padding-bottom: 3px;
        }

        h3 {
            font-size: 12pt;
            font-weight: bold;
            margin-bottom: 3px;
        }

        p {
            margin-bottom: 8px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-info {
            text-align: center;
            font-size: 10pt;
            margin-bottom: 5px;
        }

        .section {
            margin-bottom: 15px;
        }

        .job-title {
            font-weight: bold;
            font-size: 11pt;
        }

        .company {
            font-style: italic;
        }

        .date {
            color: #333333;
            font-size: 10pt;
        }

        .text-justify {
            text-align: justify;
        }

        .experience-item,
        .education-item,
        .project-item,
        .achievement-item {
            margin-bottom: 12px;
        }

        ul {
            margin-left: 20px;
            margin-top: 5px;
            margin-bottom: 8px;
        }

        li {
            margin-bottom: 3px;
        }

        .skills-list {
            margin-bottom: 8px;
        }

        .skill-category {
            font-weight: bold;
            display: inline;
        }

        .skill-items {
            display: inline;
        }

        .tech-stack {
            font-size: 10pt;
            color: #333333;
            font-style: italic;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <div class="header">
        <h1>{{ $profile->name }}</h1>
        <div class="contact-info">
            @if($profile->title)
            {{ $profile->title }}
            @endif
            @if($profile->phone)
            | {{ $profile->phone }}
            @endif
            @if($profile->address)
            | {{ $profile->address }}
            @endif
        </div>
        <div class="contact-info">
            @foreach($socialMedia as $social)
            @if($social->platform === 'LinkedIn' || $social->platform === 'GitHub' || $social->platform === 'Portfolio')
            {{ $social->platform }}: {{ $social->url }}
            @if(!$loop->last) | @endif
            @endif
            @endforeach
        </div>
    </div>

    <!-- PROFESSIONAL SUMMARY -->
    @if($profile->bio)
    <div class="section">
        <h2>Professional Summary</h2>
        <p class="text-justify">{{ strip_tags($profile->bio) }}</p>
    </div>
    @endif

    <!-- TECHNICAL SKILLS -->
    @if($hardskills->count() > 0)
    <div class="section">
        <h2>Technical Skills</h2>
        <div class="skills-list">
            @php
            $groupedSkills = $hardskills->groupBy('category');
            @endphp
            @foreach($groupedSkills as $category => $skills)
            <p>
                <span class="skill-category">{{ $category }}:</span>
                <span class="skill-items">
                    @foreach($skills as $skill)
                    {{ $skill->skill_name }}@if(!$loop->last), @endif
                    @endforeach
                </span>
            </p>
            @endforeach
        </div>
    </div>
    @endif

    <!-- PROFESSIONAL EXPERIENCE -->
    @if($experiences->count() > 0)
    <div class="section">
        <h2>Professional Experience</h2>
        @foreach($experiences as $experience)
        <div class="experience-item">
            <h3 class="job-title">{{ $experience->position }}</h3>
            <div class="company">{{ $experience->company }} | <span class="date">{{ date('M Y', strtotime($experience->start_date)) }} - {{ $experience->end_date ? date('M Y', strtotime($experience->end_date)) : 'Present' }}</span></div>
            @if($experience->description)
            <p class="text-justify">{{ strip_tags($experience->description) }}</p>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    <!-- PROJECTS -->
    @if($projects->count() > 0)
    <div class="section">
        <h2>Key Projects</h2>
        @foreach($projects as $project)
        <div class="project-item">
            <h3>{{ $project->project_name }}</h3>
            @if($project->technology && is_array($project->technology))
            <div class="tech-stack">Technologies: {{ implode(', ', $project->technology) }}</div>
            @endif
            <p class="text-justify">{{ strip_tags($project->description) }}</p>
        </div>
        @endforeach
    </div>
    @endif

    <!-- EDUCATION -->
    @if($education->count() > 0)
    <div class="section">
        <h2>Education</h2>
        @foreach($education as $edu)
        <div class="education-item">
            <h3>{{ $edu->degree }}</h3>
            <div>{{ $edu->institution }} | <span class="date">{{ $edu->year }}</span></div>
            @if($edu->description)
            <p class="text-justify">{{ strip_tags($edu->description) }}</p>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    <!-- CERTIFICATIONS & ACHIEVEMENTS -->
    @if($achievements->count() > 0)
    <div class="section">
        <h2>Certifications & Achievements</h2>
        @foreach($achievements as $achievement)
        <div class="achievement-item">
            <h3>{{ $achievement->title }}</h3>
            <div>{{ $achievement->organizer }} | <span class="date">{{ $achievement->date }}</span></div>
            @if($achievement->description)
            <p class="text-justify">{{ strip_tags($achievement->description) }}</p>
            @endif
        </div>
        @endforeach
    </div>
    @endif

    <!-- SOFT SKILLS -->
    @if($softskills->count() > 0)
    <div class="section">
        <h2>Core Competencies</h2>
        <p>
            @foreach($softskills as $skill)
            {{ $skill->skill_name }}@if(!$loop->last), @endif
            @endforeach
        </p>
    </div>
    @endif

    <!-- ORGANIZATIONS -->
    @if($organizations->count() > 0)
    <div class="section">
        <h2>Professional Affiliations</h2>
        @foreach($organizations as $org)
        <div class="organization-item">
            <h3>{{ $org->name }}</h3>
            <div>{{ $org->position }}
                @if($org->year)
                | <span class="date">{{ $org->year }}</span>
                @endif
            </div>
            @if($org->description)
            <p class="text-justify">{{ strip_tags($org->description) }}</p>
            @endif
        </div>
        @endforeach
    </div>
    @endif
</body>

</html>