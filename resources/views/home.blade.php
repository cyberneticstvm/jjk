@extends('layouts.app')
@section('title', 'JJK Gurukulam Trust | Education, Vedanta & Compassionate Service')
@section('description', 'Discover JJK Gurukulam Trust in Kerala: a nurturing home for children and a traditional centre for Yoga, Vedanta, Sanskrit and spiritual retreats.')
@section('content')
<section class="relative min-h-[720px] overflow-hidden bg-forest text-white">
    @foreach([
        ['images/gurukulam-hero.png','A traditional Kerala Gurukulam at sunrise','A Home of Learning. A Life of Values.','We nurture children with education, care and the timeless wisdom of Indian culture.','gurukulam'],
        ['images/shanti-nilayam-hero.png','Shanti Nilayam retreat among Kerala paddy fields','Return to the Peace Within.','Study Yoga, Vedanta and Sanskrit in the quiet, natural surroundings of Shanti Nilayam.','shanti'],
        ['images/vedanta-study.png','Traditional Vedanta class in a Gurukulam','Ancient Wisdom for Modern Life.','Authentic teaching in the lineage of Swami Dayananda Saraswati.','courses']
    ] as $i => $slide)
    <article data-slide class="hero-slide {{ $i === 0 ? 'is-active' : '' }} absolute inset-0">
        <img src="{{ asset($slide[0]) }}" alt="{{ $slide[1] }}" class="h-full w-full object-cover" fetchpriority="{{ $i === 0 ? 'high' : 'auto' }}">
        <div class="absolute inset-0 bg-gradient-to-r from-[#102d25]/95 via-[#102d25]/70 to-transparent"></div>
        <div class="container-site absolute inset-x-0 top-1/2 -translate-y-1/2">
            <div class="max-w-3xl pt-14">
                <div class="mb-5 text-xs font-bold uppercase tracking-[.3em] text-gold">Janaka Janani Kripa Gurukulam Trust</div>
                @if($i === 0)
                    <h1 class="font-serif text-5xl font-semibold leading-[.95] sm:text-7xl lg:text-[5.5rem]">{{ $slide[2] }}</h1>
                @else
                    <h2 class="font-serif text-5xl font-semibold leading-[.95] sm:text-7xl lg:text-[5.5rem]">{{ $slide[2] }}</h2>
                @endif
                <p class="mt-7 max-w-xl text-lg leading-8 text-white/85">{{ $slide[3] }}</p>
                <div class="mt-9 flex flex-wrap gap-3">
                    <a class="btn-primary !bg-saffron hover:!bg-maroon" href="{{ route($slide[4]) }}">Discover more</a>
                    <a class="btn-light" href="{{ route('support') }}">Support our mission</a>
                </div>
            </div>
        </div>
    </article>
    @endforeach
    <div class="container-site absolute inset-x-0 bottom-8 z-20 flex items-center gap-5">
        <button data-slide-prev class="grid size-10 place-items-center rounded-full border border-white/30 hover:bg-white/10" aria-label="Previous slide">←</button>
        <div class="flex gap-2">@for($i=0;$i<3;$i++)<button data-slide-dot class="h-2.5 w-8 rounded-full bg-white/40" aria-label="Show slide {{ $i+1 }}"></button>@endfor</div>
        <button data-slide-next class="grid size-10 place-items-center rounded-full border border-white/30 hover:bg-white/10" aria-label="Next slide">→</button>
    </div>
</section>

