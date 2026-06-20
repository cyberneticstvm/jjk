@extends('layouts.app')
@section('title', 'Retreat | Shanti Nilayam Retreat Home')
@section('description', 'Retreats at Shanti Nilayam offer Yoga, Vedanta, meditation, Satsang, Karma Yoga and disciplined Ashrama living in peaceful Kerala surroundings.')
@section('content')
@include('partials.page-hero',[
    'eyebrow'=>'What We Offer',
    'title'=>'Retreat at Shanti Nilayam.',
    'introHtml'=>'A disciplined and peaceful Ashrama rhythm for Yoga, Vedanta, meditation,<br>service and inner clarity.',
    'image'=>'images/slider/Slider_1.jpg.jpeg',
    'alt'=>'Kerala paddy fields and coconut palms at sunset'
])

<section class="bg-sandal/60 py-24">
    <div class="container-site grid gap-14 lg:grid-cols-[1.05fr_.95fr]">
        <div class="reveal">
            <div class="eyebrow">Retreat rhythm</div>
            <h2 class="section-title">An abode of Peace.</h2>
            <div class="prose-jjk mt-7">
                <p>Our courses are generally ten days long. A typical day at Shanti Nilayam begins with morning meditation and prayers at 6:00 am, followed by a short tea break and a Yoga session. Afterwards, participants enjoy a wholesome vegetarian meal. Later in the day, we offer a lecture on Vedanta philosophy along with group service activities that help maintain the cleanliness and serenity of the retreat environment.</p>
                <p>In the evening, dinner is served at 6:00 pm, followed by meditation and Satsang at 7:30 pm. The day concludes with lights out at 9:30 pm.</p>
                <p>This daily routine is designed to cultivate discipline, mindfulness, and inner harmony among participants. The name “Shanti Nilayam” means “An abode of Peace”. Our aim is to provide an opportunity for individuals to discover the peace within themselves and carry that peace into their everyday lives.</p>
                <p>In today’s technology-driven world, many people feel disconnected from themselves and are increasingly affected by stress and lifestyle-related illnesses. While doctors and medicines can offer support, true well-being also requires inner transformation and self-awareness. Shanti Nilayam offers a space where one can reconnect with one’s true nature and experience a deeper sense of peace and reality.</p>
            </div>
            <div class="mt-8 flex flex-wrap gap-3">
                <a class="btn-primary" href="{{ url('/retreat-application') }}">Apply for a retreat</a>
                <a class="inline-flex items-center justify-center rounded-full border border-maroon/20 px-6 py-3.5 text-sm font-bold text-maroon transition hover:border-maroon hover:bg-maroon hover:text-white" href="{{ route('contact') }}">Contact us</a>
            </div>
        </div>

        <div class="card reveal bg-forest !p-8 text-white">
            <div class="text-xs font-bold uppercase tracking-[.2em] text-gold">Community service</div>
            <h3 class="mt-4 text-3xl font-semibold">Peace expressed through care.</h3>
            <div class="mt-5 space-y-4 leading-8 text-white/75">
                <p>We are surrounded by underprivileged villages, and we are committed to helping improve the quality of life for the people in these communities. We provide medical assistance to those in need and conduct awareness programs on health care and environmental responsibility.</p>
                <p>We also regularly organize value-based cultural classes for children through stories and games, helping to nurture both character and creativity. In addition, we support underprivileged children in their education. At present, we are assisting many children from our local community.</p>
                <p>Our future plans include women’s empowerment programs aimed at developing practical and sustainable skills. If you have the time and a desire to make a difference, we warmly invite you to join us in this mission.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24">
    <div class="container-site grid gap-14 lg:grid-cols-[.85fr_1.15fr]">
        <div class="reveal">
            <div class="eyebrow">Retreat daily schedule</div>
            <div class="mt-8 flex flex-wrap gap-3">
                <a class="btn-primary" href="{{ url('/retreat-application') }}">Apply for a retreat</a>
                <a class="inline-flex items-center justify-center rounded-full border border-maroon/20 px-6 py-3.5 text-sm font-bold text-maroon transition hover:border-maroon hover:bg-maroon hover:text-white" href="{{ route('contact') }}">Contact us</a>
            </div>
        </div>

        <div class="reveal grid gap-3 sm:grid-cols-2">
            @foreach([
                ['5:30 am','Wake-up'],
                ['1:30 pm','Herbal Tea'],
                ['6:00 am','Japa Meditation'],
                ['2:00 pm','Free time'],
                ['6:30 am','Prayer'],
                ['3:15 pm','Lecture'],
                ['7:30 am','Herbal Tea'],
                ['4.30 pm','Walk in nature'],
                ['8:00 am','Yoga class'],
                ['6:00 pm','Dinner'],
                ['10:00 am','Brunch'],
                ['7.30 pm','Satsang (Q&A)'],
                ['11:30 am','Lecture'],
                ['9.30 pm','Lights off'],
            ] as $slot)
                <div class="grid grid-cols-[125px_1fr] items-center rounded-2xl border border-saffron/15 bg-white px-5 py-4 shadow-[0_10px_28px_rgba(72,48,30,.04)]">
                    <strong class="text-maroon">{{ $slot[0] }}</strong>
                    <span class="text-ink/65">{{ $slot[1] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="bg-maroon py-20 text-white">
    <div class="container-site grid gap-10 lg:grid-cols-[1.2fr_.8fr] lg:items-center">
        <div class="reveal">
            <div class="text-xs font-bold uppercase tracking-[.2em] text-gold">Plan your visit</div>
            <h2 class="mt-3 text-4xl font-semibold">Apply for a retreat <br>at Shanti Nilayam.</h2>
            <p class="mt-5 max-w-3xl leading-8 text-white/75">For course dates, retreat applications, Sanskrit classes, Yaatra details or travel assistance, please contact JJK Gurukulam.</p>
        </div>
        <div class="reveal flex flex-wrap gap-3 lg:justify-end">
            <a href="{{ url('/retreat-application') }}" class="btn-light">Apply for a retreat</a>
            <a href="{{ route('contact') }}" class="btn-light">Contact us</a>
        </div>
    </div>
</section>
@endsection
