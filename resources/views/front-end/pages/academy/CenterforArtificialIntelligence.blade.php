@extends('front-end.layouts.master')
@section('title', 'Center for Artificial Intelligence')
@section('content')
<br>
<br>
<br>
<div class="container my-5">
    <!-- Hero Section -->
    <section id="hero" class="mb-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Welcome to the Center for Artificial Intelligence</h1>
                <p class="lead">Innovating the Future with AI Research and Applications</p>
            </div>
        </div>
    </section>

    <!-- AI Research Areas -->
    <section id="research-areas" class="mb-5">
        <h2 class="mb-4">Our Research Areas</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Machine Learning</h5>
                        <p class="card-text">Exploring advanced algorithms and techniques to build intelligent systems that learn from data.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Natural Language Processing</h5>
                        <p class="card-text">Developing systems that understand, interpret, and generate human language.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Robotics</h5>
                        <p class="card-text">Creating autonomous robots that can interact with the environment and perform complex tasks.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">AI Ethics</h5>
                        <p class="card-text">Addressing ethical considerations and challenges in the deployment and development of AI technologies.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upcoming Events -->
    <section id="upcoming-events" class="mb-5">
        <h2 class="mb-4">Upcoming Events</h2>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">AI Conference 2024</h5>
                <p class="mb-1">Join us for the annual AI Conference featuring talks from industry leaders and researchers.</p>
                <small>August 15, 2024</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Workshop on Machine Learning</h5>
                <p class="mb-1">Hands-on workshop exploring the latest techniques in machine learning.</p>
                <small>September 10, 2024</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">AI Ethics Panel Discussion</h5>
                <p class="mb-1">A panel discussion on the ethical implications of artificial intelligence.</p>
                <small>October 5, 2024</small>
            </a>
        </div>
    </section>

    <!-- AI Projects -->
    <section id="ai-projects" class="mb-5">
        <h2 class="mb-4">Our AI Projects</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Smart Home Assistant</h5>
                        <p class="card-text">Developing an AI-powered assistant for smart home automation and management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Predictive Analytics Platform</h5>
                        <p class="card-text">Building a platform for predictive analytics to provide insights and forecasts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us -->
    <section id="contact-us" class="mb-5">
        <h2 class="mb-4">Contact Us</h2>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" required>
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
            $("#Center-for-Artificial-Intelligence").addClass('active');
        });
    </script>
@endsection
