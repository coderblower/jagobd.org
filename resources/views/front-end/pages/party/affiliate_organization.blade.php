@extends('front-end.layouts.master')
@section('title', 'Party')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header" id="stats-section"
        style="margin-top:82px; background-image: url('{{ asset('frontend/img/counter-bg.jpg') }}'); background-size: cover; background-attachment: fixed; height: 600px; display: flex; align-items: center; justify-content: center;">
        <div class="container text-center">
            <h1 class="display-2 text-white mb-1 animated slideInDown">
                {{ app()->getLocale() == 'bn' ? 'অঙ্গ সংগঠন' : 'Affiliate Organization' }}</h1>
        </div>
    </div>


    <!-- Affiliate Organizations Section Start -->
    <div class="container affiliate-section">
        <!-- Affiliate 1 -->
        <div class="affiliate">
            <img src="https://via.placeholder.com/600x400.png?text=Affiliate+1" alt="Affiliate Organization">
            <div>
                <h2>{{ app()->getLocale() == 'bn' ? 'সহযোগী সংগঠন' : 'Affiliate Organization' }}</h2>
                <p>This is a brief description of Affiliate 1's objectives and goals. The description provides insight into what the affiliate organization aims to achieve and its role.</p>
                <h4>Committee Members</h4>
                <ul class="committee-list">
                    <li>John Doe - Chairperson</li>
                    <li>Jane Smith - Secretary</li>
                </ul>
            </div>
        </div>

        <!-- Affiliate 2 -->
        <div class="affiliate">
            <img src="https://via.placeholder.com/600x400.png?text=Affiliate+2" alt="Affiliate Organization">
            <div>
                <h2>{{ app()->getLocale() == 'bn' ? 'সহযোগী সংগঠন' : 'Affiliate Organization' }}</h2>
                <p>This is a brief description of Affiliate 2's objectives and goals. It highlights the key areas of focus and the contributions of the affiliate organization.</p>
                <h4>Committee Members</h4>
                <ul class="committee-list">
                    <li>Mary Johnson - Chairperson</li>
                    <li>James Brown - Treasurer</li>
                </ul>
            </div>
        </div>

        <!-- Affiliate 3 -->
        <div class="affiliate">
            <img src="https://via.placeholder.com/600x400.png?text=Affiliate+3" alt="Affiliate 3">
            <div>
                <h2>{{ app()->getLocale() == 'bn' ? 'সহযোগী সংগঠন' : 'Affiliate Organization' }}</h2>
                <p>This is a brief description of Affiliate 3's objectives and goals. The description outlines the mission and impact of the affiliate organization.</p>
                <h4>Committee Members</h4>
                <ul class="committee-list">
                    <li>Alice Williams - Chairperson</li>
                    <li>Robert Wilson - Secretary</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Affiliate Organizations Section End -->

    <style>
        .affiliate-section {
            padding: 60px 0;
        }
        .affiliate {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .affiliate:hover {
            transform: scale(1.02);
        }
        .affiliate img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .affiliate h2 {
            margin-top: 20px;
            font-size: 2rem;
            color: #39B44B;
        }
        .affiliate p {
            font-size: 1.1rem;
            color: #555;
        }
        .committee-list {
            list-style: none;
            padding: 0;
            font-size: 1rem;
        }
        .committee-list li {
            margin: 5px 0;
            color: #333;
        }
        @media (min-width: 768px) {
            .affiliate {
                display: flex;
                flex-direction: row;
                align-items: center;
                text-align: left;
            }
            .affiliate img {
                max-width: 40%;
                margin-right: 20px;
            }
            .affiliate h2 {
                font-size: 1.8rem;
            }
            .affiliate p {
                font-size: 1rem;
            }
        }
    </style>

@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $("#party").addClass('active');
        });
    </script>
@endsection