<section class="relative overflow-hidden py-24 sm:py-32">
    <div class="mandala-bg absolute -right-40 top-0 size-[650px] rounded-full opacity-70"></div>
    <div class="container-site relative grid items-center gap-16 lg:grid-cols-2">
        <div class="reveal">
            <div class="eyebrow">Who we are</div>
            <h2 class="section-title">Lighting a candle in a child's life.</h2>
            <div class="prose-jjk mt-7"><p>JJK Gurukulam Trust is a charitable and social service organization providing education, care and a nurturing home for boys from underprivileged and difficult family circumstances.</p><p>Since 2006, our Vattiyoorkavu Gurukulam has offered shelter, nutritious vegetarian food, formal schooling and value-based education in a secure, peaceful atmosphere.</p></div>
            <a href="{{ route('gurukulam') }}" class="mt-8 inline-flex font-bold text-maroon">Our story and daily life <span class="ml-2">→</span></a>
        </div>
        <div class="reveal relative">
            <div class="overflow-hidden rounded-[2rem]"><img src="{{ asset('images/gurukulam-hero.png') }}" alt="Children learning with a teacher at the Gurukulam" class="aspect-[4/3] w-full object-cover"></div>
            <div class="absolute -bottom-8 -left-5 rounded-2xl bg-maroon p-6 text-white shadow-xl sm:-left-10"><strong class="block font-serif text-4xl">2006</strong><span class="text-xs uppercase tracking-[.18em] text-white/70">Our journey began</span></div>
        </div>
    </div>
</section>

<section class="bg-sandal/70 py-24">
    <div class="container-site">
        <div class="reveal mx-auto max-w-2xl text-center"><div class="eyebrow justify-center before:hidden">One vision, two sacred spaces</div><h2 class="section-title">Care in action. Wisdom in practice.</h2></div>
        <div class="mt-12 grid gap-7 lg:grid-cols-2">
            <a href="{{ route('gurukulam') }}" class="reveal group relative min-h-[480px] overflow-hidden rounded-[2rem] text-white"><img src="{{ asset('images/gurukulam-hero.png') }}" alt="" class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"><div class="absolute inset-0 bg-gradient-to-t from-[#102d25] via-transparent"></div><div class="absolute inset-x-0 bottom-0 p-8 sm:p-10"><span class="text-xs font-bold uppercase tracking-[.2em] text-gold">Thiruvananthapuram</span><h3 class="mt-2 text-4xl font-semibold">JJK Children's Gurukulam</h3><p class="mt-3 max-w-md text-white/75">A loving home where education, discipline and character grow together.</p></div></a>
            <a href="{{ route('shanti') }}" class="reveal group relative min-h-[480px] overflow-hidden rounded-[2rem] text-white"><img src="{{ asset('images/shanti-nilayam-hero.png') }}" alt="" class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"><div class="absolute inset-0 bg-gradient-to-t from-maroon via-transparent"></div><div class="absolute inset-x-0 bottom-0 p-8 sm:p-10"><span class="text-xs font-bold uppercase tracking-[.2em] text-gold">Thrissur</span><h3 class="mt-2 text-4xl font-semibold">Shanti Nilayam</h3><p class="mt-3 max-w-md text-white/75">An abode of peace for traditional Yoga, Vedanta, Sanskrit and self-discovery.</p></div></a>
        </div>
    </div>
</section>

<section class="py-24 sm:py-32">
    <div class="container-site">
        <div class="reveal max-w-2xl"><div class="eyebrow">A holistic path</div><h2 class="section-title">Rooted in tradition, relevant to life.</h2></div>
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach([['ॐ','Yoga & Meditation','Balance body, mind and emotions through authentic practice.'],['गी','Vedanta & Gita','Discover clarity through the wisdom of the Upanishads and Bhagavad Gita.'],['अ','Sanskrit','Learn the refined language of India’s ancient scriptures.'],['से','Seva','Transform compassion into selfless service for children and communities.']] as $item)
            <div class="card reveal"><div class="grid size-14 place-items-center rounded-full bg-sandal font-serif text-2xl font-bold text-maroon">{{ $item[0] }}</div><h3 class="mt-6 text-2xl font-semibold text-forest">{{ $item[1] }}</h3><p class="mt-3 leading-7 text-ink/65">{{ $item[2] }}</p></div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-maroon py-20 text-white">
    <div class="container-site reveal flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
        <div><div class="text-xs font-bold uppercase tracking-[.25em] text-gold">Be part of the light</div><h2 class="mt-3 font-serif text-4xl font-semibold sm:text-5xl">A day of care can shape a lifetime.</h2><p class="mt-4 max-w-2xl text-white/70">Sponsor meals, education, clothing or a child's complete care. Every contribution is acknowledged, accounted for and audited.</p></div>
        <a href="{{ route('support') }}" class="btn-light shrink-0">See ways to contribute</a>
    </div>
</section>
@endsection
