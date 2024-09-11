@extends('front-end.layouts.master')
@section('title', app()->getLocale() == 'bn' ? __('ইয়ুথ পার্লামেন্ট') : __('Youth Parliament'))
<br>
<br>
<br>
@section('content')
<div class="container">
    <!-- Hero Section -->
    <section class="hero bg-primary text-white text-center py-5">
        <div class="container">
            <h1 class="display-4">{{ app()->getLocale() == 'bn' ? __('ইয়ুথ পার্লামেন্টে স্বাগতম') : __('Welcome to the Youth Parliament') }}</h1>
            <p class="lead">{{ app()->getLocale() == 'bn' ? __('পরবর্তী প্রজন্মের নেতাদের ক্ষমতায়ন করা') : __('Empowering the next generation of leaders') }}</p>
            <a href="#initiatives" class="btn btn-light btn-lg mt-3">{{ app()->getLocale() == 'bn' ? __('আমাদের উদ্যোগগুলি অন্বেষণ করুন') : __('Explore Our Initiatives') }}</a>
        </div>
    </section>

    <!-- Initiatives Section -->
    <section id="initiatives" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">{{ app()->getLocale() == 'bn' ? __('আমাদের উদ্যোগগুলি') : __('Our Initiatives') }}</h2>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="{{ app()->getLocale() == 'bn' ? __('লিডারশিপ প্রোগ্রাম') : __('Leadership Program') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ app()->getLocale() == 'bn' ? __('লিডারশিপ প্রোগ্রাম') : __('Leadership Program') }}</h5>
                            <p class="card-text">{{ app()->getLocale() == 'bn' ? __('যুবকদের মধ্যে নেতৃত্বের দক্ষতা বিকাশের জন্য একটি ব্যাপক প্রোগ্রাম।') : __('A comprehensive program to develop leadership skills among youth.') }}</p>
                            <a href="{{route('initiative.show')}}" class="btn btn-primary">{{ app()->getLocale() == 'bn' ? __('আরও জানুন') : __('Learn More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="{{ app()->getLocale() == 'bn' ? __('নীতি বিতর্ক') : __('Policy Debates') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ app()->getLocale() == 'bn' ? __('নীতি বিতর্ক') : __('Policy Debates') }}</h5>
                            <p class="card-text">{{ app()->getLocale() == 'bn' ? __('বর্তমান নীতিগত বিষয়গুলিতে অর্থবহ বিতর্কে অংশগ্রহণ করুন।') : __('Engage in meaningful debates on current policy issues.') }}</p>
                            <a href="{{route('initiative.show')}}" class="btn btn-primary">{{ app()->getLocale() == 'bn' ? __('আরও জানুন') : __('Learn More') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card shadow-sm h-100">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="{{ app()->getLocale() == 'bn' ? __('কমিউনিটি প্রকল্পগুলি') : __('Community Projects') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ app()->getLocale() == 'bn' ? __('কমিউনিটি প্রকল্পগুলি') : __('Community Projects') }}</h5>
                            <p class="card-text">{{ app()->getLocale() == 'bn' ? __('আপনার সম্প্রদায়ে পার্থক্য তৈরি করে এমন প্রকল্পগুলিতে অংশগ্রহণ করুন।') : __('Participate in projects that make a difference in your community.') }}</p>
                            <a href="{{route('initiative.show')}}" class="btn btn-primary">{{ app()->getLocale() == 'bn' ? __('আরও জানুন') : __('Learn More') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">{{ app()->getLocale() == 'bn' ? __('আমাদের সদস্যরা কী বলেন') : __('What Our Members Say') }}</h2>
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <p class="card-text">{{ app()->getLocale() == 'bn' ? __('"যুব সংসদ আমাকে এমন বিষয়ে কথা বলার আত্মবিশ্বাস দিয়েছে যা আমার জন্য গুরুত্বপূর্ণ। এটি একটি জীবন পরিবর্তনকারী অভিজ্ঞতা হয়েছে।"') : ('"The Youth Parliament has given me the confidence to speak up on issues that matter to me. It\'s been a life-changing experience."') }}</p>
                                    <h5 class="card-title">{{ app()->getLocale() == 'bn' ? __('জন ডো') : __('John Doe') }}</h5>
                                    <p class="text-muted">{{ app()->getLocale() == 'bn' ? __('সদস্য ২০২২ সাল থেকে') : __('Member since 2022') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <p class="card-text">{{ app()->getLocale() == 'bn' ? __('"যুব সংসদের অংশ হওয়ায় আমি একই দৃষ্টিভঙ্গি সম্পন্ন ব্যক্তিদের সাথে সংযোগ করতে এবং সাধারণ লক্ষ্য অর্জনের জন্য কাজ করতে সাহায্য করেছি।"') : ('"Being part of the Youth Parliament has helped me connect with like-minded individuals and work towards common goals."') }}</p>
                                    <h5 class="card-title">{{ app()->getLocale() == 'bn' ? __('জেন স্মিথ') : __('Jane Smith') }}</h5>
                                    <p class="text-muted">{{ app()->getLocale() == 'bn' ? __('সদস্য ২০২১ সাল থেকে') : __('Member since 2021') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card shadow-sm">
                                <div class="card-body text-center">
                                    <p class="card-text">{{ app()->getLocale() == 'bn' ? __('"যুব সংসদের উদ্যোগ এবং কার্যক্রম নেতৃত্ব এবং সম্প্রদায় পরিষেবার উপর আমার দৃষ্টিভঙ্গি বিস্তৃত করেছে।"') : ('"The initiatives and activities at the Youth Parliament have broadened my perspective on leadership and community service."') }}</p>
                                    <h5 class="card-title">{{ app()->getLocale() == 'bn' ? __('এমিলি জনসন') : __('Emily Johnson') }}</h5>
                                    <p class="text-muted">{{ app()->getLocale() == 'bn' ? __('সদস্য ২০২৩ সাল থেকে') : __('Member since 2023') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ app()->getLocale() == 'bn' ? __('পূর্ববর্তী') : __('Previous') }}</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ app()->getLocale() == 'bn' ? __('পরবর্তী') : __('Next') }}</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-5 text-center">
        <div class="container">
            <h2>{{ app()->getLocale() == 'bn' ? __('আজই যুব সংসদে যোগদান করুন') : __('Join the Youth Parliament Today') }}</h2>
            <p class="lead">{{ app()->getLocale() == 'bn' ? __('একটি সম্প্রদায়ের অংশ হয়ে উঠুন যা ভবিষ্যতকে আকার দেয়।') : __('Become part of a community that shapes the future.') }}</p>
            <!-- Button trigger modal -->
            <a href="#" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#getInvolvedModal">{{ app()->getLocale() == 'bn' ? __('যুক্ত হোন') : __('Get Involved') }}</a>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal fade" id="getInvolvedModal" tabindex="-1" aria-labelledby="getInvolvedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="getInvolvedModalLabel">{{ app()->getLocale() == 'bn' ? __('যুব সংসদে যুক্ত হন') : __('Get Involved with Youth Parliament') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ app()->getLocale() == 'bn' ? __('পুরো নাম') : __('Full Name') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ app()->getLocale() == 'bn' ? __('আপনার পুরো নাম লিখুন') : __('Enter your full name') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ app()->getLocale() == 'bn' ? __('ইমেইল ঠিকানা') : __('Email Address') }}</label>
                        <input type="email" class="form-control" id="email" placeholder="{{ app()->getLocale() == 'bn' ? __('আপনার ইমেইল ঠিকানা লিখুন') : __('Enter your email address') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ app()->getLocale() == 'bn' ? __('ফোন নম্বর') : __('Phone Number') }}</label>
                        <input type="tel" class="form-control" id="phone" placeholder="{{ app()->getLocale() == 'bn' ? __('আপনার ফোন নম্বর লিখুন') : __('Enter your phone number') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="interests" class="form-label">{{ app()->getLocale() == 'bn' ? __('আগ্রহের ক্ষেত্রগুলি') : __('Areas of Interest') }}</label>
                        <select class="form-select" id="interests" required>
                            <option value="" selected disabled>{{ app()->getLocale() == 'bn' ? __('আগ্রহের একটি ক্ষেত্র নির্বাচন করুন') : __('Select an area of interest') }}</option>
                            <option value="leadership">{{ app()->getLocale() == 'bn' ? __('নেতৃত্ব') : __('Leadership') }}</option>
                            <option value="policy-debates">{{ app()->getLocale() == 'bn' ? __('নীতি বিতর্ক') : __('Policy Debates') }}</option>
                            <option value="community-projects">{{ app()->getLocale() == 'bn' ? __('কমিউনিটি প্রকল্পগুলি') : __('Community Projects') }}</option>
                            <option value="volunteering">{{ app()->getLocale() == 'bn' ? __('স্বেচ্ছাসেবক কার্যক্রম') : __('Volunteering') }}</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{ app()->getLocale() == 'bn' ? __('আপনি যোগদান করতে চান কেন?') : __('Why do you want to join?') }}</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="{{ app()->getLocale() == 'bn' ? __('যুব সংসদে যোগদানের জন্য আপনার প্রেরণা শেয়ার করুন') : __('Share your motivation for joining the Youth Parliament') }}" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">{{ app()->getLocale() == 'bn' ? __('জমা দিন') : __('Submit') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $("#Center for Youth Parliament").addClass('active');
    });
</script>
@endsection
