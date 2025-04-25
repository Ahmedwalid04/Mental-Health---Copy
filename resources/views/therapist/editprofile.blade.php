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
            color: #6b7280;
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
            border-radius: 6px;
            box-shadow: 0 2px 6px rgb(0 0 0 / 0.1);
            padding: 24px;
        }
        h2 {
            font-weight: 600;
            font-size: 14px;
            color: #1a2a52;
            margin: 0;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        .btn-primary {
            background-color: #3b4a9a;
            color: white;
            font-weight: 600;
            font-size: 12px;
            border: none;
            padding: 6px 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-secondary {
            font-size: 12px;
            color: #6b7280;
            background: transparent;
            border: 1px solid #d1d5db;
            padding: 6px 16px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 8px;
        }
        section {
            background-color: #fff8f0;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            padding: 16px;
            margin-bottom: 16px;
        }
        label.section-title {
            font-weight: 600;
            font-size: 10px;
            color: #1a2a52;
            display: block;
            margin-bottom: 8px;
        }
        .basic-info {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }
        .profile-pic-wrapper {
            position: relative;
            margin-right: 16px;
        }
        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #c3c3c3;
            object-fit: cover;
            display: block;
        }
        .add-btn-circle {
            position: absolute;
            bottom: -4px;
            right: -4px;
            background-color: #3b4a9a;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid white;
            font-weight: 700;
            font-size: 16px;
            line-height: 18px;
            text-align: center;
            cursor: pointer;
            user-select: none;
        }
        .basic-info-inputs {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        input[type="text"], textarea {
            font-size: 12px;
            color: #6b7280;
            border: 1px solid #3b4a9a;
            border-radius: 4px;
            padding: 6px 8px;
            font-family: Arial, sans-serif;
            outline: none;
            width: 100%;
        }
        input[type="text"]:focus, textarea:focus {
            border-color: #3b4a9a;
            box-shadow: 0 0 3px #3b4a9a;
        }
        .session-rate {
            display: flex;
            align-items: center;
            font-size: 10px;
            color: #6b7280;
            gap: 4px;
        }
        .session-rate label {
            font-weight: 600;
            font-size: 10px;
            color: #1a2a52;
        }
        .session-rate input {
            width: 48px;
            padding: 4px 6px;
            font-size: 12px;
            border: 1px solid #3b4a9a;
            border-radius: 4px;
            color: #6b7280;
            outline: none;
        }
        .session-rate input:focus {
            border-color: #3b4a9a;
            box-shadow: 0 0 3px #3b4a9a;
        }
        .input-with-button {
            display: flex;
            gap: 8px;
        }
        .input-with-button input[type="text"] {
            flex-grow: 1;
        }
        .input-with-button button {
            background-color: #3b4a9a;
            color: white;
            font-weight: 600;
            font-size: 12px;
            border: none;
            padding: 6px 16px;
            border-radius: 4px;
            cursor: pointer;
            white-space: nowrap;
        }
        textarea {
            resize: none;
            height: 80px;
        }
        @media (max-width: 480px) {
            main {
                padding: 16px;
            }
            .basic-info {
                flex-direction: column;
                align-items: flex-start;
            }
            .profile-pic-wrapper {
                margin-bottom: 12px;
            }
            .input-with-button {
                flex-direction: column;
            }
            .input-with-button button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<main>
    <form action="{{ route('profile.save') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Profile Image -->
        <div>
            <label>Profile Image</label><br>
            @if($profile && $profile->profile_image)
                <img src="{{ asset('storage/'.$profile->profile_image) }}" width="120"><br>
            @endif
            <input type="file" name="profile_image">
        </div>

        <!-- Bio -->
        <div>
            <label>Bio</label><br>
            <textarea name="bio" rows="4">{{ old('bio', $profile->bio ?? '') }}</textarea>
        </div>

        <!-- Price per 30m -->
        <div>
            <label>Price per 30 min ($)</label><br>
            <input type="number"
                   name="price_per_half_hour"
                   step="0.01"
                   value="{{ old('price_per_half_hour', $profile->price_per_half_hour ?? '') }}">
        </div>

        <!-- Qualifications -->
        <div>
            <label>Qualifications (one per line)</label><br>
            <textarea name="qualifications" rows="3">{{ old('qualifications', $profile ? implode("\n", json_decode($profile->qualifications, true)) : '') }}</textarea>
        </div>

        <!-- Experience -->
        <div>
            <label>Experience (one per line)</label><br>
            <textarea name="experience" rows="3">{{ old('experience', $profile ? implode("\n", json_decode($profile->experience, true)) : '') }}</textarea>
        </div>

        <!-- Specializations -->
        <div>
            <label>Specializations (one per line)</label><br>
            <textarea name="specializations" rows="3">{{ old('specializations', $profile ? implode("\n", json_decode($profile->specializations, true)) : '') }}</textarea>
        </div>

        <button type="submit">{{ $profile ? 'Update Profile' : 'Create Profile' }}</button>
    </form>

</main>
</body>
</html>
