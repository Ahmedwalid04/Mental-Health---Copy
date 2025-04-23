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
            <a href="{{ url('/') }}"><div class="div-3">Home</div></a>
            <div class="div-4" onclick="showLogin()">Sessions</div>
            <div class="div-5" onclick="showLogin()">Forum</div>
            <div class="div-6" onclick="showLogin()">Activities</div>
            <div class="div-7" onclick="showLogin()">Pricing</div>
            <div class="div-8" onclick="showLogin()">Contact</div>
            <div class="div-9" onclick="showLogin()">Link</div>
        </div>


        <div class="div-10">
            <div class="div-11" onclick="showLogin()">Login</div>
            <div class="div-12" onclick="showRegister()">Register</div>
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
        background-color: #1e1e1e; /* original background */
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

    .div-3,
    .div-4,
    .div-5,
    .div-6,
    .div-7,
    .div-8,
    .div-9 {
        color: #fff;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        font: 16px "Inter", sans-serif;
        transition: background-color 0.3s ease;
    }

    .div-3:hover,
    .div-4:hover,
    .div-5:hover,
    .div-6:hover,
    .div-7:hover,
    .div-8:hover,
    .div-9:hover {
        background-color: #00385e;
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
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        color: #fff;
        background-color: #1e1e1e;
        font: 16px "Inter", sans-serif;
        transition: background-color 0.3s ease;
    }

    .div-11:hover {
        background-color: #00385e;
    }

    .div-12 {
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
        color: #1e1e1e;
        background-color: #fff;
        font: 16px "Inter", sans-serif;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .div-12:hover {
        background-color: #00385e;
        color: #fff;
    }
</style>

