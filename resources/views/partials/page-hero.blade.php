<section class="relative isolate overflow-hidden bg-forest py-24 text-white sm:py-32">
    <img src="{{ asset($image ?? 'images/vedanta-study.png') }}" alt="{{ $alt ?? '' }}" class="absolute inset-0 -z-20 h-full w-full object-cover opacity-45">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-[#102d25] via-[#102d25]/85 to-maroon/30"></div>
    <div class="container-site">
        <div class="max-w-3xl">
            <div class="mb-5 text-xs font-bold uppercase tracking-[.25em] text-gold">{{ $eyebrow }}</div>
            <h1 class="font-serif text-5xl font-semibold leading-[.98] sm:text-7xl">{{ $title }}</h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-white/80">{{ $intro }}</p>
        </div>
    </div>
</section>
