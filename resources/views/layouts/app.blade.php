<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'JJK Gurukulam Trust | Education, Vedanta & Seva')</title>
    <meta name="description" content="@yield('description', 'JJK Gurukulam Trust provides education and care for children and authentic learning in Yoga, Vedanta and Sanskrit in Kerala, India.')">
    <meta name="theme-color" content="#681f27">
    <meta property="og:title" content="@yield('title', 'JJK Gurukulam Trust')">
    <meta property="og:description" content="@yield('description', 'Education, timeless wisdom and compassionate service in Kerala, India.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/gurukulam-hero.png') }}">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/jjk-logo.png') }}?v=2">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/jjk-logo.png') }}?v=2">
    <link rel="apple-touch-icon" href="{{ asset('images/jjk-logo.png') }}?v=2">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@type": "NGO",
      "name": "Janaka Janani Kripa Gurukulam Trust",
      "alternateName": "JJK Gurukulam Trust",
      "url": "{{ url('/') }}",
      "email": "jjkgurukulam@gmail.com",
      "address": {"@type":"PostalAddress","addressLocality":"Thiruvananthapuram","addressRegion":"Kerala","addressCountry":"IN"},
      "areaServed": "India"
    }
    </script>
</head>
<body>
    <a href="#main-content" class="fixed left-4 top-3 z-[100] -translate-y-20 bg-white px-4 py-2 font-bold text-maroon focus:translate-y-0">Skip to content</a>
    <div class="bg-forest py-3 text-center text-2xl font-semibold tracking-wide text-white/80">
        <span class="inline-flex flex-wrap items-center justify-center gap-x-3 gap-y-1">
            <svg class="h-9 w-9 shrink-0" viewBox="0 0 120 120" role="img" aria-label="Om">
                <text x="6" y="93" fill="#ff6a00" font-family="Noto Sans Devanagari, Mangal, Arial Unicode MS, sans-serif" font-size="106" font-weight="900" letter-spacing="-8">ॐ</text>
            </svg>
            <span>Tamaso Ma Jyotir Gamaya</span>
            <span class="text-white/30">|</span>
            <span>Lead us from darkness to light</span>
        </span>
    </div>
    <header class="sticky top-0 z-50 border-b border-saffron/10 bg-parchment/95 backdrop-blur-xl">
        <div class="container-site flex h-20 items-center justify-between">
            <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3" aria-label="JJK Gurukulam home">
                <img src="{{ asset('images/jjk-logo.png') }}" alt="JJK Gurukulam emblem" class="h-16 w-[70px] shrink-0 object-contain" width="70" height="64">
                <span><strong class="block font-serif text-xl leading-none text-maroon">Janaka Janani Kripa Gurukulam</strong><small class="mt-1 block text-[10px] font-bold uppercase tracking-[.2em] text-forest/60">Wisdom · Care · Seva</small></span>
            </a>
            <nav class="hidden items-center gap-4 lg:flex" aria-label="Primary navigation">
                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="nav-link {{ request()->routeIs('gurukulam') ? 'active' : '' }}" href="{{ route('gurukulam') }}">Gurukulam</a>
                <a class="nav-link {{ request()->routeIs('shanti') ? 'active' : '' }}" href="{{ route('shanti') }}">Shanti Nilayam</a>
                <a class="nav-link {{ request()->routeIs('masters') ? 'active' : '' }}" href="{{ route('masters') }}">Masters</a>
                <div class="group relative flex items-center">
                    <button type="button" class="nav-link {{ request()->routeIs('courses') || request()->routeIs('retreat') || request()->routeIs('pilgrimage') || request()->is('retreat-application') ? 'active' : '' }} inline-flex items-center gap-1" aria-haspopup="true">
                        What We Offer
                        <svg class="size-4 transition group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <div class="invisible absolute left-0 top-full z-50 w-64 translate-y-2 rounded-2xl border border-saffron/15 bg-white p-3 opacity-0 shadow-xl shadow-black/10 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 group-focus-within:opacity-100">
                        <a class="block rounded-xl px-4 py-3 text-sm font-bold text-forest transition hover:bg-sandal hover:text-maroon" href="{{ route('courses') }}">Courses</a>
                        <a class="block rounded-xl px-4 py-3 text-sm font-bold text-forest transition hover:bg-sandal hover:text-maroon" href="{{ route('retreat') }}">Retreat</a>
                        <a class="block rounded-xl px-4 py-3 text-sm font-bold text-forest transition hover:bg-sandal hover:text-maroon" href="{{ route('pilgrimage') }}">Pilgrimage</a>
                        <a class="block rounded-xl px-4 py-3 text-sm font-bold text-forest transition hover:bg-sandal hover:text-maroon" href="{{ url('/retreat-application') }}">Application Form</a>
                    </div>
                </div>
                <div class="group relative flex items-center">
                    <button type="button" class="nav-link {{ request()->routeIs('support') || request()->routeIs('contact') || request()->routeIs('gallery') ? 'active' : '' }} inline-flex items-center gap-1" aria-haspopup="true">
                        More
                        <svg class="size-4 transition group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/></svg>
                    </button>
                    <div class="invisible absolute right-0 top-full z-50 w-56 translate-y-2 rounded-2xl border border-saffron/15 bg-white p-3 opacity-0 shadow-xl shadow-black/10 transition group-hover:visible group-hover:translate-y-0 group-hover:opacity-100 group-focus-within:visible group-focus-within:translate-y-0 group-focus-within:opacity-100">
                        <a class="block rounded-xl px-4 py-3 text-sm font-bold text-forest transition hover:bg-sandal hover:text-maroon" href="{{ route('gallery') }}">Gallery</a>
                        <a class="block rounded-xl px-4 py-3 text-sm font-bold text-forest transition hover:bg-sandal hover:text-maroon" href="{{ route('support') }}">Support Us</a>
                        <a class="block rounded-xl px-4 py-3 text-sm font-bold text-forest transition hover:bg-sandal hover:text-maroon" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </nav>
            <button data-menu-button class="grid size-11 place-items-center rounded-full border border-maroon/15 text-maroon lg:hidden" aria-expanded="false" aria-label="Open menu">
                <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-width="2" d="M4 7h16M4 12h16M4 17h16"/></svg>
            </button>
        </div>
        <nav data-mobile-menu class="container-site hidden border-t border-saffron/10 py-5 lg:hidden" aria-label="Mobile navigation">
            <div class="grid gap-4 font-semibold text-forest">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('gurukulam') }}">Gurukulam</a>
                <a href="{{ route('shanti') }}">Shanti Nilayam</a>
                <a href="{{ route('masters') }}">Masters</a>
                <div>
                    <div class="text-xs font-bold uppercase tracking-[.2em] text-saffron">What We Offer</div>
                    <div class="mt-3 grid gap-3 border-l border-saffron/20 pl-4">
                        <a href="{{ route('courses') }}">Courses</a>
                        <a href="{{ route('retreat') }}">Retreat</a>
                        <a href="{{ route('pilgrimage') }}">Pilgrimage</a>
                        <a href="{{ url('/retreat-application') }}">Application Form</a>
                    </div>
                </div>
                <div>
                    <div class="text-xs font-bold uppercase tracking-[.2em] text-saffron">More</div>
                    <div class="mt-3 grid gap-3 border-l border-saffron/20 pl-4">
                        <a href="{{ route('gallery') }}">Gallery</a>
                        <a href="{{ route('support') }}">Support Us</a>
                        <a href="{{ route('contact') }}">Contact Us</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main id="main-content">@yield('content')</main>

    <footer class="bg-[#102d25] text-white/70">
        <div class="container-site grid gap-12 py-16 md:grid-cols-2 lg:grid-cols-4">
            <div class="lg:col-span-2">
                <div class="flex items-center gap-4">
                    <img src="{{ asset('images/jjk-logo.png') }}" alt="JJK Gurukulam emblem" class="h-20 w-[88px] shrink-0 object-contain" width="88" height="80">
                    <div class="font-serif text-3xl font-semibold text-white">JJK Gurukulam Trust</div>
                </div>
                <p class="mt-4 max-w-xl leading-7">A charitable trust nurturing children through education and Indian values, while sharing authentic Yoga, Vedanta and Sanskrit through the Guru–Shishya tradition.</p>
            </div>
            <div><h2 class="font-sans text-xs font-bold uppercase tracking-[.2em] text-gold">Explore</h2><div class="mt-5 grid gap-3 text-sm"><a href="{{ route('gurukulam') }}">Children's Gurukulam</a><a href="{{ route('shanti') }}">Shanti Nilayam</a><a href="{{ route('courses') }}">Courses & Yaatras</a><a href="{{ route('gallery') }}">Gallery</a><a href="{{ url('/retreat-application') }}">Application Form</a><a href="{{ route('masters') }}">Masters</a></div></div>
            <div><h2 class="font-sans text-xs font-bold uppercase tracking-[.2em] text-gold">Connect</h2><div class="mt-5 grid gap-3 text-sm"><a href="mailto:jjkgurukulam@gmail.com">jjkgurukulam@gmail.com</a><span>Kerala, South India</span><a class="font-bold text-white" href="{{ route('support') }}">Make a contribution →</a></div></div>
        </div>
        <div class="border-t border-white/10 py-6"><div class="container-site flex flex-col gap-2 text-xs sm:flex-row sm:justify-between"><span>© {{ date('Y') }} JJK Gurukulam Trust. All rights reserved.</span><span>Lokah Samastah Sukhino Bhavantu</span></div></div>
    </footer>
</body>
</html>
