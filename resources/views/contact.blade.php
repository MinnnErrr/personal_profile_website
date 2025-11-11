@extends('master')

@section('content')

<div class="container-fluid d-flex justify-content-center align-items-center my-3 p-3 position-relative" style="min-height: 87vh; background: url('{{ asset('images/bg.png') }}') center; 
            background-size: cover;
            overflow: hidden;">

  <div class="position-absolute top-0 start-0 w-100 h-100" 
       style="background-color: rgba(0, 0, 0, 0.8); z-index: 1;"></div>

  <div class="row w-100 align-items-center position-relative" style="z-index: 2;">
    <div class="col-12 col-lg-6 text-center mb-5">
      <h1 style="color: white">Contact Us</h1>
      <p style="color: white">Feel free to reach us by filling the form.</p>
    </div>

    <div class="col-12 col-lg-6">
      <form class="w-75 mx-auto p-4 border rounded-2" style="background-color: white">
        <div class="mb-3">
          <label for="inputName" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputName">

        </div>
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="inputEmail">
        </div>

        <div class="mb-3">
          <label for="inputTextArea" class="form-label">Messages</label>
          <textarea class="form-control" id="inputTextArea" rows="3"></textarea>
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-dark">Submit</button>
        </div>
      </form>

    </div>
  </div>

</div>
@endsection