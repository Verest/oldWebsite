@extends('layouts.main')


@section('css')
  <link href="../css/wikipedia-viewer.css" rel="stylesheet"
@endsection

@section('content')
<div class="wiki-wrapper">
  <h2>Wikipedia Viewer</h2>
  <div class="pre-content-wrapper">
    <div id="randomRow">
      <a id="randomLink" href="https://en.wikipedia.org/wiki/Special:Random" target="_blank">Random Wikipedia Article!</a>
    </div>

    <div id="searchRow">
      <form class="searchField" id="searchForm">
        <label for="searchText">Search: </label>
        <input type="text" id="searchText" placeholder="Text Here">
        <input type="submit" class="disp-none">
      </form>
    </div>
  </div>

  <div class="results">
    <div class="result" id="one">
      <a target="_blank" id="linkOne">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="two">
      <a target="_blank" id="linkTwo">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="three">
      <a target="_blank" id="linkThree">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="four">
      <a target="_blank" id="linkFour">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="five">
      <a target="_blank" id="linkFive">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="six">
      <a target="_blank" id="linkSix">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="seven">
      <a target="_blank" id="linkSeven">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="eight">
      <a target="_blank" id="linkEight">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="nine">
      <a target="_blank" id="linkNine">
        <h4></h4>
        <p></p>
      </a>
    </div>
    <div class="result" id="ten">
      <a target="_blank" id="linkTen">
        <h4></h4>
        <p></p>
      </a>
    </div>
  </div> <!--end results -->
</div>
<!--end wiki view -->
@endsection

@section('js')
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="../js/wikipedia-viewer.js"></script>
@endsection
