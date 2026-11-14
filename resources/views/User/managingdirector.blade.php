<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <title>Managing Director | North Bengal Group</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    @vite(['resources/css/style.css', 'resources/js/script.js'])
</head>

<body>
    @include('User.Partials.header')

    @include('User.Partials.navbar')

    <section class="page-header">
        <div class="container">
            <h1>Managing Director</h1>
            <div class="breadcrumb-custom">
                <a href="{{ route('home') }}">Home</a> /
                <a href="{{ route('about') }}">About Us</a> /
                <span>Managing Director</span>
            </div>
        </div>
    </section>

    <main>
        <section class="section">
            <div class="container">
                <article class="leadership-card leadership-profile-card">
                    <img class="leadership-photo leadership-photo-alt" src="{{ asset('Images/About/abdus-sami.png') }}" alt="Abdus Sami, Managing Director of North Bengal Group" decoding="async">
                    <div class="leadership-card-content">
                        <span class="leadership-role">Managing Director</span>
                        <h2>Abdus Sami</h2>
                        <p>
                            As the Managing Director of North Bengal Group, I am committed to leading the organization toward sustainable growth, business excellence, and long-term success. My vision is to build a strong and trusted business organization through innovation, integrity, transparency, and professional leadership.
                        </p>
                        <p class="mb-0">
                            I believe that success is built on trust, teamwork, dedication, and strong relationships. My focus is on expanding business opportunities, strengthening strategic partnerships, maintaining high standards of quality, and creating lasting value for our customers, partners, and stakeholders.

                            At North Bengal Group, we believe in moving forward with confidence, embracing new opportunities, and building a better future through responsible business practices.
                        </p>
                        <a href="{{ route('about') }}" class="btn-premium py-2 px-3 small leadership-card-action">
                            <i class="bi bi-arrow-left" aria-hidden="true"></i> Back to About Us
                        </a>
                    </div>
                </article>

                <section class="leadership-purpose-section" aria-labelledby="managing-director-purpose-title">
                    <div class="text-center mb-4">
                        <span class="badge-tag">Our Purpose</span>
                        <h2 class="section-title center" id="managing-director-purpose-title">Our Vision and Mission</h2>
                    </div>
                    <div class="row align-items-stretch g-4">
                        <div class="col-lg-6">
                            <article class="about-vision-card h-100">
                                <div class="about-vision-icon" aria-hidden="true">
                                    <i class="bi bi-eye"></i>
                                </div>
                                <h3>Our Vision</h3>
                                <p>To become a trusted and respected business group through excellence, innovation, and sustainable development.</p>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <article class="about-vision-card about-mission-card h-100">
                                <div class="about-vision-icon" aria-hidden="true">
                                    <i class="bi bi-signpost-split" aria-hidden="true"></i>
                                </div>
                                <h3>Our Mission</h3>
                                <p>To deliver quality, build lasting partnerships, and create meaningful value through commitment and integrity.</p>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>

    @include('User.Partials.footer')
</body>

</html>