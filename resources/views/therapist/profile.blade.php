<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Profile Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        /* Reset and base */
        *, *::before, *::after {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background: linear-gradient(135deg, #a3cef1 0%, #f0f7ff 100%);
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 24px;
            color: #1e40af;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .container {
            background-color: #fffefa;
            max-width: 960px;
            width: 100%;
            border-radius: 12px;
            box-shadow:
                0 4px 8px rgba(30, 64, 175, 0.1),
                0 12px 24px rgba(30, 64, 175, 0.15);
            padding: 40px 48px 48px;
            position: relative;
            font-size: 15px;
            line-height: 1.5;
            transition: box-shadow 0.3s ease;
        }
        .container:hover {
            box-shadow:
                0 6px 12px rgba(30, 64, 175, 0.15),
                0 18px 36px rgba(30, 64, 175, 0.25);
        }
        /* Buttons */
        .edit-btn, .logout-btn, .favorite-btn {
            position: absolute;
            right: 32px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(30, 64, 175, 0.2);
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            user-select: none;
        }
        .edit-btn {
            top: 32px;
            background-color: #1e40af;
            color: white;
            padding: 10px 20px;
        }
        .edit-btn:hover,
        .edit-btn:focus {
            background-color: #3b82f6;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.5);
            outline: none;
        }
        .favorite-btn {
            top: 80px;
            background-color: #e9eef7;
            color: #1e40af;
            padding: 8px 18px;
            border-radius: 9999px;
            gap: 8px;
            font-size: 14px;
            width: max-content;
            box-shadow: 0 2px 6px rgba(30, 64, 175, 0.15);
        }
        .favorite-btn i {
            font-size: 18px;
            transition: color 0.3s ease;
        }
        .favorite-btn:hover,
        .favorite-btn:focus {
            background-color: #3b82f6;
            color: white;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.6);
            outline: none;
        }
        .favorite-btn:hover i,
        .favorite-btn:focus i {
            color: #dbeafe;
        }
        .logout-btn {
            top: 128px;
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            box-shadow: 0 2px 6px rgba(231, 76, 60, 0.3);
        }
        .logout-btn:hover,
        .logout-btn:focus {
            background-color: #c0392b;
            box-shadow: 0 4px 12px rgba(192, 57, 43, 0.6);
            outline: none;
        }
        /* Profile Section */
        .profile-section {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }
        @media (min-width: 640px) {
            .profile-section {
                flex-direction: row;
                align-items: flex-start;
            }
        }
        .left-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            min-width: 220px;
            flex-shrink: 0;
        }
        @media (min-width: 640px) {
            .left-column {
                align-items: flex-start;
            }
        }
        .profile-image {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #cbd5e1;
            box-shadow:
                0 8px 20px rgba(30, 64, 175, 0.15);
            border: 6px solid #93c5fd;
            transition: transform 0.3s ease;
        }
        .profile-image:hover,
        .profile-image:focus {
            transform: scale(1.05);
            outline: none;
        }
        .therapist-name {
            font-weight: 700;
            font-size: 22px;
            color: #1e40af;
            text-align: center;
            user-select: text;
        }
        @media (min-width: 640px) {
            .therapist-name {
                text-align: left;
            }
        }
        .price-input-container {
            display: flex;
            align-items: baseline;
            gap: 6px;
            color: #1e40af;
            font-size: 15px;
            font-weight: 600;
            user-select: text;
        }
        .price-input-container span {
            background: #dbeafe;
            padding: 4px 10px;
            border-radius: 6px;
            box-shadow: inset 0 1px 3px rgba(59, 130, 246, 0.3);
        }
        /* Right Column */
        .right-column {
            flex: 1;
            color: #1e40af;
            font-size: 15px;
            font-weight: 400;
            line-height: 1.6;
        }
        .section {
            max-width: 600px;
            margin-bottom: 56px;
        }
        .section h3 {
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 12px;
            border-bottom: 2px solid #bfdbfe;
            padding-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
            user-select: none;
        }
        .section h3 i {
            color: #3b82f6;
            font-size: 18px;
        }
        .section p {
            margin: 6px 0;
            color: #334155;
            font-size: 15px;
            line-height: 1.5;
            user-select: text;
        }
        /* About Me Textarea */
        .about-me-textarea {
            width: 100%;
            min-height: 100px;
            border: 2px solid #93c5fd;
            border-radius: 8px;
            background: #f0f9ff;
            color: #1e40af;
            font-size: 15px;
            padding: 14px 16px;
            resize: none;
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
            line-height: 1.5;
            user-select: text;
            transition: border-color 0.3s ease;
        }
        .about-me-textarea::placeholder {
            color: rgba(30, 64, 175, 0.5);
        }
        .about-me-textarea:focus {
            border-color: #3b82f6;
            outline: none;
            background: #e0f2fe;
        }
        /* Specialties Container */
        .specialties-container {
            max-width: 720px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            padding: 0 8px;
            justify-content: center;
            user-select: none;
        }
        .specialties-container h3 {
            width: 100%;
            font-weight: 700;
            font-size: 16px;
            margin-left: 120px;
            color: #1e40af;
            border-bottom: 2px solid #bfdbfe;
            padding-bottom: 6px;
            margin-bottom: 16px;
        }
        .specialty-pill {
            background-color: #dbeafe;
            color: #1e40af;
            font-size: 13px;
            font-weight: 600;
            border-radius: 9999px;
            padding: 6px 16px;
            box-shadow: 0 2px 6px rgba(59, 130, 246, 0.3);
            cursor: default;
            white-space: nowrap;
            transition: background-color 0.3s ease;
        }
        .specialty-pill:hover {
            background-color: #93c5fd;
            color: white;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.6);
        }
        /* Responsive tweaks */
        @media (max-width: 639px) {
            .container {
                padding: 32px 24px 32px;
            }
            .edit-btn {
                top: 24px;
                right: 24px;
                padding: 8px 16px;
            }
            .favorite-btn {
                top: 64px;
                right: 24px;
                padding: 6px 14px;
                font-size: 13px;
            }
            .logout-btn {
                top: 104px;
                right: 24px;
                padding: 8px 16px;
                font-size: 13px;
            }
            .profile-image {
                width: 180px;
                height: 180px;
            }
            .therapist-name {
                font-size: 20px;
            }
            .price-input-container {
                font-size: 14px;
            }
            .section h3 {
                font-size: 15px;
                margin-left: 0;
            }
            .specialties-container h3 {
                margin-left: 0;
            }
        }
    </style>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
