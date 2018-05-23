@extends('layouts.main')


@section('css')
  <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection


@section('content')
  <h2>Contact Me</h2>
  <form class="contact-form" action="index.html" method="post">
    <div class="form-group">
      <label for="name">Name</label>
      <input id="name" type="text" name="name" value="" required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input id="email" type="email" name="email" value="" required>
    </div>

    <div class="form-group">
      <label for="Message">Message</label>
      <textarea id="Message" name="Message" value=""></textarea>
    </div>


    <input id="form-submit" type="submit" value="Send">
  </form>
@endsection

@section('js')
  <script src="js/hamburger.js"></script>
@endsection
