@extends('layouts.app')
@section('title', 'Retreat Application Form | JJK Gurukulam')
@section('description', 'Apply for a Yoga, Sanskrit and Vedanta retreat at Shanti Nilayam or a JJK Gurukulam spiritual program.')
@section('content')
@include('partials.page-hero',[
    'eyebrow'=>'Sanskrit · Yoga · Vedanta',
    'title'=>'Application.',
    'intro'=>'Complete the form below to apply for a residential retreat or pilgrimage program. Fields marked with an asterisk are required.',
    'image'=>'images/shanti-nilayam-hero.png',
    'alt'=>'Shanti Nilayam retreat in Kerala'
])

<section class="py-20 sm:py-24">
    <div class="container-site">
        <div class="mx-auto max-w-5xl">
            @if(session('success'))
                <div class="mb-8 rounded-2xl border border-green-200 bg-green-50 p-5 text-green-900" role="status">
                    <strong class="block font-semibold">Application received</strong>
                    <span class="mt-1 block">{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->has('form'))
                <div class="mb-8 rounded-2xl border border-red-200 bg-red-50 p-5 text-red-900" role="alert">
                    {{ $errors->first('form') }}
                </div>
            @endif

            <form action="{{ url('/retreat-application') }}" method="POST" enctype="multipart/form-data" class="space-y-8" data-application-form>
                @csrf

                <fieldset class="card !p-6 sm:!p-9">
                    <legend class="px-2 font-serif text-3xl font-semibold text-forest">Application Form</legend>
                    <div class="mt-5 grid gap-6 md:grid-cols-2">
                        <div class="md:col-span-2">
                            <label for="retreat_location" class="block text-sm font-bold text-forest">Location <span class="text-maroon">*</span></label>
                            <select id="retreat_location" name="retreat_location" data-location-select class="mt-2 w-full rounded-xl border border-saffron/20 bg-white px-4 py-3 text-ink outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                                <option value="">Select</option>
                                @foreach(['JJK Gurukulam, Trivandrum','Shanti Nilayam, Thrissur', 'Accommodation', 'Pilgrimage', 'Other'] as $location)
                                    <option value="{{ $location }}" @selected(old('retreat_location') === $location)>{{ $location }}</option>
                                @endforeach
                            </select>
                            @error('retreat_location')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div data-other-location class="{{ old('retreat_location') === 'Other' ? '' : 'hidden' }} md:col-span-2">
                            <label for="other_location" class="block text-sm font-bold text-forest">Please specify the location <span class="text-maroon">*</span></label>
                            <input id="other_location" name="other_location" type="text" value="{{ old('other_location') }}" maxlength="150" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">
                            @error('other_location')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="from_date" class="block text-sm font-bold text-forest">From Date <span class="text-maroon">*</span></label>
                            <input id="from_date" name="from_date" type="date" value="{{ old('from_date') ?? date('d-m-Y) }}" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" placeholder="{{ date('d-m-Y) }}" pattern="\d{2}/\d{2}/\d{4}" required>
                            @error('from_date')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="to_date" class="block text-sm font-bold text-forest">To Date <span class="text-maroon">*</span></label>
                            <input id="to_date" name="to_date" type="date" value="{{ old('to_date') ?? date('d-m-Y) }}" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" placeholder="{{ date('d-m-Y) }}" pattern="\d{2}/\d{2}/\d{4}" required>
                            @error('to_date')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </fieldset>

                <fieldset class="card !p-6 sm:!p-9">
                    <legend class="px-2 font-serif text-3xl font-semibold text-forest">Applicant details</legend>
                    <div class="mt-5 grid gap-6 md:grid-cols-2">
                        <div class="md:col-span-2">
                            <label for="name" class="block text-sm font-bold text-forest">Full name <span class="text-maroon">*</span></label>
                            <input id="name" name="name" type="text" value="{{ old('name') }}" autocomplete="name" maxlength="150" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('name')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="gender" class="block text-sm font-bold text-forest">Gender <span class="text-maroon">*</span></label>
                            <select id="gender" name="gender" class="mt-2 w-full rounded-xl border border-saffron/20 bg-white px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                                <option value="">Select</option>
                                @foreach(['Male','Female','Other'] as $gender)
                                    <option value="{{ $gender }}" @selected(old('gender') === $gender)>{{ $gender }}</option>
                                @endforeach
                            </select>
                            @error('gender')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="date_of_birth" class="block text-sm font-bold text-forest">Date of birth <span class="text-maroon">*</span></label>
                            <input id="date_of_birth" name="date_of_birth" type="date" value="{{ old('date_of_birth') ?? date('d-m-Y) }}" autocomplete="bday" max="{{ now()->subDay()->format('d-m-Y') }}" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" placeholder="{{ date('d-m-Y) }}" pattern="\d{2}/\d{2}/\d{4}" required>
                            @error('date_of_birth')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm font-bold text-forest">Address <span class="text-maroon">*</span></label>
                            <textarea id="address" name="address" rows="3" autocomplete="street-address" maxlength="1000" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>{{ old('address') }}</textarea>
                            @error('address')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="state" class="block text-sm font-bold text-forest">State / Province <span class="text-maroon">*</span></label>
                            <input id="state" name="state" type="text" value="{{ old('state') }}" autocomplete="address-level1" maxlength="100" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('state')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="country" class="block text-sm font-bold text-forest">Country <span class="text-maroon">*</span></label>
                            <input id="country" name="country" type="text" value="{{ old('country') }}" autocomplete="country-name" maxlength="100" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('country')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="zip_code" class="block text-sm font-bold text-forest">ZIP / Postal code <span class="text-maroon">*</span></label>
                            <input id="zip_code" name="zip_code" type="text" value="{{ old('zip_code') }}" autocomplete="postal-code" maxlength="20" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('zip_code')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="occupation" class="block text-sm font-bold text-forest">Occupation</label>
                            <input id="occupation" name="occupation" type="text" value="{{ old('occupation') }}" autocomplete="organization-title" maxlength="150" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">
                            @error('occupation')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="telephone_home" class="block text-sm font-bold text-forest">Telephone (Home)</label>
                            <input id="telephone_home" name="telephone_home" type="tel" value="{{ old('telephone_home') }}" autocomplete="tel" maxlength="30" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">
                            @error('telephone_home')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="telephone_work" class="block text-sm font-bold text-forest">Telephone (Work)</label>
                            <input id="telephone_work" name="telephone_work" type="tel" value="{{ old('telephone_work') }}" maxlength="30" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">
                            @error('telephone_work')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="mobile_phone" class="block text-sm font-bold text-forest">Mobile phone <span class="text-maroon">*</span></label>
                            <input id="mobile_phone" name="mobile_phone" type="tel" value="{{ old('mobile_phone') }}" autocomplete="tel" maxlength="30" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('mobile_phone')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-bold text-forest">Email address <span class="text-maroon">*</span></label>
                            <input id="email" name="email" type="email" value="{{ old('email') }}" autocomplete="email" maxlength="150" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('email')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </fieldset>

                <fieldset class="card !p-6 sm:!p-9">
                    <legend class="px-2 font-serif text-3xl font-semibold text-forest">Health information</legend>
                    <p class="mt-4 leading-7 text-ink/60">Please share information relevant to your safe participation in Yoga and retreat activities.</p>
                    <div class="mt-6 grid gap-6">
                        <div>
                            <label for="illnesses" class="block text-sm font-bold text-forest">Illnesses or health conditions</label>
                            <textarea id="illnesses" name="illnesses" rows="3" maxlength="1000" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">{{ old('illnesses') }}</textarea>
                            @error('illnesses')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="prescribed_medication" class="block text-sm font-bold text-forest">Prescribed medication</label>
                            <textarea id="prescribed_medication" name="prescribed_medication" rows="3" maxlength="1000" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">{{ old('prescribed_medication') }}</textarea>
                            @error('prescribed_medication')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </fieldset>

                <fieldset class="card !p-6 sm:!p-9">
                    <legend class="px-2 font-serif text-3xl font-semibold text-forest">Emergency contact</legend>
                    <div class="mt-5 grid gap-6 md:grid-cols-2">
                        <div class="md:col-span-2">
                            <label for="emergency_name" class="block text-sm font-bold text-forest">Contact name <span class="text-maroon">*</span></label>
                            <input id="emergency_name" name="emergency_name" type="text" value="{{ old('emergency_name') }}" maxlength="150" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('emergency_name')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div class="md:col-span-2">
                            <label for="emergency_address" class="block text-sm font-bold text-forest">Address <span class="text-maroon">*</span></label>
                            <textarea id="emergency_address" name="emergency_address" rows="3" maxlength="1000" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>{{ old('emergency_address') }}</textarea>
                            @error('emergency_address')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="emergency_email" class="block text-sm font-bold text-forest">Email</label>
                            <input id="emergency_email" name="emergency_email" type="email" value="{{ old('emergency_email') }}" maxlength="150" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">
                            @error('emergency_email')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="emergency_relationship" class="block text-sm font-bold text-forest">Relationship <span class="text-maroon">*</span></label>
                            <input id="emergency_relationship" name="emergency_relationship" type="text" value="{{ old('emergency_relationship') }}" maxlength="100" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('emergency_relationship')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="emergency_mobile" class="block text-sm font-bold text-forest">Mobile phone <span class="text-maroon">*</span></label>
                            <input id="emergency_mobile" name="emergency_mobile" type="tel" value="{{ old('emergency_mobile') }}" maxlength="30" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                            @error('emergency_mobile')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="emergency_landline" class="block text-sm font-bold text-forest">Landline</label>
                            <input id="emergency_landline" name="emergency_landline" type="tel" value="{{ old('emergency_landline') }}" maxlength="30" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">
                            @error('emergency_landline')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>
                    </div>
                </fieldset>

                <fieldset class="card !p-6 sm:!p-9">
                    <legend class="px-2 font-serif text-3xl font-semibold text-forest">Experience, photo & declaration</legend>
                    <div class="mt-5 grid gap-6">
                        <div>
                            <label for="yoga_experience" class="block text-sm font-bold text-forest">Length of time practicing Yoga</label>
                            <textarea id="yoga_experience" name="yoga_experience" rows="3" maxlength="500" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20">{{ old('yoga_experience') }}</textarea>
                            @error('yoga_experience')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="applicant_photo" class="block text-sm font-bold text-forest">Applicant photo <span class="text-maroon">*</span></label>
                            <label for="applicant_photo" class="mt-2 flex cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-saffron/30 bg-sandal/30 px-6 py-10 text-center transition hover:border-saffron hover:bg-sandal/50">
                                <svg class="size-9 text-maroon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 16.5V18a3 3 0 003 3h12a3 3 0 003-3v-1.5M16 8l-4-4m0 0L8 8m4-4v12"/></svg>
                                <strong class="mt-3 text-forest">Choose a photograph</strong>
                                <span data-file-name class="mt-1 text-sm text-ink/55">JPG, PNG or WebP, maximum 5 MB</span>
                            </label>
                            <input id="applicant_photo" name="applicant_photo" type="file" accept="image/jpeg,image/png,image/webp" data-photo-input class="sr-only" required>
                            @error('applicant_photo')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="supporting_documents" class="block text-sm font-bold text-forest">Additional attachments</label>
                            <label for="supporting_documents" class="mt-2 flex cursor-pointer flex-col items-center justify-center rounded-2xl border-2 border-dashed border-saffron/30 bg-white px-6 py-10 text-center transition hover:border-saffron hover:bg-sandal/30">
                                <svg class="size-9 text-maroon" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M18.375 12.739l-7.693 7.693a4.5 4.5 0 01-6.364-6.364l10.94-10.94a3 3 0 114.243 4.243L8.552 18.32a1.5 1.5 0 11-2.121-2.121l9.886-9.886"/></svg>
                                <strong class="mt-3 text-forest">Attach supporting files</strong>
                                <span data-supporting-files-name class="mt-1 text-sm text-ink/55">Optional: PDF, Word or image files, maximum 5 files / 10 MB each</span>
                            </label>
                            <input id="supporting_documents" name="supporting_documents[]" type="file" accept="image/jpeg,image/png,image/webp,application/pdf,.doc,.docx" multiple class="sr-only">
                            @error('supporting_documents')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                            @error('supporting_documents.*')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                        </div>

                        <div class="grid gap-6 md:grid-cols-2">
                            <div>
                                <label for="signature" class="block text-sm font-bold text-forest">Signature (type your full name) <span class="text-maroon">*</span></label>
                                <input id="signature" name="signature" type="text" value="{{ old('signature') }}" maxlength="150" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 font-serif text-xl italic outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                                @error('signature')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="signature_date" class="block text-sm font-bold text-forest">Date <span class="text-maroon">*</span></label>
                                <input id="signature_date" name="signature_date" type="date" value="{{ old('signature_date', now()->format('Y-m-d')) }}" class="mt-2 w-full rounded-xl border border-saffron/20 px-4 py-3 outline-none transition focus:border-saffron focus:ring-2 focus:ring-saffron/20" required>
                                @error('signature_date')<p class="mt-2 text-sm text-red-700">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <label class="flex items-start gap-3 rounded-2xl bg-sandal/50 p-5">
                            <input name="declaration" type="checkbox" value="1" @checked(old('declaration')) class="mt-1 size-5 shrink-0 accent-maroon" required>
                            <span class="leading-7 text-ink/70">I confirm that the information provided is accurate and understand that relevant health information is required for safe participation. <span class="text-maroon">*</span></span>
                        </label>
                        @error('declaration')<p class="text-sm text-red-700">{{ $message }}</p>@enderror
                    </div>
                </fieldset>

                <div class="rounded-3xl bg-forest p-6 text-white sm:flex sm:items-center sm:justify-between sm:p-8">
                    <p class="max-w-2xl text-sm leading-7 text-white/70">Your application and photograph will be emailed securely to the JJK Gurukulam team for review.</p>
                    <button type="submit" class="btn-primary mt-5 !bg-saffron hover:!bg-maroon disabled:cursor-wait disabled:opacity-75 sm:mt-0" data-application-submit>
                        <svg class="mr-2 hidden size-4 animate-spin" data-application-spinner viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle class="opacity-25" cx="12" cy="12" r="9" stroke="currentColor" stroke-width="3"></circle><path class="opacity-90" fill="currentColor" d="M21 12a9 9 0 0 0-9-9v3a6 6 0 0 1 6 6h3z"></path></svg>
                        <span data-application-submit-label>Submit application</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
