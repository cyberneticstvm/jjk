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

                <div class="mt-7 overflow-hidden rounded-2xl border border-sandal bg-white">
                    <div class="border-b border-sandal px-5 py-3 text-sm font-semibold text-forest">Find JJK Gurukulam</div>
                    <iframe
                        title="Map showing JJK Gurukulam"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.801708577482!2d76.9960388!3d8.5186241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05ba1af8a28dcd%3A0xe9202f4cf3f8d1c9!2sJanaka%20janani%20Kripa%20Gurukulam!5e0!3m2!1sen!2sin!4v1781929737230!5m2!1sen!2sin"
                        class="block h-72 w-full border-0"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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

                <div class="mt-7 overflow-hidden rounded-2xl border border-sandal bg-white">
                    <div class="border-b border-sandal px-5 py-3 text-sm font-semibold text-forest">Find Shanti Nilayam</div>
                    <iframe
                        title="Map showing Shanti Nilayam"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.5371968855306!2d76.1732455!3d10.4582512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7f3208ad9510b%3A0xb5a45665364f981d!2sShanti%20Nilayam%20-%20JJK%20Gurukulam%20Retreat%20Home!5e0!3m2!1sen!2sin!4v1781929772463!5m2!1sen!2sin"
                        class="block h-72 w-full border-0"
                        loading="lazy"
                        allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
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
