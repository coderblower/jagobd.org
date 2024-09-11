@extends('front-end.layouts.master')
@section('title', 'Center for Political Research and Strategy')
@section('content')
<br>
<br>
<br>
<div class="container my-5">
    <!-- Introduction Section -->
    <section id="introduction" class="mb-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Center for Political Research and Strategy</h1>
                <p class="lead">Advancing Political Analysis and Strategic Insights for a Better Future</p>
            </div>
        </div>
    </section>

    <!-- Featured Articles -->
    <section id="featured-articles" class="mb-5">
        <h2 class="mb-4">Featured Articles</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">The Role of Political Strategy in Modern Governance</h5>
                        <p class="card-text">An in-depth look at how strategic planning influences political decision-making.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">Analyzing Global Political Trends</h5>
                        <p class="card-text">Understanding the major political shifts and trends that are shaping the world today.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Article Image">
                    <div class="card-body">
                        <h5 class="card-title">The Impact of Social Media on Politics</h5>
                        <p class="card-text">Exploring the influence of social media on political campaigns and public opinion.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ongoing Research Projects -->
    <section id="research-projects" class="mb-5">
        <h2 class="mb-4">Ongoing Research Projects</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Electoral Systems and Democratic Stability</h5>
                        <p class="card-text">Researching the relationship between electoral systems and the stability of democracies worldwide.</p>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Global Policy and Economic Strategy</h5>
                        <p class="card-text">Investigating the intersection of global policy-making and economic strategies in emerging markets.</p>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section id="newsletter-signup" class="mb-5 text-center">
        <h2 class="mb-4">Stay Updated</h2>
        <p class="mb-4">Subscribe to our newsletter to receive the latest research, articles, and event invitations.</p>
        <form class="d-inline-block">
            <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter your email" required>
                <button class="btn btn-primary" type="submit">Subscribe</button>
            </div>
        </form>
    </section>

    <!-- Expert Profiles -->
    <section id="expert-profiles" class="mb-5">
        <h2 class="mb-4">Meet Our Experts</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top rounded-circle mx-auto d-block mt-3" alt="Expert Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Jane Doe</h5>
                        <p class="card-text">Senior Political Analyst with a focus on international relations and diplomacy.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top rounded-circle mx-auto d-block mt-3" alt="Expert Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Professor John Smith</h5>
                        <p class="card-text">Expert in political strategy and electoral systems, with over 20 years of experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/200x200" class="card-img-top rounded-circle mx-auto d-block mt-3" alt="Expert Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Dr. Emily White</h5>
                        <p class="card-text">Specializes in political communication and the role of media in shaping public opinion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#Center-for-political").addClass('active');
        });
    </script>
@endsection
