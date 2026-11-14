<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>About North Bengal Group</title>

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
      <h1>About North Bengal Group</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>About Us</span>
      </div>
    </div>
  </section>

  <main>
    <section class="section about-story-section">
      <div class="container">
        <div class="row align-items-center g-5">
          <div class="col-lg-7">
            <span class="badge-tag">Our Group</span>
            <h2 class="section-title">From one venture to a connected group of businesses</h2>
            <p class="about-story-copy">
              North Bengal Group is a multi-sector business organization based in Rangpur. What began as a single venture has grown into a group working across chemicals, metal industries, transportation, and international trading.
            </p>
            <p class="about-story-copy mb-4">
              Across these sectors, the group aims to serve local industry, build dependable business relationships, and contribute to sustainable growth throughout the region.
            </p>
            <a href="{{ route('contact') }}" class="btn-premium">
              <i class="bi bi-chat-dots-fill"></i> Connect With Our Team
            </a>
          </div>

          <div class="col-lg-5">
            <aside class="about-sectors-panel" aria-labelledby="about-sectors-title">
              <figure class="about-group-visual">
                <img src="{{ asset('Images/About/north-bengal-group.png') }}" alt="Illustration of connected agriculture, transport, waterways and industry in North Bengal">
                <figcaption><i class="bi bi-geo-alt-fill" aria-hidden="true"></i> Growing with North Bengal</figcaption>
              </figure>
              <div class="about-sectors-content">
                <span class="about-panel-kicker">Our Business Network</span>
                <h3 id="about-sectors-title">Four connected sectors</h3>
                <ul class="about-sector-list list-unstyled mb-0">
                  <li><i class="bi bi-droplet-half" aria-hidden="true"></i> Chemicals</li>
                  <li><i class="bi bi-buildings" aria-hidden="true"></i> Metal industries</li>
                  <li><i class="bi bi-truck" aria-hidden="true"></i> Transportation</li>
                  <li><i class="bi bi-globe2" aria-hidden="true"></i> International trading</li>
                </ul>
                <div class="about-location">
                  <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                  <span>Based in Rangpur, Bangladesh</span>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </section>

    <section class="section about-purpose-section">
      <div class="container">
        <div class="text-center mb-5">
          <span class="badge-tag">Our Purpose</span>
          <h2 class="section-title center">Our Vision and Mission</h2>
        </div>
        <div class="row align-items-stretch g-4">
          <div class="col-lg-6">
            <article class="about-vision-card h-100">
              <div class="about-vision-icon" aria-hidden="true">
                <i class="bi bi-eye"></i>
              </div>
              <h3>Our Vision</h3>
              <p>
                To become a trusted and respected business group through excellence, innovation, and sustainable development.
              </p>
            </article>
          </div>
          <div class="col-lg-6">
            <article class="about-vision-card about-mission-card h-100">
              <div class="about-vision-icon" aria-hidden="true">
                <i class="bi bi-signpost-split" aria-hidden="true"></i>
              </div>
              <h3>Our Mission</h3>
              <p>
                To deliver quality, build lasting partnerships, and create meaningful value through commitment and integrity.
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="section about-leadership-section">
      <div class="container about-leadership-container">
        <div class="text-center mb-5">
          <span class="badge-tag">Leadership</span>
          <h2 class="section-title center">Leadership with purpose</h2>
          <p class="section-subtitle mx-auto mb-0">
            Meet the people guiding North Bengal Group’s commitment to integrity, excellence, and sustainable growth.
          </p>
        </div>

        <div class="row justify-content-center g-4">
          <div class="col-xl-6">
            <article class="leadership-card h-100">
              <img class="leadership-photo" src="{{ asset('Images/About/chairman-portrait.png') }}" alt="Mrs Chairman, Chairman of North Bengal Group" loading="lazy" decoding="async">
              <div class="leadership-card-content">
                <span class="leadership-role">Chairman</span>
                <h3>Mrs Sanji</h3>
                <p class="mb-0">
                  Her leadership is associated with integrity, excellence, trust, and sustainable growth.
                </p>
                <p>Integrity • Excellence • Trust • Sustainable Growth</p>
                <a href="{{ route('chairman') }}" class="btn-premium py-2 px-3 small leadership-card-action" aria-label="More about the Chairman">
                  Read More
                </a>
              </div>
            </article>
          </div>
          <div class="col-xl-6">
            <article class="leadership-card h-100">
              <img class="leadership-photo leadership-photo-alt" src="{{ asset('Images/About/abdus-sami.png') }}" alt="Abdus Sami, Managing Director of North Bengal Group" loading="lazy" decoding="async">
              <div class="leadership-card-content">
                <span class="leadership-role">Managing Director</span>
                <h3>Abdus Sami</h3>
                <p class="mb-0">
                  He leads the group’s pursuit of sustainable growth and business excellence through innovation, integrity, transparency, and professional leadership.
                </p>
                <a href="{{ route('managingdirector') }}" class="btn-premium py-2 px-3 small leadership-card-action" aria-label="More about the Managing Director">
                  Read More
                </a>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('User.Partials.footer')
</body>

</html>
