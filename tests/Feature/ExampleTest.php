<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_the_homepage_displays_the_chemical_website(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('ChemCorp')
            ->assertSee(route('about'), false)
            ->assertSee(route('privacy'), false)
            ->assertSee(route('uttara-chemicals'), false)
            ->assertSee('Divisions & Sectors', false)
            ->assertSee('Metal Industries')
            ->assertSee('Our Sister Concerns')
            ->assertSee('LOO Industries')
            ->assertSee('Bin Sami Corporation')
            ->assertSee('Uttara Chemicals')
            ->assertSee('DOW International')
            ->assertSee('AFIA Metal Industries')
            ->assertSee('AFIA Transport');

        foreach ([
            'codex-clipboard-52001514-6691-4621-8d1f-25f91502392f.png',
            'codex-clipboard-97a1ceaa-ed3a-4a3f-9b95-3c975b00c258.png',
            'uttara-chemecials-clear.png',
            'dow-international-clear.png',
            'afia-metal-industries-clear.png',
            'afia-transport-clear.png',
        ] as $image) {
            $response->assertSee(asset('Images/'.$image), false);
        }

        $response->assertSee(asset('Images/Chemical Supply.png'), false)
            ->assertSee(asset('Images/Metal Industries.png'), false);
    }

    public function test_every_site_page_is_available(): void
    {
        foreach ([
            '/about',
            '/contact',
            '/gallery',
            '/privacy',
            '/product-details',
            '/products',
            '/quality',
            '/terms',
            '/videos',
            '/chairman',
            '/managingdirector',
        ] as $path) {
            $this->get($path)
                ->assertOk()
                ->assertSee('navbar-toggler', false)
                ->assertSee('pre-footer-strip', false);
        }
    }

    public function test_about_page_displays_the_group_profile_and_leadership(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('About North Bengal Group')
            ->assertSee('multi-sector business organization based in Rangpur')
            ->assertSee('chemicals, metal industries, transportation, and international trading')
            ->assertSee('Our Vision')
            ->assertSee('To become a trusted and respected business group through excellence, innovation, and sustainable development.')
            ->assertSee('Our Mission')
            ->assertSee('To deliver quality, build lasting partnerships, and create meaningful value through commitment and integrity.')
            ->assertSee('Mrs Chairman')
            ->assertSee('Abdus Sami')
            ->assertSee(asset('Images/About/north-bengal-group.png'), false)
            ->assertSee(asset('Images/About/chairman-portrait.png'), false)
            ->assertSee(asset('Images/About/abdus-sami.png'), false)
            ->assertSee(route('chairman'), false)
            ->assertSee(route('managingdirector'), false)
            ->assertDontSee('data-bs-toggle="modal"')
            ->assertDontSee('Food Grade Chemicals');
    }

    public function test_leadership_pages_show_the_matching_profile(): void
    {
        foreach ([
            ['/chairman', 'Mrs Chairman', 'Images/About/chairman-portrait.png'],
            ['/managingdirector', 'Abdus Sami', 'Images/About/abdus-sami.png'],
        ] as [$path, $name, $image]) {
            $this->get($path)
                ->assertOk()
                ->assertSee($name)
                ->assertSee(asset($image), false)
                ->assertSee(route('about'), false)
                ->assertSee('To become a trusted and respected business group through excellence, innovation, and sustainable development.')
                ->assertSee('To deliver quality, build lasting partnerships, and create meaningful value through commitment and integrity.');
        }
    }

    public function test_legacy_html_links_redirect_to_the_laravel_routes(): void
    {
        $this->get('/index.html')->assertRedirect('/');
        $this->get('/about.html')->assertRedirect('/about');
    }

    public function test_default_page_route_renders_user_views_without_explicit_routes(): void
    {
        $this->get('/chemical-supply')
            ->assertOk()
            ->assertSee('Chemical Supply');

        $this->get('/not-a-user-view')->assertNotFound();
    }
}
