@extends('layouts.app')
@section('title', 'Our Teachers & Spiritual Lineage | JJK Gurukulam')
@section('description', 'Meet Swami Tattvarupananda Saraswati and the Vedanta lineage that inspires JJK Gurukulam: Swami Dayananda, Swami Sivananda and Swami Chinmayananda.')
@section('content')
@include('partials.page-hero',['eyebrow'=>'Guru–Shishya Parampara','title'=>'A living lineage of wisdom.','intro'=>'Our work and teaching are guided by masters who made the profound vision of Vedanta accessible through clarity, compassion and service.','image'=>'images/vedanta-study.png','alt'=>'A Vedanta teacher with students'])
<section class="py-24"><div class="container-site">
<article class="reveal grid overflow-hidden rounded-[2rem] bg-forest text-white lg:grid-cols-[.85fr_1.15fr]"><img src="{{ asset('images/vedanta-study.png') }}" alt="Traditional Vedanta teacher" class="h-full min-h-[430px] w-full object-cover"><div class="p-8 sm:p-12"><div class="text-xs font-bold uppercase tracking-[.2em] text-gold">Director, Shanti Nilayam</div><h2 class="mt-3 text-4xl font-semibold sm:text-5xl">Swami Tattvarupananda Saraswati</h2><div class="mt-6 space-y-4 leading-8 text-white/75"><p>Born in Thrissur, Swamiji entered spiritual life at eighteen and later travelled to the Himalayas in search of deeper truth. Meeting Swami Dayananda Saraswati became the turning point of his journey.</p><p>Under his Guru, he studied the Upanishads, Bhagavad Gita and Brahma Sutras with Adi Shankaracharya’s commentaries. He received Sannyasa in 2003 and went on to establish the Thiruvananthapuram chapter of AIM for Seva.</p><p>Known for his simple, direct and humorous teaching, Swamiji teaches Sanskrit and Vedanta internationally across Europe and Asia.</p></div></div></article>
<div class="mt-20 reveal"><div class="eyebrow">Those who inspire us</div><h2 class="section-title">Teachers who carried the light forward.</h2></div>
<div class="mt-12 grid gap-7 lg:grid-cols-3">
@foreach([
['Swami Dayananda Saraswati','1930–2015','A revered “teacher of teachers” who taught Vedanta worldwide for over five decades, created long-term residential courses and founded AIM for Seva in 2000. More than 60 Vedic teaching centres arose under his guidance.'],
['Swami Sivananda Saraswati','1887–1963','A doctor who renounced his medical career to serve humanity through spiritual knowledge. He founded Sivananda Ashram, The Divine Life Society and Yoga Vedanta Forest Academy, and authored over 300 books.'],
['Swami Chinmayananda Saraswati','1916–1993','A disciple of Swami Sivananda who brought Vedanta to modern audiences through dynamic Jnana Yajnas. His teaching inspired a global revival of Indian culture, values and spiritual heritage.']
] as $teacher)<article class="card reveal"><div class="text-sm font-bold tracking-[.15em] text-saffron">{{ $teacher[1] }}</div><h3 class="mt-3 text-3xl font-semibold text-forest">{{ $teacher[0] }}</h3><p class="mt-5 leading-8 text-ink/65">{{ $teacher[2] }}</p></article>@endforeach
</div></div></section>
@endsection
