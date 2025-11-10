@extends('master')

@section('content')

  <div class="row d-flex justify-content-center align-items-center" style="min-height: 80vh">
    <div class="col-12 col-lg-6 text-center">
      <h1>Contact Us</h1>
      <p>Feel free to reach us by filling the form.</p>
    </div>

    <div class="col-12 col-lg-6">
      <form class="w-75 mx-auto p-4 border rounded-2">
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

@endsection