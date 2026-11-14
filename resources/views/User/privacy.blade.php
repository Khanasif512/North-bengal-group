<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Privacy Policy | ChemCorp Chemical Solutions</title>

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
      <h1>Privacy Policy</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>Privacy Policy</span>
      </div>
    </div>
  </section>

  <!-- ===== CONTENT ===== -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 card-premium p-4 p-md-5">
          <p class="text-muted"><em>Last updated: January 2025</em></p>

          <h4 class="mt-4">1. Introduction</h4>
          <p class="text-muted">ChemCorp Industries Ltd. ("we", "our", "us") respects your privacy and is committed to protecting commercial data and personal information shared with us. This Privacy Policy outlines our standards for collecting, processing, and safeguarding technical inquiry information and corporate details.</p>

          <h4 class="mt-4">2. Information We Collect</h4>
          <p class="text-muted">When you interact with our catalog, submit an RFQ, or inquire about chemical specifications, we may collect:</p>
          <ul class="text-muted">
            <li><strong>Corporate & Contact Data:</strong> Company name, registered address, authorized contact person, corporate email, and telephone/WhatsApp numbers.</li>
            <li><strong>Technical Inquiries:</strong> Chemical specification requests, batch quantities, application sector, and delivery logistics requirements.</li>
            <li><strong>Website Usage Data:</strong> IP address, device type, and visited product catalog sections to optimize platform usability.</li>
          </ul>

          <h4 class="mt-4">3. How We Use Your Information</h4>
          <p class="text-muted">Information gathered is strictly utilized to:</p>
          <ul class="text-muted">
            <li>Generate tailored commercial quotations, TDS (Technical Data Sheets), and SDS documents.</li>
            <li>Coordinate bulk logistics dispatch and batch verification.</li>
            <li>Maintain compliance with industrial chemical trade, customs, and dangerous goods transit regulations.</li>
          </ul>

          <h4 class="mt-4">4. Data Security & Confidentially</h4>
          <p class="text-muted">We apply enterprise-grade data encryption and internal security controls. Proprietary formulation requests and commercial contract specifications are treated under strict non-disclosure terms.</p>

          <h4 class="mt-4">5. Contact Information</h4>
          <p class="text-muted">For privacy or data regulatory inquiries, reach our compliance officer:</p>
          <p class="text-muted">
            <strong>Email:</strong> privacy@chemcorp.com / info@chemcorp.com<br>
            <strong>Corporate Address:</strong> Plot 45, Industrial Estate, Tejgaon, Dhaka-1208, Bangladesh
          </p>
        </div>
      </div>
    </div>
  </section>

  @include('User.Partials.footer')

</body>
</html>
