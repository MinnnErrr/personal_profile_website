@extends('master')

@section('content')
<div class="container-fluid profile-background px-5 py-2">
    <div class="row mb-5">
        <div class="col-12 col-lg-3 d-flex justify-content-center align-items-center mb-5">
            <img src="{{ asset('images/miner.jpg') }}" class='img-fluid rounded-4'
                style="max-width: 230px; max-height: 280px;" alt="Member 1">
        </div>
        <div class="col-12 col-lg-9 mb-5">
            <h1 style="color: #81CBC0;">Loh Min Er</h1>
            <br>
            <p style="color: white" class="fs-5">
                Hello! I’m a Year 4 student currently pursuing my Bachelor’s degree in Computer Science (Computer
                Systems and Networking)
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
                <a href="https://www.linkedin.com/in/loh-min-er" role="button"
                    class="btn rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 50px; height: 50px; background-color: #81CBC0; color: #0B131A">
                    <i class="bi bi-linkedin" style="font-size: 25px"></i></a>
                <a href="mailto:ca22062@adab.umpsa.edu.my" role="button"
                    class="btn rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 50px; height: 50px; background-color: #81CBC0; color: #0B131A">
                    <i class="bi bi-envelope-at" style="font-size: 25px"></i></a>
                <a href="https://github.com/MinnnErrr" role="button"
                    class="btn rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 50px; height: 50px; background-color: #81CBC0; color: #0B131A">
                    <i class="bi bi-github" style="font-size: 25px"></i></a>
            </div>
        </div>
    </div>

    <div class="row align-items-center justify-content-center text-center mb-5 pb-5">
        <h2 style="color: white;" class="mb-5">My Skills</h2>
        <div class="d-flex flex-wrap justify-content-center gap-4 w-75">
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #eef7ff; color: #004482;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/C_Programming_Language.svg"
                    alt="C language" style="height: 30px;">
                C language
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f4f7fb; color: #3773a5;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python"
                    style="height: 30px;">
                Python
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #fdf9ed; color: #be6819;">
                <img src="https://upload.wikimedia.org/wikipedia/de/e/e1/Java-Logo.svg" alt="Java"
                    style="height: 30px;">
                Java
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f9f7ed; color: #be9039;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d4/Javascript-shield.svg" alt="Javascript"
                    style="height: 30px;">
                JavaScript
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f3f6fa; color: #777bb3;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="php"
                    style="height: 30px;">
                php
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #fdf4ef; color: #e44d26;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/HTML5_logo_and_wordmark.svg" alt="HTML"
                    style="height: 30px;">
                HTML
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f0f4fe; color: #264de4;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/d/d5/CSS3_logo_and_wordmark.svg" alt="CSS"
                    style="height: 30px;">
                CSS
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f4f1ff; color: #6c10f4;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" alt="Bootstrap"
                    style="height: 30px;">
                Bootstrap
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f0f8ff; color: #07599d;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Flutter_logo.svg" alt="Flutter"
                    style="height: 30px;">
                Flutter
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #e8fffe; color: #00758f;">
                <img src="https://upload.wikimedia.org/wikipedia/de/d/dd/MySQL_logo.svg" alt="MySQL"
                    style="height: 30px;">
                MySQL
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #effaf4; color: #1e7c53;">
                <img src="{{ asset('images/supabase-logo-icon.png') }}" alt="Supabase" style="height: 30px;">
                Supabase
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #fef4ee; color: #f24e1e;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/33/Figma-logo.svg" alt="Figma"
                    style="height: 30px;">
                Figma
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f6f6f6; color: #6d6d6d;">
                <i class="bi bi-terminal-fill fs-2"></i>
                Network Configuration
            </span>
            <span
                class="badge rounded-pill d-inline-flex align-items-center justify-content-center gap-2 py-1 px-3 fs-5"
                style="background-color: #f6f6f6; color: #6d6d6d;">
                <i class="bi bi-search fs-2"></i>
                Network Troubleshooting
            </span>
        </div>
    </div>

    <div class="row align-items-center justify-content-center text-center mb-5">
        <h2 style="color: white;" class="mb-5">My Projects</h2>
        <div id="carouselExample" class="carousel slide w-75">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <div class="card w-75">
                            <div class="position-relative">
                                <img src="{{ asset('images/minerProject-1.png') }}" class="card-img-top"
                                    style="max-height: 400px">
                                <span
                                    class="badge rounded-pill text-bg-success position-absolute top-0 end-0 m-3">Complete</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">RapidPrint - UMPSA Koop Printing Management System</h4>
                                <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #f3f6fa; color: #777bb3;">php</span>
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #fdf4ef; color: #e44d26;">HTML</span>
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #f9f7ed; color: #be9039;">JavaScript</span>
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #f4f1ff; color: #6c10f4;">Bootstrap</span>
                                </div>
                                <p class="card-text">Designed and Developed the module for users login, manage Koperasi
                                    information (admin), manage printing package (admin), and admin dashboard</p>
                                <a class="btn btn-hover mt-3" role="button" href="#"
                                    style="color: white; background-color: #0B131A; min-width: 150px;">Source Code</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card w-75">
                            <div class="position-relative">
                                <img src="{{ asset('images/minerProject-2.png') }}" class="card-img-top"
                                    style="max-height: 400px">
                                <span class="badge rounded-pill text-bg-warning position-absolute top-0 end-0 m-3">In
                                    Progress</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Cheng Eng Auto Accessories Service Management App</h4>
                                <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #f0f8ff; color: #07599d;">Flutter</span>
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #effaf4; color: #1e7c53;">Supabase</span>
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #fcf4f4; color: #d75250;">HMS Core</span>
                                </div>
                                <p class="card-text">Developing a mobile application for Cheng Eng Auto Accessories
                                    staffs and customers to better manage their services and data. It has functions such
                                    as towing request management, order management, product catalog, booking management,
                                    reward and membership point management, vehicle maintenance management, and AI
                                    chatbot</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <div class="card w-75">
                            <div class="position-relative">
                                <img src="{{ asset('images/minerProject-3.png') }}" class="card-img-top"
                                    style="max-height: 400px">
                                <span
                                    class="badge rounded-pill text-bg-success position-absolute top-0 end-0 m-3">Complete</span>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Alzheimer's Disease Prediction App</h4>
                                <div class="d-flex flex-wrap gap-2 justify-content-center mb-3">
                                    <span class="badge rounded-pill fs-6 fw-normal"
                                        style="background-color: #f4f7fb; color: #3773a5;">Python</span>
                                </div>
                                <p class="card-text">Developed a machine learning model to predict the early onset of
                                    Alzheimer’s disease by evaluating and comparing multiple classification algorithms.
                                    Optimized model performance through metric-based analysis, with Random Forest
                                    selected as the final model for its superior accuracy and reliability.</p>
                                <div class="d-flex flex-wrap gap-2 justify-content-center">
                                    <a class="btn btn-hover mt-3" role="button" href="#"
                                        style="color: white; background-color: #0B131A; min-width: 150px;">Source
                                        Code</a>
                                    <a class="btn btn-hover mt-3" role="button" href="#"
                                        style="color: white; background-color: #0B131A; min-width: 150px;">Visit</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

@endsection