</head>
<body>
<div class="container" role="main" aria-label="Therapist profile page">
    <a href="{{ route('profile.edit') }}">
        <button class="edit-btn" type="button" aria-label="Edit Profile">Edit Profile</button>
    </a>


    <div class="profile-section">
        <div class="left-column">
            <img
                src="https://storage.googleapis.com/a1aa/image/aa68b611-68d9-413e-698b-758e6495f474.jpg"
                alt="Professional headshot of therapist, a smiling person with soft blue background"
                class="profile-image"
                width="220"
                height="220"
                tabindex="0"
            />
            <div class="therapist-name" tabindex="0">
                @auth
                    <span>{{ Auth::user()->name }}</span>
                @endauth
            </div>
            <div class="price-input-container" tabindex="0" aria-label="Session price per 30 minutes">
                <span>EGP</span>
                @auth
                    <span>{{ number_format(Auth::user()->therapistProfile->price_per_half_hour ?? 0) }}</span>
                @endauth
                <span>/ 30min</span>
            </div>
        </div>
        <div class="right-column">
            <div class="section" aria-labelledby="qualifications-title">
                <h3 id="qualifications-title"><i class="fas fa-graduation-cap" aria-hidden="true"></i> Qualifications</h3>
                @auth
                <p>{{ Auth::user()->therapistProfile->qualifications ?? 'No qualifications listed.' }}</p>
                @endauth
            </div>
            <div class="section" aria-labelledby="experience-title">
                <h3 id="experience-title"><i class="fas fa-briefcase" aria-hidden="true"></i> Experience</h3>
                @auth
                <p>{{ Auth::user()->therapistProfile->experience ?? 'No experience listed.' }}</p>

                    
                @endauth
            </div>

            <div class="section" aria-labelledby="aboutme-title">
                <h3 id="aboutme-title"><i class="fas fa-info-circle" aria-hidden="true"></i> About Me</h3>
                <textarea
                    aria-label="About me input"
                    class="about-me-textarea"
                    readonly
                    tabindex="0"
                >{{ Auth::user()->therapistProfile->bio ?? '' }}</textarea>
            </div>
        </div>
    </div>

    <div class="specialties-container" aria-label="Specialties">
        <h3>Specialties</h3>
        @auth
        <p>{{ Auth::user()->therapistProfile->specializations ?? 'No specialties listed.' }}</p>
        @endauth
    </div>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="logout-btn" aria-label="Logout">Logout</button>
    </form>

</div>
</body>
</html>
