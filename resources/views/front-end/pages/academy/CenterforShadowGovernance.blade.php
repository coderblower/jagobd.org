@extends('front-end.layouts.master')
@section('title', 'Center for Shadow Governance')
@section('content')
<br>
<br>
<br>
<div class="container my-5">
    <!-- Hero Section -->
    <section id="hero" class="mb-5 text-center">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4">Center for Shadow Governance</h1>
                <p class="lead">Exploring the Hidden Layers of Power and Influence in Governance</p>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section id="case-studies" class="mb-5">
        <h2 class="mb-4">Notable Case Studies</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Case Study: The Influence of Lobbying in Policy Making</h5>
                        <p class="card-text">An in-depth analysis of how lobbying shapes legislative outcomes in democratic systems.</p>
                        <a href="#" class="btn btn-primary">Read Full Case Study</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Case Study: Shadow Networks in Authoritarian Regimes</h5>
                        <p class="card-text">Examining the role of unofficial networks and their influence on governance contexts.</p>
                        <a href="#" class="btn btn-primary">Read Full Case Study</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expert Analysis -->
    <section id="expert-analysis" class="mb-5">
        <h2 class="mb-4">Expert Analysis</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Expert Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Michael Adams</h5>
                        <p class="card-text">Analyzing the impact of clandestine networks on global geopolitics.</p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Expert Image">
                    <div class="card-body">
                        <h5 class="card-title">Professor Sarah Lee</h5>
                        <p class="card-text">Exploring the intersection of media influence and shadow governance.</p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Expert Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Carlos Rivera</h5>
                        <p class="card-text">The role of economic power in influencing political decisions from the shadows.</p>
                        <a href="#" class="btn btn-secondary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resource Library -->
    <section id="resource-library" class="mb-5">
        <h2 class="mb-4">Resource Library</h2>
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Research Paper: The Hidden Hand in Global Politics</h5>
                <p class="mb-1">A comprehensive study on the unseen influences shaping international relations.</p>
                <small>Published: January 2024</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">White Paper: Media, Propaganda, and Shadow Governance</h5>
                <p class="mb-1">Exploring how media and propaganda are used as tools in shadow governance.</p>
                <small>Published: March 2024</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Book: Shadow Networks: The Unseen World of Power</h5>
                <p class="mb-1">An in-depth look at the networks that operate behind the scenes in global politics.</p>
                <small>Published: May 2024</small>
            </a>
        </div>
    </section>

    <!-- Discussion Forum -->
    <section id="discussion-forum" class="mb-5">
        <h2 class="mb-4">Join the Discussion</h2>
        <p>Engage with experts and peers in our discussion forum on shadow governance.</p>
        <a href="#" class="btn btn-primary">Visit the Forum</a>
    </section>
</div>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $("#Center-for-Shadow-Governance").addClass('active');
        });
    </script>
@endsection
