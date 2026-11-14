<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Video Tour & Facility Walkthrough | ChemCorp</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  @vite(['resources/css/style.css', 'resources/js/script.js'])
</head>
<body>

  @include('User.Partials.header')

  @include('User.Partials.navbar')

  <!-- ===== PAGE HEADER ===== -->
  <section class="page-header">
    <div class="container">
      <h1>Corporate Video Library</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>Video Tour</span>
      </div>
      <p class="mt-3 text-light opacity-75 max-w-600 mx-auto small">
        Step inside our synthesis facilities, clean packaging hubs, and quality control operations.
      </p>
    </div>
  </section>

  <!-- ===== VIDEOS GRID ===== -->
  <section class="section">
    <div class="container">
      <div class="text-center mb-5">
        <span class="badge-tag">Video Showcase</span>
        <h2 class="section-title center">Inside ChemCorp Operations</h2>
        <p class="section-subtitle mx-auto">Watch high-definition tours of our manufacturing and analytical departments.</p>
      </div>

      <div class="row g-4">
        <!-- Video 1 -->
        <div class="col-md-6">
          <div class="video-card">
            <div class="video-wrapper">
              <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Corporate Facility Tour" allowfullscreen></iframe>
            </div>
            <div class="p-4 bg-white border-top">
              <h5 class="mb-1">Corporate Facility & Plant Walkthrough</h5>
              <p class="text-muted small mb-0">An extensive overview of our chemical blending units and automated packaging systems.</p>
            </div>
          </div>
        </div>

        <!-- Video 2 -->
        <div class="col-md-6">
          <div class="video-card">
            <div class="video-wrapper">
              <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Batch Synthesis & Reaction Engineering" allowfullscreen></iframe>
            </div>
            <div class="p-4 bg-white border-top">
              <h5 class="mb-1">Batch Synthesis & Reaction Engineering</h5>
              <p class="text-muted small mb-0">Demonstrating precise chemical reaction controls under strict inert conditions.</p>
            </div>
          </div>
        </div>

        <!-- Video 3 -->
        <div class="col-md-6">
          <div class="video-card">
            <div class="video-wrapper">
              <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Analytical Chemistry QA/QC Testing" allowfullscreen></iframe>
            </div>
            <div class="p-4 bg-white border-top">
              <h5 class="mb-1">Analytical Chemistry & HPLC Verification</h5>
              <p class="text-muted small mb-0">How our analytical chemists test and approve chemical lots before commercial release.</p>
            </div>
          </div>
        </div>

        <!-- Video 4 -->
        <div class="col-md-6">
          <div class="video-card">
            <div class="video-wrapper">
              <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Safe Chemical Logistics & Dispatch" allowfullscreen></iframe>
            </div>
            <div class="p-4 bg-white border-top">
              <h5 class="mb-1">Safe Chemical Handling & Logistics Dispatch</h5>
              <p class="text-muted small mb-0">UN-standard packaging, secondary spill containment, and prompt commercial dispatch.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('User.Partials.footer')

</body>
</html>
