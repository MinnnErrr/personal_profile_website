@extends('master')

@section('content')

<div class="container pt-5">
  <div class="row">
    <div class="col">

    <form class="w-50 mx-auto p-4 border rounded-2">
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
    <div class="col">
      <h1 class="text-center">Contact Us</h1>
      <p class="text-center">Feel free to reach us by filling the form.</p>
    </div>
  </div>
  
</div>
@endsection
