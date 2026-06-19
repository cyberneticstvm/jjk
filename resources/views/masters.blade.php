@extends('layouts.app')
@section('title', 'Masters & Spiritual Lineage | JJK Gurukulam')
@section('description', 'Learn about Swami Tattvarupananda Saraswati and the Vedanta masters who inspire JJK Gurukulam: Swami Dayananda, Swami Sivananda and Swami Chinmayananda.')
@section('content')
@include('partials.page-hero',[
    'eyebrow'=>'Guru–Shishya Parampara',
    'title'=>'Masters of wisdom.',
    'intro'=>'Our work and teaching are guided by masters who unfolded the scriptures with authenticity, clarity, compassion and service.',
    'image'=>'images/inner-page-header.jpeg',
    'alt'=>'Kerala paddy fields and coconut palms at sunset'
])

<section class="py-24">
    <div class="container-site">
        <article class="card reveal !p-0 overflow-hidden">
            <div class="grid gap-0 lg:grid-cols-[360px_1fr] lg:items-center">
                <div class="flex h-full items-center bg-sandal p-6 sm:p-8">
                    <img src="{{ asset('images/swami-tattvarupananda.jpeg') }}" alt="Swami Tattvarupananda Saraswati" class="mx-auto h-auto w-full max-w-[320px] rounded-[1.5rem] object-contain shadow-xl">
                </div>
                <div class="p-8 sm:p-12">
                    <div class="text-xs font-bold uppercase tracking-[.2em] text-saffron">Swami Tattvarupananda Saraswati</div>
                    <h2 class="mt-3 text-4xl font-semibold text-forest sm:text-5xl">Swami Tattvarupananda Saraswati</h2>
                    <div class="prose-jjk mt-6">
                        <p>Swami Tattvarupananda Saraswati was born and raised in Thrissur, the cultural capital of Kerala. From an early age, he was deeply drawn toward spirituality and the pursuit of self-knowledge.</p>
                        <p>At the age of eighteen, he joined Narayana Ashram Tapovanam, where he studied under the guidance of Swami Bhoomananda Tirtha. Later, inspired by a sincere longing for spiritual truth, Swamiji travelled to the Himalayas in search of a realized master and undertook intense spiritual disciplines in the company of several Himalayan sages and spiritual teachers.</p>
                        <p>It was during this period that he met Swami Dayananda Saraswati, the renowned traditional teacher of Vedanta. This meeting became the turning point and most significant event in Swamiji’s spiritual journey. Under the guidance of Swami Dayananda Saraswati, Swami Tattvarupananda undertook an in-depth study of the Prasthanatraya — the Upanishads, Bhagavad Gita, and Brahma Sutras — along with the commentaries of Adi Shankaracharya. Through years of dedicated study, he mastered both the scriptures and the traditional methodology of teaching Vedanta.</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-sandal p-8 sm:p-12">
                <div class="prose-jjk">
                    <p>In 2003, Swami Tattvarupananda Saraswati was initiated into the traditional order of Sannyasa by his Guru, Swami Dayananda Saraswati. Soon afterward, following the guidance and blessings of his Guru, he established the Thiruvananthapuram chapter of the All India Movement (AIM) for Seva.</p>
                    <p>Swamiji teaches Sanskrit, Bhagavad Gita, Upanishads, and other Vedantic texts related to Yoga and spiritual living. He is especially admired for his gift as a storyteller and his simple, direct, and humorous style of teaching, which makes profound spiritual truths accessible to everyone.</p>
                    <p>Traditional teachers who unfold the scriptures in an authentic manner are rare, and Swamiji’s teachings have been appreciated by students and seekers around the world.</p>
                    <p>At present, Swami Tattvarupananda Saraswati teaches scriptures and conducts spiritual programs at various locations internationally, including Haus Yoga Vidya centres in Germany, and spiritual groups in France, Denmark, the Czech Republic, Portugal, Japan, Thailand and Russia.</p>
                </div>
            </div>
        </article>
    </div>
</section>

