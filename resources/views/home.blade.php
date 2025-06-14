@extends('layouts.app')

@section('content')
<style>
    .profile-img {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        margin-left: 30px;
    }

    .hero-section {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        min-height: 80vh;
        padding: 40px;
    }

    .hero-text h1 {
        font-size: 3rem;
        font-weight: bold;
        line-height: 1.3;
    }

    .hero-text p {
        font-size: 1.1rem;
        max-width: 500px;
        margin-top: 20px;
    }

    .hero-text a {
        color: #facc15;
        text-decoration: none;
        margin-right: 15px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 10px;
    }

    .hero-text a:hover {
        text-decoration: underline;
    }

    @media (max-width: 768px) {
        .hero-section {
            flex-direction: column;
            text-align: center;
        }

        .profile-img {
            margin-left: 0;
            margin-top: 30px;
        }
    }
</style>

<div class="hero-section">
    <div class="hero-text">
        <p class="text-uppercase" style="letter-spacing: 1px;">WELCOME!</p>
        <h1>I Am AI Enthusiast &<br>Game Developer</h1>
        <p>Saya adalah pengembang AI dan game dengan semangat tinggi untuk teknologi dan solusi kreatif.</p>

        <!-- Sosial Media -->
        <div class="mt-3">
            <a href="https://www.instagram.com/afriza.fazl?igsh=MXYxb3FlajNhZHRuOQ==" target="_blank">
                <i class="fab fa-instagram fa-lg"></i> afriza.fazl
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=jaulisdead@gmail.com" target="_blank">
    <i class="fas fa-envelope fa-lg"></i> jaulisdead@gmail.com
</a>

        </div>
    </div>
    <img src="{{ asset('images/profile.jpg') }}" alt="Foto Profil" class="profile-img">
</div>
@endsection
