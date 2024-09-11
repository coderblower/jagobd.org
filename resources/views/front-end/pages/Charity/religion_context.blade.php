@extends('front-end.layouts.master')
@section('title', 'Religion Context')
@section('content')
</br></br></br>
<!-- Page Header Start -->
<div class="container-fluid">
    <div class="container text-center py-4">
        <h1 class="text-black animated slideInDown">
            @if (app()->getLocale() == 'bn')
                ধর্মীয় প্রতিষ্ঠানে সহযোগিতা
            @else
                Cooperation in religious institutions
            @endif
        </h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Content Start -->
<div class="container my-5">
    <div class="row g-4 d-flex align-items-center">
        <!-- Left Side: Information or Image -->
        <div class="col-md-6">
             <!-- Dashboard Start -->
             <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    @if (app()->getLocale() == 'bn')
                        ড্যাশবোর্ড
                    @else
                        Dashboard
                    @endif
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas> <!-- Add this line for chart -->
                    <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') মোট আবেদন: @else Total Applications: @endif</strong> 10</p>
                    <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') মোট দান: @else Total Donations: @endif</strong> $5000</p>
                    <p class="mb-2"><strong>@if (app()->getLocale() == 'bn') সফল দান: @else Successful Donations: @endif</strong> 8</p>
                </div>
            </div>        
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov',
                                'Dec'
                            ],
                            datasets: [{
                                label: '@if (app()->getLocale() == 'bn') বৃত্তির পরিমাণ @else Scholarship Amount @endif',
                                data: [12, 19, 3, 5, 2, 3, 7, 8, 12, 10, 5,
                                7], // Example data for twelve months
                                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                });
            </script>
                           
            <!-- Dashboard End -->
            <div class="list-group shadow-sm">
                <h5 class="list-group-item active">
                    @if (app()->getLocale() == 'bn')
                        দানের জন্য আবেদনকারীদের তালিকা
                    @else
                        List of Applicants for Donation
                    @endif
                </h5>
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') প্রতিষ্ঠানের নাম: @else Institution Name: @endif</strong> Institution 1</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') ঠিকানা: @else Address: @endif</strong> Address 1</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') সাহায্যের কারণ: @else Reason for Aid: @endif</strong> Reason 1</p>
                    </div>
                    <a href="#" class="btn btn-primary">@if (app()->getLocale() == 'bn') দান করুন @else Donate @endif</a>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') প্রতিষ্ঠানের নাম: @else Institution Name: @endif</strong> Institution 2</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') ঠিকানা: @else Address: @endif</strong> Address 2</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') সাহায্যের কারণ: @else Reason for Aid: @endif</strong> Reason 2</p>
                    </div>
                    <a href="#" class="btn btn-primary">@if (app()->getLocale() == 'bn') দান করুন @else Donate @endif</a>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') প্রতিষ্ঠানের নাম: @else Institution Name: @endif</strong> Institution 1</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') ঠিকানা: @else Address: @endif</strong> Address 1</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') সাহায্যের কারণ: @else Reason for Aid: @endif</strong> Reason 1</p>
                    </div>
                    <a href="#" class="btn btn-primary">@if (app()->getLocale() == 'bn') দান করুন @else Donate @endif</a>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="me-auto">
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') প্রতিষ্ঠানের নাম: @else Institution Name: @endif</strong> Institution 1</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') ঠিকানা: @else Address: @endif</strong> Address 1</p>
                        <p class="mb-1"><strong>@if (app()->getLocale() == 'bn') সাহায্যের কারণ: @else Reason for Aid: @endif</strong> Reason 1</p>
                    </div>
                    <a href="#" class="btn btn-primary">@if (app()->getLocale() == 'bn') দান করুন @else Donate @endif</a>
                </div>
            </div>
        
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center mt-4">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">@if (app()->getLocale() == 'bn') পূর্ববর্তী @else Previous @endif</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">@if (app()->getLocale() == 'bn') পরবর্তী @else Next @endif</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        
        <!-- Right Side: Form -->
        <div class="col-md-6" style="margin-top: -20px">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">
                        @if (app()->getLocale() == 'bn')
                            আবেদন ফর্ম
                        @else
                            Application Form
                        @endif
                    </h5>
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="institution_name" class="form-label">@if (app()->getLocale() == 'bn') প্রতিষ্ঠানের নাম @else Institution Name @endif</label>
                            <input type="text" class="form-control" id="institution_name" name="institution_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="applicant_name" class="form-label">@if (app()->getLocale() == 'bn') আবেদনকারীর নাম @else Applicant Name @endif</label>
                            <input type="text" class="form-control" id="applicant_name" name="applicant_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="contact_number" class="form-label">@if (app()->getLocale() == 'bn') যোগাযোগ নম্বর @else Contact Number @endif</label>
                            <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">@if (app()->getLocale() == 'bn') ইমেইল @else Email @endif</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">@if (app()->getLocale() == 'bn') ঠিকানা @else Address @endif</label>
                            <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="account_type_number" class="form-label">@if (app()->getLocale() == 'bn') অ্যাকাউন্টের ধরন/নম্বর @else Account Type/Number @endif</label>
                            <input type="text" class="form-control" id="account_type_number" name="account_type_number" required>
                        </div> 
                        <div class="mb-3">
                            <label for="amount_needed" class="form-label">
                                @if (app()->getLocale() == 'bn')
                                    প্রয়োজনীয় পরিমাণ
                                @else
                                    Amount Needed
                                @endif
                            </label>
                            <input type="number" class="form-control" id="amount_needed" name="amount_needed"
                                required>
                        </div>                       
                        <div class="mb-3">
                            <label for="aid_reason" class="form-label">@if (app()->getLocale() == 'bn') সাহায্যের কারণ @else Reason for Aid @endif</label>
                            <textarea class="form-control" id="aid_reason" name="aid_reason" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="document_image" class="form-label">@if (app()->getLocale() == 'bn') ডকুমেন্ট ইমেজ @else Document Image @endif</label>
                            <input type="file" class="form-control" id="document_image" name="document_image" required>
                        </div>
                        <!-- Radio Button Field for Five-Star Membership -->
                        <div class="mb-3">
                            <label class="form-label">@if (app()->getLocale() == 'bn') আপনি কি ফাইভ স্টার সদস্য? @else Are you a five-star member? @endif</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="five_star_member" id="five_star_yes" value="yes">
                                <label class="form-check-label" for="five_star_yes">
                                    @if (app()->getLocale() == 'bn') হ্যাঁ @else Yes @endif
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="five_star_member" id="five_star_no" value="no">
                                <label class="form-check-label" for="five_star_no">
                                    @if (app()->getLocale() == 'bn') না @else No @endif
                                </label>
                            </div>
                        </div>

                        <!-- Reference Input Fields (shown only if "No" is selected) -->
                        <div id="reference_field" class="mb-3 d-none">
                            <label for="references" class="form-label">@if (app()->getLocale() == 'bn') রেফারেন্স @else References @endif</label>
                            <div id="reference_list">
                                <!-- Initial reference field -->
                                <div class="reference-item mb-2">
                                    <input type="text" class="form-control mb-2" name="references[]" placeholder="@if (app()->getLocale() == 'bn') রেফারেন্স এন্টার করুন @else Enter reference @endif">
                                </div>
                            </div>
                            <button type="button" id="add_reference" class="btn btn-secondary">@if (app()->getLocale() == 'bn') আরও যুক্ত করুন @else Add Another @endif</button>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">@if (app()->getLocale() == 'bn') জমা দিন @else Submit @endif</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const noRadio = document.getElementById('five_star_no');
        const referenceField = document.getElementById('reference_field');
        const addReferenceButton = document.getElementById('add_reference');
        const referenceList = document.getElementById('reference_list');

        noRadio.addEventListener('change', function() {
            if (this.checked) {
                referenceField.classList.remove('d-none');
            }
        });

        const yesRadio = document.getElementById('five_star_yes');
        yesRadio.addEventListener('change', function() {
            if (this.checked) {
                referenceField.classList.add('d-none');
            }
        });

        addReferenceButton.addEventListener('click', function() {
            const referenceItems = document.querySelectorAll('.reference-item');
            if (referenceItems.length >= 5) {
                alert('@if (app()->getLocale() == 'bn') আপনি সর্বাধিক পাঁচটি রেফারেন্স যোগ করতে পারবেন @else You can add a maximum of five references @endif');
                return;
            }
            const newReference = document.createElement('div');
            newReference.classList.add('reference-item', 'mb-2');
            newReference.innerHTML = `
                <input type="text" class="form-control mb-2" name="references[]" placeholder="@if (app()->getLocale() == 'bn') রেফারেন্স এন্টার করুন @else Enter reference @endif">
            `;
            referenceList.appendChild(newReference);
        });
    });
</script>

@section('js')
    <script>
        $(document).ready(function() {
            $("#religion_context").addClass('active');
        });
    </script>
@endsection
