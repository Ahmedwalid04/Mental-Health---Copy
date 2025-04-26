<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Edit Profile</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arial&display=swap');
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            background-color: #c3d7ea;
            font-family: Arial, sans-serif;
            color: #4b5563;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 24px;
        }
        main {
            background-color: #fff8f0;
            max-width: 600px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
            padding: 32px 40px;
        }
        h1 {
            font-weight: 700;
            font-size: 28px;
            color: #1a2a52;
            margin-bottom: 32px;
            text-align: center;
            letter-spacing: 0.03em;
        }
        form > div {
            margin-bottom: 24px;
        }
        label {
            display: block;
            font-weight: 700;
            font-size: 14px;
            color: #1a2a52;
            margin-bottom: 8px;
            letter-spacing: 0.02em;
        }
        input[type="file"] {
            font-size: 14px;
            color: #4b5563;
            cursor: pointer;
        }
        input[type="number"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 14px;
            font-size: 14px;
            color: #374151;
            border: 2px solid #3b4a9a;
            border-radius: 8px;
            font-family: Arial, sans-serif;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            resize: none;
        }
        input[type="number"]:focus,
        input[type="text"]:focus,
        textarea:focus {
            border-color: #1a2a52;
            box-shadow: 0 0 8px rgba(59, 74, 154, 0.5);
            outline: none;
        }
        textarea {
            min-height: 96px;
            line-height: 1.4;
        }
        img {
            display: block;
            max-width: 120px;
            max-height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            border: 3px solid #3b4a9a;
        }
        .error-message {
            color: #dc2626;
            font-size: 12px;
            margin-top: 6px;
            font-weight: 600;
        }
        button[type="submit"] {
            background-color: #3b4a9a;
            color: white;
            font-weight: 700;
            font-size: 16px;
            border: none;
            padding: 14px 0;
            width: 100%;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            letter-spacing: 0.05em;
        }
        button[type="submit"]:hover {
            background-color: #2c3673;
        }
        @media (max-width: 480px) {
            main {
                padding: 24px 20px;
            }
            h1 {
                font-size: 24px;
                margin-bottom: 24px;
            }
            img {
                max-width: 100px;
                max-height: 100px;
                margin-bottom: 10px;
            }
            button[type="submit"] {
                font-size: 14px;
                padding: 12px 0;
            }
        }
    </style>
</head>
<body>
<main>
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.save') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf

        <!-- Profile Image -->
        <div>
            <label for="profile_image">Profile Image</label>
            @if($profile && $profile->profile_image)
                <img src="{{ asset('storage/'.$profile->profile_image) }}" alt="Profile image of user" />
            @endif
            <input type="file" name="profile_image" id="profile_image" accept="image/*" />
            @error('profile_image')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <!-- Bio -->
        <div>
            <label for="bio">Bio</label>
            <textarea name="bio" id="bio" rows="4" placeholder="Write a short bio about yourself...">{{ old('bio', $profile->bio ?? '') }}</textarea>
            @error('bio')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <!-- Price per 30m -->
        <div>
            <label for="price_per_half_hour">Price per 30 min ($)</label>
            <input type="number" name="price_per_half_hour" id="price_per_half_hour" step="0.01" min="0" value="{{ old('price_per_half_hour', $profile->price_per_half_hour ?? 0) }}" placeholder="e.g. 50.00" />
            @error('price_per_half_hour')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <!-- Qualifications -->
        <div>
            <label for="qualifications">Qualifications (one per line)</label>
            <textarea name="qualifications" id="qualifications" rows="3" placeholder="List your qualifications, one per line">{{ old('qualifications', is_array($profile->qualifications ?? null) ? implode("\n", $profile->qualifications) : ($profile->qualifications ?? '')) }}</textarea>
            @error('qualifications')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <!-- Experience -->
        <div>
            <label for="experience">Experience (one per line)</label>
            <textarea name="experience" id="experience" rows="3" placeholder="List your experience, one per line">{{ old('experience', is_array($profile->experience ?? null) ? implode("\n", $profile->experience) : ($profile->experience ?? '')) }}</textarea>
            @error('experience')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <!-- Specializations -->
        <div>
            <label for="specializations">Specializations (one per line)</label>
            <textarea name="specializations" id="specializations" rows="3" placeholder="List your specializations, one per line">{{ old('specializations', is_array($profile->specializations ?? null) ? implode("\n", $profile->specializations) : ($profile->specializations ?? '')) }}</textarea>
            @error('specializations')
            <span class="error-message">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">{{ $profile ? 'Update Profile' : 'Create Profile' }}</button>
    </form>
</main>
</body>
</html>
