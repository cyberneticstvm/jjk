@extends('layouts.app')
@section('title', 'JJK Gurukulam Trust | Education, Vedanta & Compassionate Service')
@section('description', 'Discover JJK Gurukulam Trust in Kerala: a nurturing home for children and a traditional centre for Yoga, Vedanta, Sanskrit and spiritual retreats.')
@section('content')
@php
    $heroSlides = [
        ['images/slider/Slider_1.jpg.jpeg', 'JJK Gurukulam campus surrounded by greenery', 'A Home of Learning. A Life of Values.', 'We nurture children with education, care and the timeless wisdom of Indian culture.', 'gurukulam'],
        ['images/slider/Slider_2.jpg.jpeg', 'Shanti Nilayam retreat home among mature trees', 'Return to the Peace Within.', 'Study Yoga, Vedanta and Sanskrit in the quiet, natural surroundings of Shanti Nilayam.', 'shanti'],
        ['images/slider/Slider_3.jpg.jpeg', 'Traditional spiritual discourse for families and children', 'Ancient Wisdom for Modern Life.', 'Authentic teaching in the lineage of Swami Dayananda Saraswati.', 'courses'],
        ['images/slider/Slider_4.jpg.jpeg', 'Spacious traditional learning hall at Shanti Nilayam', 'A Space for Study and Reflection.', 'Step away from distraction and discover an atmosphere created for sincere learning, contemplation and inner growth.', 'shanti'],
        ['images/slider/Slider_5.jpg.jpeg', 'Clean and welcoming dining hall at the retreat home', 'Simple Living. Wholesome Care.', 'Experience disciplined Ashrama living with nourishing vegetarian meals, thoughtful routines and compassionate hospitality.', null],
    ];
@endphp
<section class="relative min-h-[720px] overflow-hidden bg-forest text-white">
    @foreach($heroSlides as $i => $slide)
    <article data-slide class="hero-slide {{ $i === 0 ? 'is-active' : '' }} absolute inset-0">
        <img src="{{ asset($slide[0]) }}" alt="{{ $slide[1] }}" class="h-full w-full object-cover" fetchpriority="{{ $i === 0 ? 'high' : 'auto' }}">
        <div class="absolute inset-0 bg-gradient-to-r from-[#102d25]/80 via-[#102d25]/60 to-transparent"></div>
        <div class="container-site absolute inset-x-0 top-1/2 -translate-y-1/2">
            <div class="max-w-3xl pt-14">
                <div class="mb-5 text-xs font-bold uppercase tracking-[.3em] text-gold">Janaka Janani Kripa Gurukulam Trust</div>
                @if($i === 0)
                    <h1 class="max-w-4xl font-serif text-3xl font-semibold leading-[1.08] sm:text-4xl lg:text-5xl">A Home of Learning.<br>A Life of Values.</h1>
                @elseif($slide[2] === 'Ancient Wisdom for Modern Life.')
                    <h2 class="max-w-4xl font-serif text-3xl font-semibold leading-[1.08] sm:text-4xl lg:text-5xl">Ancient Wisdom<br>for Modern Life.</h2>
                @elseif($slide[2] === 'Simple Living. Wholesome Care.')
                    <h2 class="max-w-4xl font-serif text-3xl font-semibold leading-[1.08] sm:text-4xl lg:text-5xl">Simple Living.<br>Wholesome Care.</h2>
                @elseif($slide[2] === 'A Space for Study and Reflection.')
                    <h2 class="max-w-4xl font-serif text-3xl font-semibold leading-[1.08] sm:text-4xl lg:text-5xl">A Space for Study<br>and Reflection.</h2>
                @else
                    <h2 class="max-w-4xl font-serif text-3xl font-semibold leading-[1.08] sm:text-4xl lg:text-5xl">{{ $slide[2] }}</h2>
                @endif
                <p class="mt-7 max-w-xl text-lg leading-8 text-white/85">{{ $slide[3] }}</p>
                <div class="mt-9 flex flex-wrap gap-3">
                    <a class="btn-primary !bg-saffron hover:!bg-maroon" href="{{ $slide[4] ? route($slide[4]) : url('/retreat-application') }}">Discover more</a>
                    <a class="btn-light" href="{{ route('support') }}">Support our mission</a>
                </div>
            </div>
        </div>
    </article>
    @endforeach
    <div class="container-site absolute inset-x-0 bottom-8 z-20 flex items-center gap-5">
        <button data-slide-prev class="grid size-10 place-items-center rounded-full border border-white/30 hover:bg-white/10" aria-label="Previous slide">←</button>
        <div class="flex gap-2">@foreach($heroSlides as $i => $slide)<button data-slide-dot class="h-2.5 w-8 rounded-full bg-white/40" aria-label="Show slide {{ $i+1 }}"></button>@endforeach</div>
        <button data-slide-next class="grid size-10 place-items-center rounded-full border border-white/30 hover:bg-white/10" aria-label="Next slide">→</button>
    </div>
