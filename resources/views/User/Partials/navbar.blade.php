<nav class="navbar navbar-expand-lg sticky-top">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <div class="brand-icon"><i class="bi bi-radioactive"></i></div>
      North Bengal<span>Group</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('home')]) href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('products', 'product-details')]) href="{{ route('products') }}">Product</a></li>
        <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('about')]) href="{{ route('about') }}">About Us</a></li>
        <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('gallery')]) href="{{ route('gallery') }}">Photo Gallery</a></li>
        <li class="nav-item"><a @class(['nav-link', 'active' => request()->routeIs('videos')]) href="{{ route('videos') }}">Video Gallery</a></li>
        <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
          <a href="{{ route('contact') }}" class="btn-nav-quote">
            <i class="bi bi-file-earmark-text"></i> Contact Us
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
