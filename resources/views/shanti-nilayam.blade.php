@extends('layouts.app')
@section('title', 'Shanti Nilayam Retreat Home | Yoga, Vedanta & Sanskrit in Kerala')
@section('description', 'Shanti Nilayam, JJK Gurukulam Retreat Home in Thrissur, Kerala, offers traditional Yoga, Vedanta, Sanskrit, meditation, Satsang and spiritual pilgrimages.')
@section('content')
@include('partials.page-hero',[
    'eyebrow'=>'JJK Gurukulam Retreat Home · Thrissur',
    'title'=>'Shanti Nilayam.',
    'introHtml'=>'A learning centre for traditional Yoga, Vedanta and Sanskrit<br>in the peaceful village of Pallippuram, Kerala.',
    'image'=>'images/slider/Slider_1.jpg.jpeg',
    'alt'=>'Kerala paddy fields and coconut palms at sunset'
])

<section class="py-24">
    <div class="container-site grid items-center gap-16 lg:grid-cols-2">
        <div class="reveal">
            <div class="eyebrow">A Learning Centre</div>
            <h2 class="section-title">A place for spiritual practice and inner growth.</h2>
            <div class="prose-jjk mt-7">
                <p>Shanti Nilayam is located in the heart of Kerala, South India, in the culturally rich district of Thrissur, often known as the cultural capital of Kerala. Situated in the peaceful village of Pallippuram, away from the noise and distractions of city life, Shanti Nilayam provides an ideal environment for spiritual practice and inner growth.</p>
                <p>We regularly conduct courses in Yoga, Sanskrit, Upanishads, Bhagavad Gita, and other subjects related to Vedanta. Our team of teachers has been trained in the Arsha Vidya tradition established by Swami Dayananda Saraswati. The director of Shanti Nilayam is Swami Tattvarupananda, a disciple of Swami Dayananda Saraswati. Swami Tattvarupananda teaches in different parts of the world and is known for his unique and inspiring way of imparting this ancient wisdom.</p>
            </div>
        </div>
        <img src="{{ asset('images/shanti-nilayam-spiritual-practice.png') }}" alt="Meditation practice in a peaceful Kerala retreat courtyard" class="reveal aspect-square w-full rounded-[2rem] object-cover shadow-2xl">
    </div>
