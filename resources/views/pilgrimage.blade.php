@extends('layouts.app')
@section('title', 'Pilgrimage | Sacred Yaatras with JJK Gurukulam')
@section('description', 'Spiritual pilgrimages and Yaatras with JJK Gurukulam to sacred places across India including the Himalayas, North India and South India.')
@section('content')
@include('partials.page-hero',[
    'eyebrow'=>'What We Offer',
    'title'=>'Pilgrimage and Yaatra.',
    'intro'=>'Sacred journeys to holy places that support devotion, reflection, discipline and inner growth.',
    'image'=>'images/inner-page-header.jpeg',
    'alt'=>'Kerala paddy fields and coconut palms at sunset'
])

<section class="bg-forest py-24 text-white">
    <div class="container-site">
        <div class="reveal max-w-3xl">
            <div class="text-xs font-bold uppercase tracking-[.2em] text-gold">Pilgrimages (Yaatra)</div>
            <h2 class="mt-4 font-serif text-4xl font-semibold sm:text-5xl">A sacred journey in the Indian spiritual tradition.</h2>
            <div class="mt-7 space-y-5 leading-8 text-white/75">
                <p>Going on a Yaatra or pilgrimage is considered a sacred journey in the Indian spiritual tradition. A pilgrimage is not merely travelling from one place to another; it is an opportunity to encounter challenges, step out of one’s comfort zone, and learn to adapt the mind to different situations with patience and devotion.</p>
                <p>The ancient sages say that it is a great blessing to visit holy places and sacred temples. It is believed that the sincere effort involved in undertaking a pilgrimage helps purify the mind and heart, guiding a person toward moksha (liberation) and freedom from samsara — the cycle of birth and death.</p>
                <p>We regularly organize spiritual pilgrimages to many important holy places across India.</p>
            </div>
        </div>

        <div class="mt-12 grid gap-6 md:grid-cols-3">
            @foreach([
                ['Himalayan Pilgrimage','Our Himalayan Yaatra includes visits to sacred places such as:','Delhi, Haridwar, Rishikesh, Uttarkashi, Gangotri, Yamunotri, Kedarnath, Badrinath','These holy destinations in the Himalayas have inspired sages, seekers, and pilgrims for thousands of years and continue to be powerful centres of spiritual energy and contemplation.'],
                ['North India Pilgrimage','The North India pilgrimage includes:','Mathura, Vrindavan, Agra, Prayagraj (Allahabad), Varanasi, Bodh Gaya, Gaya, Kolkata','These places are deeply connected with the lives of great saints, spiritual traditions, and the cultural heritage of India.'],
                ['South India Pilgrimage','Our South India pilgrimage includes visits to:','Kanyakumari, Suchindram, Chidambaram, Palani, Madurai, Rameshwaram, Tiruvannamalai, Coimbatore','These sacred temples and spiritual centres are renowned for their rich traditions, ancient wisdom, and powerful devotional atmosphere.'],
            ] as $trip)
                <article class="reveal rounded-3xl bg-white/10 p-8 backdrop-blur">
                    <h3 class="text-3xl font-semibold">{{ $trip[0] }}</h3>
                    <p class="mt-4 leading-7 text-white/65">{{ $trip[1] }}</p>
                    <p class="mt-4 font-semibold leading-8 text-gold">{{ $trip[2] }}</p>
                    <p class="mt-4 leading-7 text-white/65">{{ $trip[3] }}</p>
                </article>
            @endforeach
        </div>

        <p class="reveal mt-10 max-w-4xl leading-8 text-white/75">Through these pilgrimages, participants not only visit sacred places but also gain an opportunity for inner reflection, spiritual growth, and deeper connection with the timeless traditions of India.</p>
    </div>
</section>

<section class="bg-maroon py-20 text-white">
    <div class="container-site grid gap-10 lg:grid-cols-[1.2fr_.8fr] lg:items-center">
        <div class="reveal">
            <div class="text-xs font-bold uppercase tracking-[.2em] text-gold">Join a Yaatra</div>
            <h2 class="mt-3 text-4xl font-semibold">Begin the journey with devotion and preparation.</h2>
            <p class="mt-5 max-w-3xl leading-8 text-white/75">For pilgrimage dates, application details, travel guidance or other assistance, please contact JJK Gurukulam.</p>
        </div>
        <div class="reveal flex flex-wrap gap-3 lg:justify-end">
            <a href="{{ url('/retreat-application') }}" class="btn-light">Apply for pilgrimage</a>
            <a href="{{ route('contact') }}" class="btn-light">Contact us</a>
        </div>
    </div>
</section>
@endsection