<section class="bg-sandal/60 py-24">
    <div class="container-site">
        <div class="reveal max-w-3xl">
            <div class="eyebrow">Lineage</div>
            <h2 class="section-title">Masters who carried the light forward.</h2>
        </div>

        <div class="mt-12 grid gap-8">
            <article class="card reveal !p-0 overflow-hidden">
                <div class="grid lg:grid-cols-[320px_1fr] lg:items-center">
                    <div class="flex h-full items-center bg-white p-6 sm:p-8">
                        <img src="{{ asset('images/swami-dayananda.jpeg') }}" alt="Swami Dayananda Saraswati" class="mx-auto h-auto w-full max-w-[280px] rounded-[1.5rem] object-contain shadow-lg">
                    </div>
                    <div class="p-8 sm:p-10">
                        <div class="text-sm font-bold tracking-[.15em] text-saffron">1930–2015</div>
                        <h3 class="mt-3 text-3xl font-semibold text-forest sm:text-4xl">Swami Dayananda Saraswati</h3>
                        <div class="prose-jjk mt-6">
                            <p>Swami Dayananda Saraswati (1930–2015) was one of the most respected traditional teachers of Vedanta in modern times. For more than five decades, he taught Vedanta in India and across the world, guiding thousands of students in the study of the ancient wisdom of the Vedas and Upanishads.</p>
                            <p>A true “teacher of teachers”, Swami Dayananda designed and conducted six long-term residential Vedanta courses, each spanning approximately 40 months. Graduates of these programs now teach internationally, including around 60 qualified Acharyas and more than 100 Swamis who continue to share this timeless knowledge worldwide.</p>
                            <p>Under Swami Dayananda’s guidance, more than 60 centres for Vedic teaching and spiritual study have been established around the world. Among the main centres in India are:</p>
                        </div>
                    </div>
                </div>
                <div class="border-t border-sandal p-8 sm:p-10">
                    <div class="prose-jjk">
                        <ul class="mt-4 grid gap-3">
                            <li class="flex gap-3"><span class="mt-3 size-2 shrink-0 rounded-full bg-saffron"></span><span>Arsha Vidya Peetham, Rishikesh</span></li>
                            <li class="flex gap-3"><span class="mt-3 size-2 shrink-0 rounded-full bg-saffron"></span><span>Arsha Vidya Gurukulam, Coimbatore</span></li>
                            <li class="flex gap-3"><span class="mt-3 size-2 shrink-0 rounded-full bg-saffron"></span><span>Arsha Vijnana Gurukulam, Nagpur</span></li>
                        </ul>
                        <p>The main centre in the United States is:</p>
                        <ul class="mt-4 grid gap-3">
                            <li class="flex gap-3"><span class="mt-3 size-2 shrink-0 rounded-full bg-saffron"></span><span>Arsha Vidya Gurukulam, Saylorsburg, Pennsylvania</span></li>
                        </ul>
                        <p>Swami Dayananda Saraswati was also a prolific writer and authored numerous books on Vedanta, spirituality, and Indian philosophy. A gifted speaker and scholar, he addressed audiences at prestigious universities, international conferences, UNESCO, and the United Nations, where he participated in the Millennium World Peace Summit.</p>
                        <p>In the year 2000, Swami Dayananda founded the All India Movement (AIM) for Seva, a charitable initiative dedicated to establishing student homes and educational support systems across India. Since then, more than 100 student homes have been established, offering education, care, and opportunities to underprivileged children.</p>
                        <p>Swamiji’s vision of combining traditional wisdom with compassionate service continues to inspire and guide us in all our activities at JJK Gurukulam.</p>
                    </div>
                </div>
            </article>

            <article class="card reveal !p-0 overflow-hidden">
                <div class="grid lg:grid-cols-[320px_1fr] lg:items-center">
                    <div class="flex h-full items-center bg-white p-6 sm:p-8">
                        <img src="{{ asset('images/swami-sivananda.jpeg') }}" alt="Swami Sivananda Saraswati" class="mx-auto h-auto w-full max-w-[280px] rounded-[1.5rem] object-contain shadow-lg">
                    </div>
                    <div class="p-8 sm:p-10">
                        <div class="text-sm font-bold tracking-[.15em] text-saffron">1887–1963</div>
                        <h3 class="mt-3 text-3xl font-semibold text-forest sm:text-4xl">Swami Sivananda Saraswati</h3>
                        <div class="prose-jjk mt-6">
                            <p>Swami Sivananda Saraswati (1887–1963) was one of the greatest spiritual masters and Yoga saints of modern India. Born into the illustrious family lineage of Sage Appayya Dikshitar and several renowned saints and scholars, Swamiji displayed from an early age a natural inclination toward the study and practice of Vedanta and spiritual life.</p>
                            <p>Along with his deep spiritual aspiration, he possessed a profound compassion for humanity and a strong desire to serve others. This spirit of service led him into the medical profession, where he worked as a doctor caring for the sick and suffering.</p>
                            <p>During his years of service, Swami Sivananda realized that beyond physical healing, people were in need of true knowledge and inner transformation. Moved by this understanding, he renounced his medical career and embraced a life of renunciation and spiritual discipline in order to dedicate himself fully to the upliftment of humanity.</p>
                        </div>
                    </div>
                </div>
                <div class="border-t border-sandal p-8 sm:p-10">
                    <div class="prose-jjk">
                        <p>He eventually settled in Rishikesh in the Himalayas, where he practiced intense austerities and spiritual sadhana. Through his deep realization and selfless service, he came to be revered as a great Yogi, saint, sage, and Jivanmukta — one who is liberated while living.</p>
                        <p>In Rishikesh, Swami Sivananda founded:</p>
                        <ul class="mt-4 grid gap-3">
                            <li class="flex gap-3"><span class="mt-3 size-2 shrink-0 rounded-full bg-saffron"></span><span>Sivananda Ashram in 1932</span></li>
                            <li class="flex gap-3"><span class="mt-3 size-2 shrink-0 rounded-full bg-saffron"></span><span>The Divine Life Society in 1936</span></li>
                            <li class="flex gap-3"><span class="mt-3 size-2 shrink-0 rounded-full bg-saffron"></span><span>Yoga Vedanta Forest Academy in 1948</span></li>
                        </ul>
                        <p>His life’s mission was the dissemination of spiritual knowledge and the training of seekers in Yoga and Vedanta.</p>
                        <p>Swami Sivananda was also a prolific author and wrote more than 300 books on Yoga, Vedanta, meditation, health, devotion, and spiritual living. His writings include valuable English translations and commentaries on the Upanishads and other ancient scriptures, making the wisdom of India accessible to people around the world.</p>
                        <p>His teachings continue to inspire countless seekers and spiritual organizations worldwide.</p>
                    </div>
                </div>
            </article>

            <article class="card reveal !p-0 overflow-hidden">
                <div class="grid lg:grid-cols-[320px_1fr] lg:items-center">
                    <div class="flex h-full items-center bg-white p-6 sm:p-8">
                        <img src="{{ asset('images/swami-chinmayananda.jpeg') }}" alt="Swami Chinmayananda Saraswati" class="mx-auto h-auto w-full max-w-[280px] rounded-[1.5rem] object-contain shadow-lg">
                    </div>
                    <div class="p-8 sm:p-10">
                        <div class="text-sm font-bold tracking-[.15em] text-saffron">1916–1993</div>
                        <h3 class="mt-3 text-3xl font-semibold text-forest sm:text-4xl">Swami Chinmayananda Saraswati</h3>
                        <div class="prose-jjk mt-6">
                            <p>Swami Chinmayananda Saraswati (1916–1993), a disciple of Swami Sivananda Saraswati, was one of the foremost teachers responsible for bringing the wisdom of Vedanta to modern audiences in India and around the world.</p>
                            <p>He was born into a noble family in Ernakulam, Kerala, South India. In his early years, he worked as a journalist, and it was through a journalistic assignment that he first visited Rishikesh in the Himalayas. There, he came into contact with Swami Sivananda Saraswati, whose spiritual presence deeply inspired and transformed him.</p>
                        </div>
                    </div>
                </div>
                <div class="border-t border-sandal p-8 sm:p-10">
                    <div class="prose-jjk">
                        <p>In 1949, he was initiated into the sacred order of Sannyasa by Swami Sivananda. Seeking a deeper and systematic understanding of the scriptures, Swami Chinmayananda later studied under the renowned sage Swami Tapovanam Maharaj in Uttarkashi, where he underwent intense training in Vedanta and contemplative life.</p>
                        <p>After completing his studies, Swami Chinmayananda began conducting Jnana Yajnas — public discourses on the Bhagavad Gita, Upanishads, and other sacred scriptures. Through his dynamic and eloquent lectures in English, he made the profound teachings of Vedanta accessible to modern seekers from all walks of life.</p>
                        <p>He travelled extensively throughout India and many countries abroad, spreading the timeless message of Vedanta, self-knowledge, and spiritual living. His tireless missionary spirit inspired a remarkable revival of Indian culture, values, and spiritual heritage in contemporary society.</p>
                        <p>Swami Chinmayananda’s teachings continue to inspire millions of seekers worldwide through the many educational, spiritual, and cultural institutions established under his guidance.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