</section>

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
    <div class="container-site">
        <div class="reveal mx-auto max-w-3xl text-center">
            <div class="eyebrow justify-center before:hidden">Yoga and Vedanta Courses</div>
            <h2 class="section-title">Experience the wisdom of traditional Yoga and Vedanta.</h2>
            <p class="prose-jjk mt-6">At Shanti Nilayam, we offer authentic courses in Yoga and Vedanta in a peaceful and spiritually enriching environment. Rooted in the ancient Vedic tradition, our programs are designed to help individuals discover inner harmony, clarity of mind, and a deeper understanding of life.</p>
            <p class="prose-jjk mt-4">Located amidst the serene natural surroundings of Kerala, our Gurukulam provides an ideal atmosphere for study, reflection, meditation, and personal transformation.</p>
        </div>

        <div class="mt-12 grid gap-7 lg:grid-cols-2">
            <article class="card reveal">
                <div class="text-sm font-bold uppercase tracking-[.18em] text-saffron">Traditional Yoga</div>
                <h3 class="mt-4 text-3xl font-semibold text-forest">A holistic discipline.</h3>
                <p class="mt-5 leading-8 text-ink/70">Yoga is not merely physical exercise; it is a holistic discipline that brings balance to the body, mind, and emotions. Our Yoga courses include the traditional practices of:</p>
                <ul class="mt-5 grid gap-3 leading-7 text-ink/70">
                    @foreach(['Asanas (physical exercises)','Pranayama (breathing techniques)','Meditation','Relaxation practices','Chanting and devotional prayers'] as $practice)
                        <li class="flex gap-3"><span class="mt-2 size-2 shrink-0 rounded-full bg-saffron"></span><span>{{ $practice }}</span></li>
                    @endforeach
                </ul>
                <p class="mt-5 leading-8 text-ink/70">The classes are conducted in a simple and traditional manner, suitable for beginners as well as experienced practitioners. Through regular practice, students can improve physical health, mental calmness, concentration, and emotional well-being.</p>
            </article>

            <article class="card reveal">
                <div class="text-sm font-bold uppercase tracking-[.18em] text-saffron">Vedanta</div>
                <h3 class="mt-4 text-3xl font-semibold text-forest">The knowledge of the Self.</h3>
                <p class="mt-5 leading-8 text-ink/70">Vedanta is the timeless wisdom of the ancient sages of India. It helps us understand the true nature of ourselves and the world around us. At Shanti Nilayam (JJK Gurukulam Retreat Home), Vedanta is taught in the traditional method of teaching handed down through the Guru–Shishya Parampara (teacher–student lineage).</p>
                <p class="mt-5 leading-8 text-ink/70">The courses include the study of:</p>
                <ul class="mt-5 grid gap-3 leading-7 text-ink/70">
                    @foreach(['Bhagavad Gita','Upanishads','Sanskrit chanting','Meditation and contemplative practices','Fundamental principles of Vedanta philosophy'] as $study)
                        <li class="flex gap-3"><span class="mt-2 size-2 shrink-0 rounded-full bg-saffron"></span><span>{{ $study }}</span></li>
                    @endforeach
                </ul>
                <p class="mt-5 leading-8 text-ink/70">Our teachers are trained in the Arsha Vidya tradition of Swami Dayananda Saraswati, ensuring an authentic and systematic approach to the teachings.</p>
            </article>
        </div>

        <div class="reveal mt-10 rounded-[2rem] bg-maroon p-8 text-white sm:p-10">
            <h3 class="text-3xl font-semibold">A Transformative Experience</h3>
            <div class="mt-5 grid gap-5 leading-8 text-white/75 lg:grid-cols-2">
                <p>Life at the Shanti Nilayam follows a disciplined daily routine that includes meditation, Yoga, scriptural study, chanting, seva (selfless service), and Satsang. This traditional lifestyle helps students cultivate simplicity, awareness, and inner peace.</p>
                <p>Whether you are seeking spiritual growth, mental peace, better health, or deeper self-understanding, our courses offer a meaningful opportunity to reconnect with yourself and experience the wisdom of the ancient Indian tradition. We warmly welcome seekers from all backgrounds to join us on this journey of learning, reflection, and inner discovery.</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-sandal/60 py-24">
    <div class="container-site">
        <div class="reveal max-w-3xl">
            <div class="eyebrow">Sanskrit Courses</div>
            <h2 class="section-title">The language of <br>ancient wisdom.</h2>
            <div class="prose-jjk mt-7">
                <p>We regularly conduct Sanskrit classes at our Shanti Nilayam Gurukulam.</p>
                <p>To truly understand the Indian scriptures, it is essential to learn the Sanskrit language, as it is the medium through which the ancient sages communicated their knowledge. Sanskrit is regarded as one of the most refined and scientific languages in the world. The word Sanskritam itself means “refined” or “perfected”.</p>
                <p>According to tradition, Sanskrit is considered the language of the gods. It follows a highly systematic structure of grammar codified by the great grammarian Panini.</p>
                <p>The Vedas, Upanishads, Puranas, Epics, and classical texts on Astrology and Ayurveda were all composed in Sanskrit. Anyone wishing to explore the depth of Indian philosophy, culture, spirituality, and literature will greatly benefit from studying this sacred language.</p>
            </div>
        </div>

        <div class="mt-12 grid gap-6 lg:grid-cols-3">
            @foreach([
                ['01','Introduction to Sanskrit',['The Sanskrit alphabet','Vowels and consonants','Combined letters and pronunciation','Basic reading skills'],'Special attention is given to correct pronunciation and proper reading methods.'],
                ['02','Intermediate Level',['Learn useful Sanskrit vocabulary','Form sentences','Practice simple conversations','Develop confidence in reading and speaking Sanskrit'],'This course helps students become more comfortable and familiar with the language.'],
                ['03','Advanced Level',['Sanskrit grammar','The seven grammatical cases and their usage','Sentence construction and vocabulary expansion','Study of selected verses from the second chapter of the Bhagavad Gita'],'By the end of this level, students gain a deeper understanding of Sanskrit structure and scriptural reading.'],
            ] as $level)
                <article class="card reveal">
                    <div class="font-serif text-4xl font-bold text-gold">{{ $level[0] }}</div>
                    <h3 class="mt-3 text-2xl font-semibold text-forest">{{ $level[1] }}</h3>
                    <ul class="mt-5 grid gap-3 leading-7 text-ink/70">
                        @foreach($level[2] as $item)
                            <li class="flex gap-3"><span class="mt-2 size-2 shrink-0 rounded-full bg-saffron"></span><span>{{ $item }}</span></li>
                        @endforeach
                    </ul>
                    <p class="mt-5 leading-8 text-ink/65">{{ $level[3] }}</p>
                </article>
            @endforeach
        </div>

        <div class="reveal mt-10 grid gap-6 lg:grid-cols-2">
            <div class="card">
                <h3 class="text-3xl font-semibold text-forest">Course Structure</h3>
                <p class="mt-5 leading-8 text-ink/70">Each level is offered as a two-week intensive course. Students attend two classes daily — one in the morning and one in the evening — along with continuous guidance and practical support from the teacher.</p>
                <p class="mt-5 leading-8 text-ink/70">Participants are also expected to dedicate at least three hours each day for self-study and practice.</p>
            </div>
            <div class="card">
                <h3 class="text-3xl font-semibold text-forest">A Traditional Learning Atmosphere</h3>
                <p class="mt-5 leading-8 text-ink/70">Students who sincerely follow all three levels step by step will gradually develop the ability to read and understand Sanskrit independently.</p>
                <p class="mt-5 leading-8 text-ink/70">To maintain the quality of teaching and the traditional atmosphere of learning, we accept only a limited number of students for each course. All classes are conducted at our Shanti Nilayam Gurukulam, where the peaceful and spiritual environment provides the ideal setting for learning this sacred language.</p>
                <p class="mt-5 leading-8 text-ink/70">For further information, please feel free to contact us.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-24">
    <div class="container-site grid gap-14 lg:grid-cols-[.8fr_1.2fr]">
        <div class="reveal">
            <div class="eyebrow">Daily Schedule</div>
            <h2 class="section-title">Shanti Nilayam Retreat Home.</h2>
            <p class="prose-jjk mt-6">Daily Schedule during the Course.</p>
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
                <div class="grid grid-cols-[145px_1fr] items-center rounded-2xl border border-saffron/15 bg-white px-5 py-4">
                    <strong class="text-maroon">{{ $slot[0] }}</strong>
                    <span class="text-ink/65">{{ $slot[1] }}</span>
                </div>
            @endforeach
        </div>
    </div>
