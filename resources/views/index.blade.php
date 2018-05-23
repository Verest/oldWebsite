@extends('layouts.main')


@section('css')
  <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection


@section('content')
<section id="projects">
  <?php $projects=App\Project::inRandomOrder()->get(); ?>

  <h2>Projects</h2>

  @foreach($projects as $project)
    @include("partials.project")
  @endforeach
  
</section>

<!-- <section id="scribbles">
  <h2>Scribbles</h2>
  <div class="scribble">
    Placeholder Text
  </div>
</section> -->
@endsection

@section('js')
  <script src="js/hamburger.js"></script>
@endsection
