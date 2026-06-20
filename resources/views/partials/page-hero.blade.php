<section class="relative isolate overflow-hidden bg-forest py-24 text-white sm:py-32">
    <img src="{{ asset($image ?? 'images/vedanta-study.png') }}" alt="{{ $alt ?? '' }}" class="absolute inset-0 -z-20 h-full w-full {{ $imageClass ?? 'object-cover' }} opacity-60">
    <div class="absolute inset-0 -z-10 bg-gradient-to-r from-[#102d25]/80 via-[#102d25]/65 to-maroon/25"></div>
    <div class="container-site">
        <div class="max-w-3xl">
            <div class="mb-5 text-xs font-bold uppercase tracking-[.25em] text-gold">{{ $eyebrow }}</div>
            <h1 class="font-serif text-5xl font-semibold leading-[.98] sm:text-5xl">
                @if (isset($titleHtml))
                    {!! $titleHtml !!}
                @else
                    {{ $title }}
                @endif
            </h1>
            <p class="mt-6 max-w-2xl text-lg leading-8 text-white/80">
                @if (isset($introHtml))
                    {!! $introHtml !!}
                @else
                    {{ $intro }}
                @endif
            </p>
        </div>
    </div>
</section>
