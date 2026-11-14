<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Chairman | North Bengal Group</title>

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
      <h1>Chairman</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> /
        <a href="{{ route('about') }}">About Us</a> /
        <span>Chairman</span>
      </div>
    </div>
  </section>

  <main>
    <section class="section">
      <div class="container">
        <article class="leadership-card leadership-profile-card">
          <img class="leadership-photo" src="{{ asset('Images/About/chairman-portrait.png') }}" alt="Mrs Chairman, Chairman of North Bengal Group" decoding="async">
          <div class="leadership-card-content">
            <span class="leadership-role">Chairman</span>
            <h2>Mrs Chairman</h2>
            <p>
              Her leadership is associated with integrity, excellence, trust, and sustainable growth.
              These principles guide North Bengal Group’s work across its connected businesses.
            </p>
            <p class="mb-0">
              North Bengal Group serves local industry and builds dependable business relationships across chemicals, metal industries, transportation, and international trading.
            </p>
            <a href="{{ route('about') }}" class="btn-premium py-2 px-3 small leadership-card-action">
              <i class="bi bi-arrow-left" aria-hidden="true"></i> Back to About Us
            </a>
          </div>
        </article>

        <section class="leadership-purpose-section" aria-labelledby="chairman-purpose-title">
          <div class="text-center mb-4">
            <span class="badge-tag">Our Purpose</span>
            <h2 class="section-title center" id="chairman-purpose-title">Our Vision and Mission</h2>
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