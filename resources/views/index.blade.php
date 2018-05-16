@extends('layouts.main')


@section('css')
  <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection


@section('content')
<section id="projects">
  <h2>Projects</h2>
  <div class="card">
    <a href="projects/css-zen">
      <img class="card__images" src="img/css-zen.png" alt="css zen" />
    </a>
    <p>My CSS styling for <a href="http://www.csszengarden.com">CSS Zen Garden</a></p>
  </div>
  <div class="card">
    <a href="projects/stateful-calculator">
      <img class="card__images" src="img/state-calc.png" alt="stateful calculator" />
    </a>
    <p>A calculator made in React that records history</p>
  </div>
  <div class="card">
    <a href="projects/wikipedia-viewer">
      <img class="card__images" src="img/wiki-view.png" alt="wikipedia viewer" />
    </a>
    <p>Wikipedia search using AJAX request</p>
  </div>

  <div class="card">
    <a href="projects/tictactoe">
      <img class="card__images" src="img/tictactoe.png" alt="Tic Tac Toe" />
    </a>
    <p>Tic Tac Toe made using a canvas element</p>
  </div>

  <div class="card">
    <a href="projects/simon">
      <img class="card__images" src="img/simon.png" alt="Simon Game" />
    </a>
    <p>Simon game</p>
  </div>

  <div class="card">
    <a href="projects/markdown-previewer">
      <img class="card__images" src="img/markdown.png" alt="Markdown Previewer" />
    </a>
    <p>A markdown previewer made in React</p>
  </div>

  <!-- <div class="card">
    <a href="">
      <img class="card__images" src="" alt="" />
    </a>
    <p>Placeholder</p>
  </div> -->
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
