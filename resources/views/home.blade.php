@extends('master')

@section('content')
    <div class="position-relative text-center">
        <img src="{{ asset('images/test.jpg') }}" class="img-fluid d-block w-100 pt-3" alt="bg_home" style="height: 650px; object-fit: cover;">
        <h2 class="position-absolute top-50 start-50 translate-middle text-white fw-bold display-4">
            <span class="text-white">LARAVEL TEAM</span> 
            <span style="color: #81CBC0;">GROUP 8</span>
        </h2>
    </div>

    <div class="text-center mt-3 py-5" style="background-color: #0B131A;">
        <h3 class="fw-bold mb-3" style="color: #81CBC0;">Team</h3>
        <p class="w-75 mx-auto" style="color: white; font-size: 1.1rem">
            We are Group 8, a team of passionate developers dedicated to creating clean and creative Laravel projects 
            with teamwork, innovation, and collaboration at our core.
        </p>
    </div>

    <div class="text-center mt-3 py-5" style="background-color: #81CBC0;"> 
        <h3 class="fw-bold mb-4" style="color:white;">Members</h3>

        <div class="row justify-content-center g-4">
            <div class="col-md-2 text-center">
                <img src="{{ asset('images/miner.jpg') }}" class="rounded-circle member-img mb-2" 
                    alt="Member 1">
                <h5 class="mb-1">Loh Min Er</h5>
                <p class="mb-0">CA22062</p>
            </div>

            <div class="col-md-2 text-center">
                <img src="{{ asset('images/xiaoying.jpg') }}" class="rounded-circle member-img mb-2" 
                    alt="Member 2">
                <h5 class="mb-1">Tai Xiao Ying</h5>
                <p class="mb-0">CD22076</p>
            </div>

            <div class="col-md-2 text-center">
                <img src="{{ asset('images/test.jpg') }}" class="rounded-circle member-img mb-2" 
                    alt="Member 3">
                <h5 class="mb-1">Tan Cheong Han</h5>
                <p class="mb-0">CB24017</p>
            </div>

            <div class="col-md-2 text-center">
                <img src="{{ asset('images/test.jpg') }}" class="rounded-circle member-img mb-2" 
                    alt="Member 4">
                <h5 class="mb-1">Member 4</h5>
                <p class="mb-0">CBxxxx</p>
            </div>
        </div>
    </div>

    <style>
    .member-img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        transition: transform 0.3s ease, box-shadow 0.3s ease; 
    }

    .member-img:hover {
        transform: scale(1.1); 
        box-shadow: 0 8px 20px rgba(0,0,0,0.3); 
    }
    </style>



@endsection