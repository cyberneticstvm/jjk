<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>New Retreat Application</title>
</head>
<body style="margin:0;background:#f5ead7;color:#28231f;font-family:Arial,sans-serif;">
    <div style="max-width:760px;margin:0 auto;padding:32px 16px;">
        <div style="background:#173f32;color:#fff;padding:28px;border-radius:16px 16px 0 0;">
            <div style="font-size:12px;letter-spacing:2px;text-transform:uppercase;color:#d3a64b;">JJK Gurukulam</div>
            <h1 style="margin:8px 0 0;font-family:Georgia,serif;font-size:32px;">New Retreat Application</h1>
            <p style="margin:10px 0 0;color:#dce8e3;">{{ $application['name'] }} · {{ $application['retreat_location'] }}</p>
        </div>

        <div style="background:#fff;padding:28px;border-radius:0 0 16px 16px;">
            @php
                $sections = [
                    'Retreat details' => [
                        'Retreat location' => $application['retreat_location'],
                        'Other location' => $application['other_location'] ?? null,
                        'From date' => $application['from_date'],
                        'To date' => $application['to_date'],
                    ],
                    'Applicant details' => [
                        'Full name' => $application['name'],
                        'Gender' => $application['gender'],
                        'Date of birth' => $application['date_of_birth'],
                        'Address' => $application['address'],
                        'State / Province' => $application['state'],
                        'Country' => $application['country'],
                        'ZIP / Postal code' => $application['zip_code'],
                        'Telephone (Home)' => $application['telephone_home'] ?? null,
                        'Telephone (Work)' => $application['telephone_work'] ?? null,
                        'Mobile phone' => $application['mobile_phone'],
                        'Email' => $application['email'],
                        'Occupation' => $application['occupation'] ?? null,
                    ],
                    'Health information' => [
                        'Illnesses or health conditions' => $application['illnesses'] ?? null,
                        'Prescribed medication' => $application['prescribed_medication'] ?? null,
                    ],
                    'Emergency contact' => [
                        'Contact name' => $application['emergency_name'],
                        'Address' => $application['emergency_address'],
                        'Email' => $application['emergency_email'] ?? null,
                        'Mobile phone' => $application['emergency_mobile'],
                        'Landline' => $application['emergency_landline'] ?? null,
                        'Relationship' => $application['emergency_relationship'],
                    ],
                    'Experience & declaration' => [
                        'Yoga experience' => $application['yoga_experience'] ?? null,
                        'Signature' => $application['signature'],
                        'Signature date' => $application['signature_date'],
                    ],
                ];
            @endphp

            @foreach($sections as $heading => $fields)
                <h2 style="margin:{{ $loop->first ? '0' : '28px' }} 0 12px;color:#681f27;font-family:Georgia,serif;font-size:22px;">{{ $heading }}</h2>
                <table role="presentation" style="width:100%;border-collapse:collapse;">
                    @foreach($fields as $label => $value)
                        @if(filled($value))
                            <tr>
                                <th style="width:34%;padding:10px;border-bottom:1px solid #eee3d3;text-align:left;vertical-align:top;font-size:13px;color:#635c54;">{{ $label }}</th>
                                <td style="padding:10px;border-bottom:1px solid #eee3d3;vertical-align:top;white-space:pre-line;">{{ $value }}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            @endforeach

            <p style="margin:28px 0 0;padding:16px;background:#fcf8ef;border-radius:10px;color:#635c54;font-size:13px;">The applicant photograph is attached to this email.</p>
        </div>
    </div>
</body>
</html>
