@php
$catalogGroups = [
[
'title' => 'Food Grade Chemicals',
'icon' => 'bi-cup-hot',
'products' => [
'Green Mango Flavour',
'Orange Flavour',
'Rose Flavour',
'Kewra Flavour',
'Pine Apple Flavour',
'Milk Flavour',
'Baking Powder',
'Liquid Glucose',
],
],
[
'title' => 'Pharmaceutical Chemicals',
'icon' => 'bi-capsule',
'products' => [
'Sodium Acid Pyrophosphate',
'CMC',
'Xanthan Gum',
'Sodium Benzoate',
'Aspartame',
'Cocoa Powder',
'Saccharin',
'Sorbitol',
'Citric Acid',
'Glycerin',
'Sodium Be-Carbonate',
'Yeast',
'Potassium Sorbate',
'Mono Sodium Glutamate',
'Soya Lecithin',
'Macogel',
'Lithi Emulsion',
],
],
[
'title' => 'Toiletries Chemicals',
'icon' => 'bi-droplet',
'products' => [
'LABSA (United Group)',
'LABSA (Ariston)',
'Soda Ash Light',
'Sodium Sulphate',
'Sodium Chloride (Coke Salt)',
'Sodium Chloride (Industrial)',
'Sodium Tripolyphosphate',
'Sodium CMC',
'SLS Powder',
'Sodium Meta Silicate',
'EDTA',
'TSP',
'Urea (Cosmetic Grade)',
'Calcium Chloride',
'Caustic Soda',
'TEA',
'SLES',
'AOS',
'Ethanol',
'Methanol',
'Sorbitol',
'Glycerin',
'Sodium Bi-Carbonate',
'PG',
'Citric Acid Anhydrous',
'Citric Acid (Mono)',
'Iso Propyl Alcohol',
'Aspartame',
'Apricot Scrub Powder',
'Stearic Acid',
'Myristic Acid',
'Lauric Acid',
'Potassium Chloride',
'Potassium Sorbitol',
'Acid Blue Colour',
'Quinoline Yellow Colour',
'Sodium Silicate',
'Phenol',
'Ammonia',
'Borax',
'Potassium Carbonate',
'Talc',
'Zinc Oxide',
'Titanium Dioxide',
'PEG',
'Butyl Glycol',
'Cetyl Alcohol',
'CDEA',
'CAPB',
'Shampoo Conditioner',
'Pearling Agent',
'EGDS',
'Sodium Benzoate',
'Methyl Paraben',
'Methyl Paraben Sodium',
],
],
[
'title' => 'Additional Toiletries Chemicals',
'icon' => 'bi-flower1',
'products' => [
'Carbomer',
'Nipacid',
'DMDM Hydantoin',
'Lemon Fragrance',
'Rose Fragrance',
'Jasmine Fragrance',
'Justy Fresh',
'Pine Fragrance',
'Savo Fragrance',
'Sodium Saccharin',
'Sodium Fluoride',
'Triclosan',
'Coconut Oil',
'Kaoline White Powder',
'Petroleum Jelly',
'Liquid Paraffin-100',
'Liquid Paraffin-400',
'Paraffin Wax',
'Salicylic Acid',
'Methyl Salicylate',
'Silica Gel',
'IPA',
'Sodium Nitrate',
'Potassium Nitrate',
'Copper Sulphate',
'Ammonium Chloride',
'Liquid Glucose',
'Castor Oil',
'Almond Oil',
'Olive Oil',
'Mustard Oil',
'Turmeric Extract',
'Aloe Vera Juice',
'Licorice Extract',
'Henna Extract',
'Shikakai Extract',
'Kalokeshi Extract',
'Clove Extract',
'Cinnamon Extract',
'Tulsi Extract',
'Neem Extract',
'IPM (Iso Propyl Myristate)',
'Vitamin E Powder',
'Vitamin E Oil',
'Mono Sodium Glutamate',
'Sodium Mono Fluoro Phosphate',
'Flavour Mint',
'Colour Fat Red',
'Colour Fat Yellow',
'Colour Fat Blue',
'Potassium Hydroxide',
'Potassium Bi-Carbonate',
'Silicon Oil',
'Cocoa Butter',
'Magnesium Carbonate',
'Magnesium Silicate',
],
],
];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <title>Chemical Supply | ChemCorp</title>

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
            <h1>Chemical Supply</h1>
            <div class="breadcrumb-custom">
                <a href="{{ route('home') }}">Home</a> / <span>Chemical-Supply</span>
            </div>
            <p class="mt-3 text-light opacity-75 max-w-600 mx-auto small">
                A broad portfolio of ingredients and chemical materials for manufacturing, processing, food, pharmaceutical and personal-care applications.
            </p>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center g-4 mb-5">
                <div class="col-lg-7">
                    <span class="badge-tag">Supply Overview</span>
                    <h2 class="section-title">Supporting Industry with a Broad Chemical Portfolio</h2>
                    <p class="text-muted mt-3 mb-0">
                        We supply a comprehensive range of industrial chemicals to support manufacturing, processing, and infrastructure industries across the region. Our portfolio includes raw materials, specialty chemicals, and formulated products sourced from reliable producers and handled under strict quality and safety standards.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="feature-box h-100">
                        <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                        <h4>Quality and Safe Handling</h4>
                        <p class="text-muted mb-0">
                            Supplier selection, product checks and careful handling support dependable supply for business customers.
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center mb-4">
                <span class="badge-tag">Product Range</span>
                <h2 class="section-title center">Chemical Categories</h2>
                <p class="section-subtitle mx-auto mb-0">
                    Browse the product groups and ingredients included in the referenced supply portfolio.
                </p>
            </div>

            <div class="row g-4">
                @foreach ($catalogGroups as $group)
                <div class="col-12">
                    <section class="feature-box">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="feature-icon mb-0"><i class="bi {{ $group['icon'] }}"></i></div>
                            <div>
                                <h3 class="h4 mb-1">{{ $group['title'] }}</h3>
                                <span class="text-muted small">{{ count($group['products']) }} listed products</span>
                            </div>
                        </div>
                        <ul class="list-unstyled d-flex flex-wrap gap-2 mb-0">
                            @foreach ($group['products'] as $product)
                            <li><span class="badge text-bg-light border text-dark fw-normal text-wrap py-2 px-3">{{ $product }}</span></li>
                            @endforeach
                        </ul>
                    </section>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5">
                    <span class="badge-tag">Get in Touch</span>
                    <h2 class="section-title">Supplier Contact</h2>
                    <p class="text-muted mt-3">
                        Contact North Bengal Group for enquiries about the listed chemical supply range.
                    </p>
                    <a href="mailto:info@northbengalgroup.com?subject=Chemical%20supply%20enquiry" class="btn-premium mt-2">
                        <i class="bi bi-envelope-fill"></i> Email the Supplier
                    </a>
                </div>
                <div class="col-lg-7">
                    <div class="feature-box h-100">
                        <h3 class="h5 mb-3">North Bengal Group</h3>
                        <div class="d-flex gap-3 mb-3">
                            <i class="bi bi-geo-alt-fill text-info"></i>
                            <address class="mb-0">
                                House # 08, Road 08, Block # A<br>
                                Nobodoy Housing, Mohammadpur<br>
                                Dhaka-1207, Bangladesh
                            </address>
                        </div>
                        <div class="d-flex gap-3 mb-3">
                            <i class="bi bi-telephone-fill text-info"></i>
                            <a href="tel:+8802410023608">+88 02 410 023 608</a>
                        </div>
                        <div class="d-flex gap-3 mb-3">
                            <i class="bi bi-envelope-fill text-info"></i>
                            <a href="mailto:info@northbengalgroup.com">info@northbengalgroup.com</a>
                        </div>
                        <div class="d-flex gap-3">
                            <i class="bi bi-globe2 text-info"></i>
                            <a href="https://northbengalgroup.com/" target="_blank" rel="noopener noreferrer">northbengalgroup.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('User.Partials.footer')

</body>

</html>