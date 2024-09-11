@extends('front-end.layouts.master')
@section('title', 'Course Details')
@section('content')
    <div class="container my-5">
        <!-- Course Hero Section -->
        <div class="jumbotron text-center bg-dark text-white p-5 mb-4">
            <h1 class="display-4">{{ $course->title }}</h1>
            <p class="lead">{{ $course->subtitle ?? 'Subtitle not available' }}</p>
        </div>

        <!-- Course Details Section -->
        <section id="course-details" class="mb-5">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="mb-4">Course Overview</h2>
                    <p>{{ $course->description }}</p>

                    <h3 class="mt-4">What You'll Learn</h3>
                    <ul>
                        @foreach ($course->learning_outcomes ?? [] as $outcome)
                            <li>{{ $outcome }}</li>
                        @endforeach
                    </ul>

                    <h3 class="mt-4">Course Details</h3>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th>Duration</th>
                                <td>{{ $course->duration }}</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>${{ $course->price }}</td>
                            </tr>
                            <tr>
                                <th>Level</th>
                                <td>{{ $course->level }}</td>
                            </tr>
                            <tr>
                                <th>Start Date</th>
                                <td>{{ $course->created_at}}</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 class="mt-4">Prerequisites</h3>
                    <p>{{ $course->prerequisites ?? 'Prerequisites not listed' }}</p>
                </div>
                <div class="col-md-4">
                    {{-- <div class="card mb-4">
                        <img src="{{ $course->image_url ?? 'default-image-url.jpg' }}" class="card-img-top" alt="{{ $course->title }}">
                        <div class="card-body">
                            <h5 class="card-title">Enroll Now</h5>
                            <p class="card-text">Ready to start learning? Enroll in this course today!</p>
                            <a href="{{ route('enrollments.create', ['course_id' => $course->id]) }}" class="btn btn-primary">Enroll</a>
                        </div>
                    </div> --}}

                    <!-- Instructor Section -->
                    {{-- <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Instructor</h5>
                            @if ($course->instructor)
                                <div class="d-flex align-items-center">
                                    <img src="{{ $course->instructor->profile_image_url ?? 'default-instructor-image.jpg' }}" class="rounded-circle me-3" alt="{{ $course->instructor->name }}" style="width: 80px; height: 80px;">
                                    <div>
                                        <h6 class="card-subtitle mb-2">{{ $course->instructor->name }}</h6>
                                        <p class="card-text">{{ $course->instructor->bio ?? 'No bio available' }}</p>
                                    </div>
                                </div>
                            @else
                                <p>Instructor information not available.</p>
                            @endif
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="bg-light p-5 mb-5">
            <h2 class="mb-4">What Students Say</h2>
            <div class="row">
                @foreach ($course->testimonials ?? [] as $testimonial)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <blockquote class="blockquote">
                                    <p class="mb-0">{{ $testimonial->message }}</p>
                                    <footer class="blockquote-footer">{{ $testimonial->author_name }}, <cite title="Source Title">{{ $testimonial->author_title }}</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