</section>

<section class="relative overflow-hidden py-24 sm:py-32">
    <div class="mandala-bg absolute -right-40 top-0 size-[650px] rounded-full opacity-70"></div>
    <div class="container-site relative grid items-center gap-16 lg:grid-cols-2">
        <div class="reveal">
            <div class="eyebrow">Who we are</div>
            <h2 class="section-title">Lighting a candle <br>in a child's life.</h2>
            <div class="prose-jjk mt-7"><p>Welcome to Janaka Janani Kripa Gurukulam Trust (JJK Gurukulam Trust), a charitable and social service organization dedicated to providing education, care, and a nurturing home for children from underprivileged and dysfunctional families.</p></div>
            <div class="prose-jjk mt-7"><p>We admit children from economically challenged backgrounds where often one or both parents are absent, or where difficult family circumstances prevent proper care and education for the child. Along with shelter, clothing, books, and nutritious vegetarian food, we provide value-based education in a safe and supportive environment. The children also attend nearby public schools for their formal education.</p></div>
            <a href="{{ route('gurukulam') }}" class="mt-8 inline-flex font-bold text-maroon">Our story and daily life <span class="ml-2">→</span></a>
        </div>
        <div class="reveal relative">
            <div class="overflow-hidden rounded-[2rem]"><img src="{{ asset('images/who-we-are.jpeg') }}" alt="Children learning with a teacher at the Gurukulam" class="aspect-[4/3] w-full object-cover"></div>
            <div class="absolute -bottom-8 -left-5 rounded-2xl bg-maroon p-6 text-white shadow-xl sm:-left-10"><strong class="block font-serif text-4xl">2006</strong><span class="text-xs uppercase tracking-[.18em] text-white/70">Our journey began</span></div>
        </div>
        <div class="reveal">
            <div class="prose-jjk mt-7"><p>Our all-boys Gurukulam is located at Vattiyoorkavu in Thiruvananthapuram, Kerala, South India, and was established in 2006. Since then, many children have completed their stay at the Gurukulam and have greatly benefited from the guidance, care, and education provided here.</p></div>
            <div class="prose-jjk mt-7"><p>At JJK Gurukulam, we strive to create a secure, peaceful, and congenial atmosphere where children can grow into confident, responsible, and capable individuals who are ready to participate successfully in society.</p></div>
        </div>
        <div class="reveal">
            <div class="prose-jjk mt-7"><p>Along with formal education, the Gurukulam introduces children to the timeless values of Indian culture and spirituality, including dharma (righteous living), dhyana (meditation), and yoga (self-discipline and inner harmony).</p></div>
            <div class="">Our guiding inspiration comes from the Upanishadic prayer:</div>
            <div class="mt-8 inline-flex font-bold text-maroon">Tamaso Ma Jyotir Gamaya “Lead us from darkness to light”.</div>
            <div class="prose-jjk mt-7"><p>Rather than complaining about the darkness in life, we believe in lighting a candle.</p></div>
            <div class="prose-jjk mt-7"><p>Come, join us in bringing light, hope, and opportunity into the lives of many more children.</p></div>
        </div>
    </div>
