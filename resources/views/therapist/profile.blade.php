<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Profile Page</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
        body {
            margin: 0;
            background-color: #add1e6;
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 24px;
            box-sizing: border-box;
        }
        .container {
            background-color: #fff9f0;
            max-width: 960px;
            width: 100%;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            padding: 32px;
            position: relative;
            color: #1e40af;
            font-size: 14px;
            line-height: 1.4;
        }
        .edit-btn {
            position: absolute;
            top: 32px;
            right: 32px;
            background-color: #1e40af;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
        }
        .favorite-btn {
            position: absolute;
            top: 72px;
            right: 32px;
            background-color: #e9eef7;
            border: none;
            border-radius: 9999px;
            padding: 4px 16px;
            color: #1e40af;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        .favorite-btn i {
            margin-right: 6px;
        }
        .profile-section {
            display: flex;
            flex-direction: column;
            gap: 32px;
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
            gap: 16px;
            min-width: 200px;
        }
        @media (min-width: 640px) {
            .left-column {
                align-items: flex-start;
            }
        }
        .profile-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #ccc;
        }
        .therapist-name {
            font-weight: 600;
            font-size: 18px;
            color: #1e40af;
        }
        .price-input-container {
            display: flex;
            align-items: center;
            gap: 4px;
            color: #1e40af;
            font-size: 14px;
        }
        .price-input {
            border: none;
            border-bottom: 1.5px solid #1e40af;
            width: 64px;
            background: transparent;
            color: #1e40af;
            font-size: 14px;
            padding: 2px 4px;
            outline-offset: 2px;
        }
        .price-input:focus {
            outline: 2px solid #1e40af;
            outline-offset: 2px;
        }
        .right-column {
            flex: 1;
            color: #1e40af;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.4;
        }
        .section {
            max-width: 600px;
            margin-bottom: 48px;
        }
        .section h3 {
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 8px;
        }
        .section p {
            margin: 4px 0;
            color: #1e40af;
            font-size: 14px;
        }
        .about-me-textarea {
            width: 100%;
            min-height: 80px;
            border: 1px solid #1e40af;
            border-radius: 4px;
            background: transparent;
            color: #1e40af;
            font-size: 14px;
            padding: 8px;
            resize: none;
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
        }
        .about-me-textarea::placeholder {
            color: rgba(30, 64, 175, 0.5);
        }
        .specialties-container {
            max-width: 720px;
            margin: 0 auto;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            padding: 0 8px;
            justify-content: center;
        }
        .specialties-container h3 {
            width: 100%;
            font-weight: 700;
            font-size: 14px;
            margin-left: 110px;
            color: #1e40af;
        }
        .specialty-pill {
            background-color: #e9eef7;
            color: #1e40af;
            font-size: 12px;
            border-radius: 9999px;
            padding: 4px 12px;
            user-select: none;
            cursor: default;
            white-space: nowrap;
        }
        .logout-btn {
            position: absolute;
            top: 120px;
            right: 32px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
</head>
<body>
<div class="container">
    <a href="{{ route('profile.edit') }}">
        <button class="edit-btn" type="button">Edit Profile</button>
    </a>

    <button class="favorite-btn" aria-label="Favorite toggle" type="button">
        <i class="far fa-star"></i>
    </button>

    <div class="profile-section">
        <div class="left-column">
            <img
                src="https://storage.googleapis.com/a1aa/image/aa68b611-68d9-413e-698b-758e6495f474.jpg"
                alt="Placeholder image of a circle 200 by 200 pixels"
                class="profile-image"
                width="200"
                height="200"
            />
            <div class="therapist-name">
                @auth
                    <span>{{ Auth::user()->name }}</span>
                @endauth
            </div>
            <div class="price-input-container">
                <span>EGP</span>
                @auth
                    <span>{{ number_format(Auth::user()->therapistProfile->price_per_half_hour ?? 0) }}</span>
                @endauth
                <span>/ 30min</span>
            </div>
        </div>
        <div class="right-column">
            <div class="section">
                <h3>Qualifications</h3>
                @auth
                    @foreach(json_decode(Auth::user()->therapistProfile->qualifications ?? '[]') as $qualification)
                        <p>{{ $qualification }}</p>
                    @endforeach
                @endauth
            </div>
            <div class="section">
                <h3>Experience</h3>
                @auth
                    @foreach(json_decode(Auth::user()->therapistProfile->experience ?? '[]') as $exp)
                        <p>{{ $exp }}</p>
                    @endforeach
                @endauth
            </div>

            <div class="section">
                <h3>About Me</h3>
                <textarea
                    aria-label="About me input"
                    class="about-me-textarea"
                    readonly
                >{{ Auth::user()->therapistProfile->bio ?? '' }}</textarea>
            </div>
        </div>
    </div>

    <div class="specialties-container">
        <h3>Specialties</h3>
        @auth
            @foreach(json_decode(Auth::user()->therapistProfile->specializations ?? '[]') as $specialty)
                <span class="specialty-pill">{{ $specialty }}</span>
            @endforeach
        @endauth
    </div>

    <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="logout-btn">Logout</button>
    </form>

</div>
</body>
</html>
