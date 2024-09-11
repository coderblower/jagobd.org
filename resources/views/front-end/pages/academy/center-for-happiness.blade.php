@extends('front-end.layouts.master')
@section('title', 'Center for Happiness')
@section('content')

<div class="container my-5">
    <!-- Hero Section -->
    <div class="jumbotron text-center bg-primary text-white p-5 mb-4">
        <!-- Logo -->
        <img src="{{ asset('/uploads/Centre-for-National-Happiness.jpg') }}" alt="Institute for Future Leaders Logo" class="img-fluid mb-3" style="max-width: 150px;">
        <h1 class="display-4">Centre-for-National-Happiness</h1>
        <p class="lead">Empowering the leaders of tomorrow with world-class education.</p>
    </div>
    <!-- Happiness Circle Graph -->
    <section id="happiness-graph" class="mb-5">
        <h2 class="mb-4">Our Happiness Metrics</h2>
        <div class="text-center">
            <!-- You can replace this placeholder with a real graph -->
            <div id="happiness-graph-container" style="width: 100%; max-width: 600px; margin: auto;">
                <canvas id="happinessChart"></canvas>
            </div>
        </div>
    </section>

    <div class="row">
        <!-- Feedback Form Section -->
        <section id="feedback-form" class="col-md-6 mb-5">
            <h2 class="mb-4">Share Your Happiness</h2>
            <form>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="fullName" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="happyWithBNM" class="form-label">How happy are you with BNM?</label>
                    <input type="text" class="form-control" id="happyWithBNM" placeholder="Describe your happiness level" required>
                </div>
                <div class="mb-3">
                    <label for="happyToStay" class="form-label">Are you happy to stay and work with BNM?</label>
                    <select class="form-select" id="happyToStay" required>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                        <option value="Not Sure">Not Sure</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label">Additional Comments</label>
                    <textarea class="form-control" id="comments" rows="4"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>

        <!-- Submitted Information Display Section -->
        <section id="submitted-info" class="col-md-6">
            <h2 class="mb-4">Submitted Information</h2>
            <div id="info-container">
                <!-- Example of submitted information -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">John Doe (john.doe@example.com)</h5>
                        <p><strong>Happiness with BNM:</strong> Extremely satisfied with the support and opportunities provided.</p>
                        <p><strong>Happy to Stay:</strong> Yes</p>
                        <p><strong>Additional Comments:</strong> The work environment is positive and motivating.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Jane Smith (jane.smith@example.com)</h5>
                        <p><strong>Happiness with BNM:</strong> Very happy with the company's growth and direction.</p>
                        <p><strong>Happy to Stay:</strong> Yes</p>
                        <p><strong>Additional Comments:</strong> I appreciate the regular feedback and growth opportunities.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Bob Brown (bob.brown@example.com)</h5>
                        <p><strong>Happiness with BNM:</strong> Content with the current role and team.</p>
                        <p><strong>Happy to Stay:</strong> Yes</p>
                        <p><strong>Additional Comments:</strong> The team spirit and collaborative environment are commendable.</p>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <span class="page-link">Previous</span>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </section>

    </div>
</div>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function() {
            $("#Center-for-happiness").addClass('active');

            // Happiness Circle Graph
            var ctx = document.getElementById('happinessChart').getContext('2d');
            var happinessChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Very Happy', 'Happy', 'Neutral', 'Unhappy', 'Very Unhappy'],
                    datasets: [{
                        label: 'Happiness Levels',
                        data: [40, 30, 20, 5, 5], // Example data
                        backgroundColor: [
                            '#36a2eb',
                            '#ff6384',
                            '#ffce56',
                            '#e7e9ed',
                            '#c4e17f'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw + '%';
                                }
                            }
                        }
                    }
                }
            });

            // Dummy function to handle form submission and update information display
            $('form').on('submit', function(event) {
                event.preventDefault();
                var name = $('#fullName').val();
                var email = $('#email').val();
                var happiness = $('#happyWithBNM').val();
                var stay = $('#happyToStay').val();
                var comments = $('#comments').val();

                var infoHtml = `
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">${name} (${email})</h5>
                            <p><strong>Happiness with BNM:</strong> ${happiness}</p>
                            <p><strong>Happy to Stay:</strong> ${stay}</p>
                            <p><strong>Additional Comments:</strong> ${comments}</p>
                        </div>
                    </div>
                `;
                $('#info-container').append(infoHtml);
                $(this).trigger('reset');
            });
        });
    </script>
@endsection