</section>

<section class="bg-sandal/70 py-24">
    <div class="container-site">
        <div class="reveal mx-auto max-w-2xl text-center"><div class="eyebrow justify-center before:hidden">One vision, two sacred spaces</div><h2 class="section-title">Care in action.<br> Wisdom in practice.</h2></div>
        <div class="mt-12 grid gap-7 lg:grid-cols-2">
            <a href="{{ route('gurukulam') }}" class="reveal group relative min-h-[480px] overflow-hidden rounded-[2rem] text-white"><img src="{{ asset('images/location1.jpeg') }}" alt="" class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"><div class="absolute inset-0 bg-gradient-to-t from-[#102d25] via-transparent"></div><div class="absolute inset-x-0 bottom-0 p-8 sm:p-10"><span class="text-xs font-bold uppercase tracking-[.2em] text-gold">Thiruvananthapuram</span><h3 class="mt-2 text-4xl font-semibold">JJK Children's Gurukulam</h3><p class="mt-3 max-w-md text-white/75">A loving home where education, discipline and character grow together.</p></div></a>
            <a href="{{ route('shanti') }}" class="reveal group relative min-h-[480px] overflow-hidden rounded-[2rem] text-white"><img src="{{ asset('images/location2.jpeg') }}" alt="" class="absolute inset-0 h-full w-full object-cover transition duration-700 group-hover:scale-105"><div class="absolute inset-0 bg-gradient-to-t from-maroon via-transparent"></div><div class="absolute inset-x-0 bottom-0 p-8 sm:p-10"><span class="text-xs font-bold uppercase tracking-[.2em] text-gold">Thrissur</span><h3 class="mt-2 text-4xl font-semibold">Shanti Nilayam</h3><p class="mt-3 max-w-md text-white/75">An abode of peace for traditional Yoga, Vedanta, Sanskrit and self-discovery.</p></div></a>
        </div>
    </div>
</section>

<section class="py-24 sm:py-32">
    <div class="container-site">
        <div class="reveal max-w-2xl"><div class="eyebrow">A holistic path</div><h2 class="section-title">Rooted in tradition, relevant to life.</h2></div>
        <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
            @foreach([['om','Yoga & Meditation','Balance body, mind and emotions through authentic practice.'],['गी','Vedanta & Gita','Discover clarity through the wisdom of the Upanishads and Bhagavad Gita.'],['अ','Sanskrit','Learn the refined language of India’s ancient scriptures.'],['से','Seva','Transform compassion into selfless service for children and communities.']] as $item)
            <div class="card reveal">
                <div class="grid size-14 place-items-center rounded-full bg-sandal font-serif text-2xl font-bold text-maroon">
                    @if($item[0] === 'om')
                        <svg class="size-10" viewBox="0 0 120 120" role="img" aria-label="Om">
                            <text x="6" y="93" fill="currentColor" font-family="Noto Sans Devanagari, Mangal, Arial Unicode MS, sans-serif" font-size="106" font-weight="900" letter-spacing="-8">ॐ</text>
                        </svg>
                    @else
                        {{ $item[0] }}
                    @endif
                </div>
                <h3 class="mt-6 text-2xl font-semibold text-forest">{{ $item[1] }}</h3>
                <p class="mt-3 leading-7 text-ink/65">{{ $item[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-maroon py-20 text-white">
    <div class="container-site reveal flex flex-col items-start justify-between gap-8 lg:flex-row lg:items-center">
        <div><div class="text-xs font-bold uppercase tracking-[.25em] text-gold">Be part of the light</div><h2 class="mt-3 font-serif text-4xl font-semibold sm:text-5xl">A day of care can shape<br>a lifetime.</h2><p class="mt-4 max-w-2xl text-white/70">Sponsor meals, education, clothing or a child's complete care. Every contribution is acknowledged, accounted for and audited.</p></div>
        <a href="{{ route('support') }}" class="btn-light shrink-0">See ways to contribute</a>
    </div>
</section>
@endsection
