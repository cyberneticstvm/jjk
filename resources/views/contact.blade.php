@extends('layouts.app')
@section('title', 'Contact & Locations | JJK Gurukulam Trust Kerala')
@section('description', 'Contact JJK Gurukulam Trust and find travel details for the children’s Gurukulam in Thiruvananthapuram and the Retreat Home in Thrissur.')
@section('content')
@include('partials.page-hero',[
    'eyebrow'=>'Contact & directions',
    'title'=>'Come, learn and serve with us.',
    'intro'=>'Reach out about sponsorship, courses, retreats, pilgrimages, volunteering or a visit to either of our Kerala centres.',
    'image'=>'images/inner-page-header.jpeg',
    'alt'=>'Kerala paddy fields and coconut palms at sunset'
])

<section class="py-24">
    <div class="container-site">
        <div class="grid gap-7 lg:grid-cols-2">
            <article class="card reveal !p-8 sm:!p-10">
                <div class="text-xs font-bold uppercase tracking-[.2em] text-saffron">Children’s home</div>
                <h2 class="mt-3 text-4xl font-semibold text-forest">JJK Gurukulam</h2>

                <address class="mt-5 not-italic leading-8 text-ink/65">
                    TC 6/2471(2), Guruji Road<br>
                    P.O. Vattiyoorkavu<br>
                    Thiruvananthapuram - 695013<br>
                    Kerala, South India
                </address>

                <div class="mt-7 space-y-3 border-t border-sandal pt-6">
                    <p><strong class="text-maroon">Email:</strong> <a class="transition hover:text-maroon hover:underline" href="mailto:jjkgurukulam@gmail.com">jjkgurukulam@gmail.com</a></p>
                    <p><strong class="text-maroon">Telephone:</strong> <a class="transition hover:text-maroon hover:underline" href="tel:+914712360110">+91 471 2360110</a></p>
                    <p><strong class="text-maroon">Mobile:</strong> <a class="transition hover:text-maroon hover:underline" href="tel:+919446177085">+91 9446177085</a></p>
                </div>

                <div class="mt-7 space-y-3 border-t border-sandal pt-6 text-sm">
                    <p><strong class="text-maroon">From Trivandrum Airport:</strong> approximately 15 km</p>
                    <p><strong class="text-maroon">From Trivandrum Railway Station:</strong> approximately 8.5 km</p>
                </div>
            </article>

            <article class="card reveal !p-8 sm:!p-10">
                <div class="text-xs font-bold uppercase tracking-[.2em] text-saffron">Retreat & learning centre</div>
                <h2 class="mt-3 text-4xl font-semibold text-forest">Shanti Nilayam</h2>

                <address class="mt-5 not-italic leading-8 text-ink/65">
                    Pallippuram, Kodannur P.O.<br>
                    Thrissur District - 680563<br>
                    Kerala, South India
                </address>

                <div class="mt-7 space-y-3 border-t border-sandal pt-6">
                    <p><strong class="text-maroon">Telephone:</strong> <a class="transition hover:text-maroon hover:underline" href="tel:+914872967084">+91 487 2967084</a></p>
                    <p><strong class="text-maroon">Mobile:</strong> <a class="transition hover:text-maroon hover:underline" href="tel:+919446177085">+91 9446177085</a></p>
                    <p><strong class="text-maroon">Email:</strong> <a class="transition hover:text-maroon hover:underline" href="mailto:jjkgurukulam@gmail.com">jjkgurukulam@gmail.com</a></p>
                </div>

                <div class="mt-7 space-y-3 border-t border-sandal pt-6 text-sm">
                    <p><strong class="text-maroon">From Cochin Airport:</strong> approximately 1 hour 15 minutes</p>
                    <p><strong class="text-maroon">From Thrissur Railway Station:</strong> approximately 14 km</p>                    
                </div>
            </article>
        </div>

        <div class="reveal mt-8 rounded-[2rem] bg-maroon p-8 text-center text-white sm:p-12">
            <div class="text-xs font-bold uppercase tracking-[.2em] text-gold">Email us</div>
            <h2 class="mt-4 break-words text-3xl font-semibold sm:text-4xl">jjkgurukulam@gmail.com</h2>
            <p class="mx-auto mt-4 max-w-2xl text-white/70">Tell us what you are interested in and include your preferred dates or contribution details where relevant.</p>
            <a href="mailto:jjkgurukulam@gmail.com" class="btn-light mt-7">Write to JJK Gurukulam</a>
        </div>
    </div>
</section>
@endsection
