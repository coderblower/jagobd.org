@extends('front-end.layouts.master')
@section('title', 'Institute for Future Leaders')
@section('content')
    <br>
    <br>
    <br>
    <div class="my-5">
        <!-- Hero Section -->
        <div class="jumbotron text-center  text-white py-5 mb-4" style="background:#35bb96 ">
            <h1 class="display-4">Institute for Future Leaders</h1>
            <p class="lead">Empowering the leaders of tomorrow with world-class education.</p>
        </div>

        <!-- About Us Section -->
        <section id="about" class="mb-5">

                    {{-- <x-Alert >
                            <x-slot:title>
                                Hello anamul vai
                            </x-slot>
                        </x-Alert> --}}




        </section>

        <!-- Courses Section -->
        <section id="courses" class="mb-5">
            <h2 class="mb-4">Our Courses</h2>
            <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ $course->image_url }}" class="card-img-top" alt="{{ $course->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $course->title }}</h5>
                                <p class="card-text">{{ $course->description }}</p>
                                <a href="{{ route('coursedetails', ['id' => $course->id]) }}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Enrollment Section -->
        <section id="enroll" class="bg-light p-5 mb-5">
            <h2 class="mb-4">Enroll Now</h2>
            <p class="mb-4">Take the first step towards a brighter future by enrolling in our programs. Fill out the form
                below to get started.</p>
                <form action="{{ route('enrollments.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" id="course" name="course_id" required>
                            @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <input type="hidden" value="1" name="user_id">
                        <input type="hidden" value="enrolled" name="status">

                    </div>
                    {{-- <div class="mb-3">
                        <label for="user" class="form-label">User</label>
                        <select class="form-select" id="user" name="user_id" required>
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('user_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    {{-- <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="enrolled">Enrolled</option>
                            <option value="completed">Completed</option>
                            <option value="canceled">Canceled</option>
                        </select>
                        @error('status')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </section>

        {{-- <!-- Calendar Section -->
        <section id="calendar">
            <h2 class="mb-4">Upcoming Events</h2>
            <div class="card">
                <div class="card-header">
                    Calendar
                </div>
                <div class="card-body">
                    <p class="card-text">Here you can integrate a calendar or list upcoming events relevant to the academy.
                    </p>
                    <iframe src="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID&ctz=YOUR_TIMEZONE"
                        style="border: 0; width: 100%; height: 500px;" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>
        </section> --}}

        <!-- Testimonials Section -->
        <section id="testimonials" class="bg-light p-5 mb-5">
            <h2 class="mb-4">What Our Students Say</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p class="mb-0">"The Leadership Development course was transformative. The skills I
                                    learned are invaluable!"</p>
                                <footer class="blockquote-footer">John Doe, <cite title="Source Title">Former Student</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p class="mb-0">"I gained a deep understanding of strategic management that I could
                                    immediately apply to my career."</p>
                                <footer class="blockquote-footer">Jane Smith, <cite title="Source Title">Alumni</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <blockquote class="blockquote">
                                <p class="mb-0">"Public Speaking class helped me overcome my fear of speaking in public
                                    and improved my communication skills."</p>
                                <footer class="blockquote-footer">Alice Johnson, <cite title="Source Title">Current
                                        Student</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Us Section -->
        <section id="contact">
            <h2 class="mb-4">Contact Us</h2>
            <form>
                <div class="mb-3">
                    <label for="contactName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="contactName" required>
                </div>
                <div class="mb-3">
                    <label for="contactEmail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="contactEmail" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </section>
    </div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#institute-for-future-leaders").addClass('active');
        });
    </script>
@endsection