</section>

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
            <div class="text-xs font-bold uppercase tracking-[.2em] text-gold">Location of Shanti Nilayam Gurukulam</div>
            <h2 class="mt-3 text-4xl font-semibold">Pallippuram, Kodannur, Thrissur</h2>
            <div class="mt-5 space-y-4 leading-8 text-white/75">
                <p>Located in the peaceful village of Pallippuram at Paralam Panchayath in Thrissur District, Kerala, Shanti Nilayam (JJK Gurukulam Retreat Home) offers a serene and spiritually uplifting atmosphere surrounded by nature. Away from the noise of city life, the retreat is nestled among green paddy fields, coconut groves, and the quiet beauty of village life.</p>
                <p>Situated in Thrissur, the cultural capital of Kerala, Shanti Nilayam provides an ideal environment for spiritual study, meditation, Yoga, and self-discovery.</p>
                <p>The Retreat home offers traditional teachings in Yoga, Vedanta, Sanskrit, meditation, and Vedic chanting under the guidance of teachers trained in the lineage of Swami Dayananda Saraswati.</p>
                <p>Daily life at the retreat includes meditation, prayers, Yoga practice, scriptural study, Satsang, and Karma Yoga (selfless service), along with wholesome vegetarian meals in a calm and disciplined atmosphere.</p>
                <p>Located at Pallippuram, P.O. Kodannur, Thrissur, Kerala, Shanti Nilayam is easily accessible from Thrissur town and Kochi International Airport while maintaining the peace and simplicity essential for spiritual living.</p>
                <p>We are 14 kilometres from Thrissur Railway station and an hour and fifteen minutes’ drive from Kochi international airport.</p>
            </div>
        </div>
        <div class="reveal rounded-[2rem] border border-white/15 bg-white/10 p-8">
            <h3 class="text-3xl font-semibold">Plan your visit</h3>
            <p class="mt-4 leading-7 text-white/70">For course dates, retreat applications, Sanskrit classes, Yaatra details or travel assistance, please contact JJK Gurukulam.</p>
            <div class="mt-7 flex flex-wrap gap-3">
                <a href="{{ url('/retreat-application') }}" class="btn-light">Apply for a retreat</a>
                <a href="{{ route('contact') }}" class="btn-light">Contact us</a>
            </div>
        </div>
    </div>
</section>
@endsection
