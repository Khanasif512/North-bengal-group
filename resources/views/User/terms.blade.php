<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
  <title>Terms & Conditions | ChemCorp Chemical Solutions</title>

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
      <h1>Terms & Conditions</h1>
      <div class="breadcrumb-custom">
        <a href="{{ route('home') }}">Home</a> / <span>Terms of Service</span>
      </div>
    </div>
  </section>

  <!-- ===== TERMS CONTENT ===== -->
  <section class="section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9 card-premium p-4 p-md-5">
          <p class="text-muted"><em>Last updated: January 2025</em></p>

          <h4 class="mt-4">1. Commercial Overview</h4>
          <p class="text-muted">By browsing this corporate portal, you acknowledge and agree to the operational and legal guidelines described herein. ChemCorp Industries Ltd. provides this website strictly as a B2B informational chemical catalog.</p>

          <h4 class="mt-4">2. No Consumer Transactions (No Add-to-Cart / Checkout)</h4>
          <p class="text-muted">
            This website is an enterprise industrial chemical showcase. It does not provide consumer ecommerce features, shopping cart, or direct online credit card checkouts. All commercial purchases are executed through formal commercial agreements, proforma invoices (PI), and verified letters of credit (L/C) between registered legal business entities.
          </p>

          <h4 class="mt-4">3. Technical Data & Certificate Accuracy</h4>
          <p class="text-muted">
            While every effort is made to maintain up-to-date specifications and CAS references, chemical purity parameters and batch characteristics are finalized exclusively through the official Certificate of Analysis (COA) issued alongside each commercial consignment.
          </p>

          <h4 class="mt-4">4. Dangerous Goods & Safety Compliance</h4>
          <p class="text-muted">
            Buyers and handlers of our chemical products must comply with all national and international regulations regarding toxic, volatile, or corrosive substance storage, hazardous transit, and personal protective equipment (PPE). ChemCorp supplies Safety Data Sheets (SDS) in accordance with the Globally Harmonized System (GHS).
          </p>

          <h4 class="mt-4">5. Intellectual Property</h4>
          <p class="text-muted">All company marks, logos, visual layouts, and technical data sheets are property of ChemCorp Industries Ltd. and may not be reproduced without written authorization.</p>

          <h4 class="mt-4">6. Contact & Legal Counsel</h4>
          <p class="text-muted">For commercial contracts, tenders, or legal notices:</p>
          <p class="text-muted">
            <strong>Email:</strong> legal@chemcorp.com / info@chemcorp.com<br>
            <strong>Phone:</strong> +880 1234 567890<br>
            <strong>Corporate Office:</strong> Plot 45, Industrial Estate, Tejgaon, Dhaka-1208, Bangladesh
          </p>
        </div>
      </div>
    </div>
  </section>

  @include('User.Partials.footer')

</body>
</html>
