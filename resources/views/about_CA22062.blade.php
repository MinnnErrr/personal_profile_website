@extends('master')

@section('content')
<div class="container-fluid profile-background p-5">
    <div class="row mb-5">
        <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center mb-5">
            <img src="{{ asset('images/miner.jpg') }}" style="width: 230px; height: 280px;" alt="Member 1">
        </div>
        <div class="col-12 col-lg-9 mb-5">
            <h1 style="color: #81CBC0;">Loh Min Er</h1>
            <br>
            <p style="color: white" class="fs-5">
                Hello! I’m currently pursuing my Bachelor’s degree in Computer Science (Computer Systems and Networking)
                at
                Universiti Malaysia Pahang Al-Sultan Abdullah.
                My journey in technology started with a curiosity about cyber attacks, but with the rise of AI, I’ve
                become
                fascinated by the endless possibilities in this field, which has driven me to explore multiple areas of
                computer science, from networking to web and mobile development, and AI.
                <br>
                <br>When I’m not turning ideas into solutions, I like to recharge with some good food and drama.
            </p>
            <br>
            <div class="d-flex gap-4">
                <button type="button" class="btn rounded-circle"
                    style="width: 50px; height: 50px; background-color: #81CBC0; color: #0B131A">
                    <i class="bi bi-linkedin"></i>
                </button>
                <button type="button" class="btn rounded-circle"
                    style="width: 50px; height: 50px; background-color: #81CBC0; color: #0B131A">
                    <i class="bi bi-envelope-at"></i>
                </button>
                <button type="button" class="btn rounded-circle"
                    style="width: 50px; height: 50px; background-color: #81CBC0; color: #0B131A">
                    <i class="bi bi-github"></i>
                </button>
            </div>
            {{-- <h4 style="color: #81CBC0;" class="mt-5">Skills</h4>
            <p style="color: white">
                Programming Language: Java, C, Python, JavaScript
                <br>Web Development: HTML, CSS, Bootstrap
                <br>
            </p> --}}
        </div>
    </div>

    <div class="row align-items-center justify-content-center text-center">
        <h2 style="color: white;" class="mb-5">My Skills</h2>
        <div class="rounded-3 p-4" style="background-color: white; max-width: 90vw">
            <div class="d-flex flex-wrap justify-content-center gap-5">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/C_Programming_Language.svg"
                    alt="C language" class="img-fluid" style="max-height: 100px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="C language"
                    class="img-fluid" style="max-height: 100px;">
                <img src="https://upload.wikimedia.org/wikipedia/de/e/e1/Java-Logo.svg" alt="C language"
                    class="img-fluid" style="max-height: 100px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Javascript-shield.svg" alt="C language"
                    class="img-fluid" style="max-height: 100px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg"
                    alt="C language" class="img-fluid" style="max-height: 100px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg"
                    alt="C language" class="img-fluid" style="max-height: 100px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" alt="C language"
                    class="img-fluid" style="max-height: 100px;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Flutter_logo.svg" alt="C language"
                    class="img-fluid" style="max-height: 100px;">
                    <img src="https://upload.wikimedia.org/wikipedia/de/d/dd/MySQL_logo.svg" alt="C language"
                    class="img-fluid" style="max-height: 100px;">
                    <img src="{{ asset('images/supabase-logo-icon.png') }}" alt="C language"
                    class="img-fluid" style="max-height: 100px;">
            </div>
        </div>
    </div>
</div>

@endsection