@extends('master')

@section('content')
<h1 class="text-center">About Me</h1>
<div class="text-center">
<img src="images/tan.jpg" alt="My Photo" class="img-fluid mb-4 rounded" style="height: 300px;">
</div>
<table class="table table-bordered mx-auto" style="width:50%;">
  
  <tbody>
    <tr>
      <th scope="row">Name:</th>
      <td>Tan Cheong Han</td>
      
    </tr>
    <tr>
      <th scope="row">Student ID:</th>
      <td>CB24017</td>
      
    </tr>
    <tr>
      <th scope="row">Program:</th>
      <td>Bachelor of Computer Science (Hons) Software Engineering</td>
      
    </tr>
    <tr>
        <th class="text-center" scope="row" rowspan="2">Background:</th>
        <td>Diploma in Information Technology (Digital Technology) - Politeknik Seberang Perai</td>
        
    </tr>
    <tr>
        <td>Bachelor of Computer Science (Hons) Software Engineering - University Malaysia Pahang Al-Sultan Abdullah</td>
    </tr>
    <tr>
        <th scope="row" rowspan="2">Skills:</th>
        <td>Programming</td>
    </tr>

    <tr>
        <td>Testing</td>
    </tr>

    <tr>
        <th rowspan="2" scope="row">Hobbies:</th>
        <td>Watch Movies</td>
        
    </tr>
    <tr>
        <td>Play Video Games</td>
    </tr>
  </tbody>
</table>
@endsection
