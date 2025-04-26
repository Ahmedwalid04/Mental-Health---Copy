


<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Therapist Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(to bottom, #ebf4ff, #ffffff);
            color: #1f2937;
            padding: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .profile-container {
            position: relative;
            max-width: 36rem;
            width: 100%;
            background-color: #ffffff;
            border-radius: 1.5rem;
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.2);
            padding: 2.5rem 2.5rem 3rem;
            border: 1px solid #bfdbfe;
        }
        .exit-button {
            position: absolute;
            top: 1.25rem;
            right: 1.25rem;
            background: transparent;
            border: none;
            color: #2563eb;
            font-size: 1.25rem;
            cursor: pointer;
            padding: 0.25rem;
            border-radius: 50%;
            transition: background-color 0.2s ease, color 0.2s ease;
        }
        .exit-button:hover,
        .exit-button:focus {
            background-color: #2563eb;
            color: white;
            outline: none;
        }
        .profile-header {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        .profile-avatar {
            width: 6rem;
            height: 6rem;
            border-radius: 9999px;
            object-fit: cover;
            border: 4px solid #93c5fd;
            box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
            background-color: #e0e7ff;
            flex-shrink: 0;
        }
        .profile-name {
            font-size: 1.875rem;
            font-weight: 800;
            color: #1e40af;
            margin: 0;
            line-height: 1.1;
        }
        .profile-title {
            color: #3b82f6;
            font-size: 1.125rem;
            font-weight: 600;
            margin: 0.25rem 0 0 0;
        }
        h3.section-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e40af;
            margin-bottom: 0.75rem;
            margin-top: 0;
            border-bottom: 2px solid #bfdbfe;
            padding-bottom: 0.25rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        h3.section-title i {
            color: #3b82f6;
            font-size: 1.25rem;
        }
        p.section-text {
            color: #374151;
            font-size: 1rem;
            line-height: 1.6;
            margin-top: 0;
            margin-bottom: 1.25rem;
        }
        ul.section-list {
            list-style-type: disc;
            padding-left: 1.5rem;
            color: #374151;
            margin-top: 0;
            margin-bottom: 1.25rem;
        }
        ul.section-list li {
            margin-bottom: 0.4rem;
            font-size: 1rem;
        }
        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
        }
        .tag-pill {
            background-color: #dbeafe;
            color: #1e40af;
            font-size: 0.875rem;
            font-weight: 600;
            padding: 0.3rem 1rem;
            border-radius: 9999px;
            user-select: none;
            white-space: nowrap;
            box-shadow: 0 1px 3px rgba(59, 130, 246, 0.3);
        }
        .price-section p {
            color: #374151;
            font-size: 1.125rem;
            margin: 0;
        }
        .price-section p span {
            font-weight: 700;
            color: #1e40af;
            margin-right: 0.5rem;
        }
        @media (max-width: 640px) {
            .profile-container {
                padding: 2rem 1.5rem 2.5rem;
            }
            .profile-name {
                font-size: 1.5rem;
            }
            .profile-title {
                font-size: 1rem;
            }
            h3.section-title {
                font-size: 1.125rem;
            }
        }
    </style>
</head>
<body>
<div class="profile-container" role="main" aria-label="Therapist profile">
    <button
        type="button"
        class="exit-button"
        aria-label="Close profile"
        onclick="window.location.href='{{ route('sessions') }}'"
    >
        Close

    <i class="fas fa-times" aria-hidden="true"></i>
    </button>

    <div class="profile-header">
        <img
            src="{{ asset('storage/' . $therapist->profile_image) }}"
            alt="{{ $therapist->user->name }}'s profile image, a professional headshot with a soft blue background"
            loading="lazy"
            width="96"
            height="96"
            class="profile-avatar"
        >
        <div>
            <h2 class="profile-name">{{ $therapist->user->name }}</h2>
            <p class="profile-title">{{ $therapist->title ?? 'Therapist' }}</p>
        </div>
    </div>

    @if($therapist->bio)
        <section>
            <h3 class="section-title"><i class="fas fa-info-circle" aria-hidden="true"></i> Bio</h3>
            <p class="section-text">{{ $therapist->bio }}</p>
        </section>
    @endif

    @if($therapist->experience)
        <section>
            <h3 class="section-title"><i class="fas fa-briefcase" aria-hidden="true"></i> Experience</h3>
            <ul class="section-list">
                @foreach(json_decode($therapist->experience, true) as $exp)
                    <li>{{ $exp }}</li>
                @endforeach
            </ul>
        </section>
    @endif

    @if($therapist->qualifications)
        <section>
            <h3 class="section-title"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Qualifications</h3>
            <ul class="section-list">
                @foreach(json_decode($therapist->qualifications, true) as $qual)
                    <li>{{ $qual }}</li>
                @endforeach
            </ul>
        </section>
    @endif

    @if($therapist->specializations)
        <section>
            <h3 class="section-title"><i class="fas fa-tags" aria-hidden="true"></i> Specializations</h3>
            <div class="tags-container">
                @foreach(json_decode($therapist->specializations, true) as $tag)
                    <span class="tag-pill">{{ $tag }}</span>
                @endforeach
            </div>
        </section>
    @endif

    @if($therapist->price_per_half_hour)
        <section class="price-section" style="margin-top:1.5rem;">
            <h3 class="section-title"><i class="fas fa-dollar-sign" aria-hidden="true"></i> Session Price</h3>
            <p><span>30 minutes:</span> {{ $therapist->price_per_half_hour }} EGP</p>
        </section>
    @endif
</div>
</body>
</html>
