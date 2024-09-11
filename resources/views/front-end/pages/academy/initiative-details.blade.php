@extends('front-end.layouts.master')

@section('title', __('Initiative Details'))

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="display-4">{{ __('Leadership Program') }}</h1>
            <p class="lead">{{ __('A comprehensive program to develop leadership skills among youth.') }}</p>
            <img src="https://via.placeholder.com/800x400" class="img-fluid mb-4" alt="{{ __('Leadership Program') }}">
            <p>
                {{ __('This leadership program aims to empower young individuals with essential skills and knowledge to become effective leaders. Participants will engage in various activities, including workshops, mentoring sessions, and real-world projects. The program focuses on building confidence, communication skills, and strategic thinking. Through hands-on experiences and collaborative efforts, attendees will be prepared to take on leadership roles in their communities and beyond.') }}
            </p>
            <a href="{{ url('/youth-parliament') }}" class="btn btn-primary">{{ __('Back to Initiatives') }}</a>
        </div>
    </div>
</div>
@endsection
