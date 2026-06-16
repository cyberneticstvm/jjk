@extends('layouts.app')
@section('title', 'Support Us | Donate to JJK Gurukulam Trust')
@section('description', 'Support meals, education, clothing and care for children at JJK Gurukulam Trust. View sponsorship options and verified bank details.')
@section('content')
@include('partials.page-hero',['eyebrow'=>'Compassion in action','title'=>'Help a child step into the light.','intro'=>'Your contribution sustains education, nutrition, healthcare and a secure home for children who deserve the opportunity to thrive.','image'=>'images/gurukulam-hero.png','alt'=>'Children studying at a Kerala Gurukulam'])
<section class="py-24"><div class="container-site grid gap-16 lg:grid-cols-[.8fr_1.2fr]"><div class="reveal"><div class="eyebrow">Yes, you can help</div><h2 class="section-title">How You Can Participate</h2><p class="prose-jjk mt-6">Your support, in cash or kind, is the primary source that helps sustain this Gurukulam and continue its service to children in need. By contributing to the care and education of these children, you can make a meaningful difference in their lives.</p><p class="prose-jjk mt-5">We warmly invite you to sponsor a child and become part of this noble mission. Your support can become a turning point in a child’s future and, at the same time, a deeply fulfilling experience in your own life.</p>
<h2 class="section-title mt-3">Support Our Mission</h2><p class="prose-jjk mt-6">Our goal is to find sponsors for all 365 days of the year to help run and maintain the Gurukulam. Contributions received help us meet the daily operational expenses, including:</p>
<ul>
<li>Meals and nutrition</li>
<li>Education and study materials</li>
<li>Utilities and maintenance</li>
<li>Clothing and healthcare</li>
<li>General care and well-being of the children</li>
</ul>
<p class="prose-jjk mt-5">We leave it to your goodwill and conscience to contribute any amount of your choice toward supporting the activities and operational expenses of the Gurukulam.</p>
</div><div class="grid gap-4 sm:grid-cols-2">
@foreach([['₹3,000','One day food offering'],['₹3,000','Sponsor a child for one month'],['₹18,000','Sponsor a child for six months'],['₹36,000','Sponsor a child for one year'],['₹10,000','Sponsor all expenses for one day'],['₹12,500','Academics & clothing for one child/year']] as $option)<div class="card reveal !p-6"><strong class="font-serif text-4xl text-maroon">{{ $option[0] }}</strong><p class="mt-2 leading-6 text-ink/65">{{ $option[1] }}</p></div>@endforeach
</div></div></section>
<section class="bg-sandal/60 py-24"><div class="container-site"><div class="reveal max-w-3xl"><div class="eyebrow">Bank transfer details</div><h2 class="section-title">Contribute directly to the Trust.</h2><p class="mt-5 text-ink/65">We gratefully accept every contribution, whether in cash or kind. All donations received are properly acknowledged, accounted for, and duly audited. Payable to <strong>JJK Gurukulam Trust, Trivandrum</strong>. Please contact us after making a transfer so we can acknowledge your contribution. Donations may be made by individuals, families, firms, organizations, or companies through:</p>
<ul>
<li>Bank Transfer</li>
<li>Cheque</li>
<li>Demand Draft (DD)</li>
</ul>
<p>Your generosity and compassion can help create a brighter future for many children and preserve the values and traditions that the Gurukulam stands for. For further details or assistance regarding donations and sponsorship, please feel free to contact us.</p>
</div><div class="mt-10 grid gap-6 lg:grid-cols-2">
@foreach([
['South Indian Bank','Ammadam, Thrissur','0003053000011682','SIBL0000003'],
['Canara Bank','Anchamada, Thiruvananthapuram','1163101054214','CNRB0001163']
] as $bank)<div class="card reveal"><h3 class="text-3xl font-semibold text-forest">{{ $bank[0] }}</h3><dl class="mt-6 grid gap-4 text-sm"><div><dt class="font-bold uppercase tracking-wider text-ink/40">Account name</dt><dd class="mt-1 text-lg">JJK Gurukulam Trust</dd></div><div><dt class="font-bold uppercase tracking-wider text-ink/40">Savings account</dt><dd class="mt-1 text-lg font-semibold text-maroon">{{ $bank[2] }}</dd></div><div><dt class="font-bold uppercase tracking-wider text-ink/40">Branch</dt><dd class="mt-1 text-lg">{{ $bank[1] }}</dd></div><div><dt class="font-bold uppercase tracking-wider text-ink/40">IFSC</dt><dd class="mt-1 text-lg font-semibold">{{ $bank[3] }}</dd></div></dl></div>@endforeach
</div><div class="reveal mt-8 rounded-3xl bg-forest p-8 text-white"><h3 class="text-2xl font-semibold">Foreign contributions</h3><p class="mt-3 text-white/70">We are also registered under FCRA (Foreign Currency Regulations Act) to receive foreign contributions from outside the country. Kindly contact us by email <a class="font-bold text-gold underline" href="mailto:jjkgurukulam@gmail.com">jjkgurukulam@gmail.com</a> to get the details of this account.</p></div></div></section>
@endsection
