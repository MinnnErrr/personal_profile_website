@extends('master')

@section('content')
    <div class="position-relative text-center">
        <img src="{{ asset('images/test.jpg') }}" class="img-fluid d-block w-100 pt-3" alt="bg_home" style="height: 650px; object-fit: cover;">
        <h2 class="position-absolute top-50 start-50 translate-middle text-white fw-bold display-3">
            <span class="text-white">LARAVEL TEAM</span> 
            <span style="color: #81CBC0;">GROUP 8</span>
        </h2>
    </div>
@endsection