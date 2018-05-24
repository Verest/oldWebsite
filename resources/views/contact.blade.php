@extends('layouts.main')

@section('title')
  Contact Me
@endsection

@section('css')
  <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection


@section('content')
  <h2>Contact Me</h2>
  {{-- check action --}}
  <form class="contact-form" action="contact" method="post">
    {{ csrf_field() }}

    <div class="form-group">
      <label class="contact-label" for="name">Name: </label>
      <input class="contact-input" id="name" type="text" name="name" value="" required>
    </div>

    <div class="form-group">
      <label class="contact-label" for="email">Email: </label>
      <input class="contact-input" id="email" type="email" name="email" value="" required>
    </div>

    <div class="form-group">
      <label class="contact-label" for="message">Message: </label>
      <textarea class="contact-input" id="message" name="message" value=""></textarea>
    </div>


    <input id="form-submit" type="submit" value="Send">
  </form>
@endsection

@section('js')
  <script src="js/hamburger.js"></script>
@endsection
