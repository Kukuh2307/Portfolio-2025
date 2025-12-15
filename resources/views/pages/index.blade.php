@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')
    @include('sections.hero')
    @include('sections.experience')
    @include('sections.education_organization')
    @include('sections.skill')
    @include('sections.achievement')
    @include('sections.training')
    @include('sections.project')
@endsection
