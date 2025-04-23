<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet"
/>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css"
/>
<nav class="navbar">
    <div class="div">
        <div class="div-2">
            <a href="{{ url('/home') }}"><div class="div-3">Home</div></a>
            <a href="{{ url('/sessions') }}"><div class="div-4">Sessions</div></a>
            <a href="{{ url('/forum') }}"><div class="div-5">Forum</div></a>
            <a href="{{ url('/activities') }}"><div class="div-6">Activities</div></a>
            <a href="{{ url('/pricing') }}"><div class="div-7">Pricing</div></a>
            <a href="{{ url('/contact') }}"><div class="div-8">Contact</div></a>
            <a href="{{ url('/link') }}"><div class="div-9">Link</div></a>
        </div>


        <div class="div-10">
            <div class="div-11">
                <img
                    src="https://storage.googleapis.com/a1aa/image/b2532d30-fc43-451c-17d1-cc6c49ee7eb0.jpg"
                    alt="Avatar of a male psychologist with teal background"
                    class="avatar"
                    width="48"
                    height="48"
                    loading="lazy"
                />
            </div>
            <a href="{{ url('/profile') }}"><div class="div-12" >@auth
                    <span>{{ Auth::user()->name }}</span>
                @endauth
                </div></a>
        </div>
    </div>

</nav>

<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background-color: #f0f4f8;
        text-align: center;
    }
    .avatar {
        width: 30px;
        height: 30px;
        border-radius: 9999px;
        object-fit: cover;
        background-color: #14b8a6;
    }
    .div {
        display: flex;
        padding: 24px;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        background-color: #1e1e1e;
    }
    @media (max-width: 640px) {
        .div {
            flex-direction: column;
            gap: 16px;
            padding: 16px;
        }
    }
    .div-2 {
        display: flex;
        gap: 24px;
        align-items: center;
    }
    @media (max-width: 640px) {
        .div-2 {
            flex-wrap: wrap;
            justify-content: center;
        }
    }
    .div-3 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
    }
    .div-4 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
    }
    .div-5 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
    }
    .div-6 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
    }
    .div-7 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
    }
    .div-8 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
    }
    .div-9 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
    }
    .div-10 {
        display: flex;
        gap: 12px;
    }
    @media (max-width: 640px) {
        .div-10 {
            width: 100%;
            justify-content: center;
        }
    }
    .div-11 {

        border-radius: 4px;
        cursor: pointer;
        color: #fff;
        font: 16px "Inter", sans-serif;
    }
    .div-12 {
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        color: #1e1e1e;
        background-color: #fff;
        font: 16px "Inter", sans-serif;
    }
    .div-3:hover,
    .div-4:hover,
    .div-5:hover,
    .div-6:hover,
    .div-7:hover,
    .div-8:hover,
    .div-9:hover {
        background-color: #00385e; /* teal shade */
        color: #ffffff;
        transition: all 0.3s ease;
        transform: scale(1.05);
    }
    .div-12:hover {
        background-color: #00385e;
        color: #ffffff;
        transition: all 0.3s ease;
        transform: scale(1.05);
    }
    .div-11:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

</style>
