@extends('master')

@section('content')
<div class="position-relative text-center mt-3" style="min-height: 87vh; background: url('{{ asset('images/bg.png') }}') center; 
            background-size: cover;
            overflow: hidden;">>
    {{-- <img src="{{ asset('images/bg.png') }}" class="img-fluid d-block w-100 pt-3" alt="bg_home"
        style="height: 650px; object-fit: cover;"> --}}
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;">
    </div>
    <h2 class="position-absolute top-50 start-50 translate-middle text-white fw-bold display-4" style="z-index: 2;">
        <span class="text-white">INTEGRATED APPLICATION DEVELOPMENT FRAMEWORK</span>
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
        <div class="col-md col-lg-2 text-center">
            <a href="{{ route('CA22062') }}"><img src="{{ asset('images/miner.jpg') }}"
                    class="rounded-circle member-img mb-3" alt="Member 1"></a>
            <h5 class="mb-1">Loh Min Er</h5>
            <h5 class="mb-2">CA22062</h5>
            <p class="px-5 px-lg-0">Bachelor’s degree in Computer Science (Computer Systems and Networking)</p>
        </div>

        <div class="col-md col-lg-2 text-center">
            <a href="{{ route('CD22076') }}"><img src="{{ asset('images/xiaoying.jpg') }}"
                    class="rounded-circle member-img mb-3" alt="Member 2"></a>
            <h5 class="mb-1">Tai Xiao Ying</h5>
            <h5 class="mb-2">CD22076</h5>
            <p class="px-5 px-lg-0">description</p>
        </div>

        <div class="col-md col-lg-2 text-center">
            <a href="{{ route('CB24017') }}"><img src="{{ asset('images/tan.jpg') }}"
                    class="rounded-circle member-img mb-3" alt="Member 3"></a>
            <h5 class="mb-1">Tan Cheong Han</h5>
            <h5 class="mb-2">CB24017</h5>
            <p class="px-5 px-lg-0">description</p>
        </div>

        <div class="col-md col-lg-2 text-center">
            <a href=""><img src="{{ asset('images/victor.jpg') }}" class="rounded-circle member-img mb-3"
                    alt="Member 4"></a>
            <h5 class="mb-1">Member 4</h5>
            <h5 class="mb-2">CBxxxx</h5>
            <p class="px-5 px-lg-0">description</p>
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
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }
</style>



@endsection