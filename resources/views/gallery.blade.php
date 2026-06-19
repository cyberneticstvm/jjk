@extends('layouts.app')
@section('title', 'Gallery | JJK Gurukulam')
@section('description', 'Photo gallery for JJK Gurukulam, Shanti Nilayam, courses, retreats, seva activities and pilgrimages.')
@section('content')
@include('partials.page-hero',[
    'eyebrow'=>'Gallery',
    'title'=>'Moments from the Gurukulam.',
    'intro'=>'A living collection of photos from JJK Gurukulam, Shanti Nilayam, courses, retreats, seva activities and pilgrimages.',
    'image'=>'images/inner-page-header.jpeg',
    'alt'=>'Kerala paddy fields and coconut palms at sunset'
])

<section class="py-24">
    <div class="container-site">
        <div class="reveal mx-auto max-w-3xl text-center">
            <div class="eyebrow justify-center before:hidden">Photo Gallery</div>
            <h2 class="section-title">Life, learning and quiet moments.</h2>
            <!--<p class="prose-jjk mt-6">Add new images to <strong>public/images/gallery</strong> and they will appear here automatically.</p>-->
        </div>

        @if($images->isNotEmpty())
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($images as $image)
                    <figure class="reveal group overflow-hidden rounded-[2rem] bg-white shadow-[0_18px_60px_rgba(72,48,30,.08)]">
                        <img src="{{ $image['src'] }}" alt="{{ $image['alt'] }}" class="aspect-[4/3] w-full object-cover transition duration-700 group-hover:scale-105" loading="lazy">
                        <figcaption class="px-6 py-4 font-serif text-xl font-semibold text-forest">{{ $image['alt'] }}</figcaption>
                    </figure>
                @endforeach
            </div>
        @else
            <div class="card reveal mt-12 text-center">
                <h3 class="font-serif text-3xl font-semibold text-forest">Gallery content will be updated soon.</h3>
                <p class="mt-4 leading-7 text-ink/65">Upload images into <strong>public/images/gallery</strong> to display them on this page.</p>
            </div>
        @endif
    </div>
</section>
@endsection
