@extends('layouts.main')


@section('css')
  <link href="../css/simon.css" rel="stylesheet"
@endsection

@section('content')
<div class='simon-container'>
  <div class='content' id='click'>
    <div class='box tl dark-green' id='tl'>
      <audio loop id='tLAudio'><source src='../audio/sound1.ogg' type='audio/mpeg'></audio>
    </div>
    <div class='box tr dark-red' id='tr'>
      <audio loop id='tRAudio'><source src='../audio/sound2.ogg' type='audio/mpeg'></audio>
    </div>
    <div class='box bl dark-yellow' id='bl'>
      <audio loop id='bLAudio'><source src='../audio/sound3.ogg' type='audio/mpeg'></audio>
    </div>
    <div class='box br dark-blue' id='br'>
      <audio loop id='bRAudio'><source src='../audio/sound4.ogg' type='audio/mpeg'></audio>
    </div>

  </div> <!-- added -->

  <div class='box mid'>
    <div class="on-off-container float col-3">
      <div class="onOffIndicator" id="powerLight"></div>
      <button type="button" class="power" id='powerButton'>on/off</button><br>
    </div>

    <div class="start-container float col-3">
      <!-- <div class="invisibleIndicator"></div><br> -->
      <button type="button" class="start" id='startButton'>start</button><br>
    </div>

    <div class="strict-container float col-3">
      <div class="onOffIndicator" id="strictLight"></div>
      <button type="button" class="strict" id='strictButton'>strict</button><br>
    </div>
    <!-- </div> -->
    <div class='score-container center '>
      <p id="display">00</p>
    </div>
  </div> <!-- end box mid -->

</div>
<!--Simon End -->
@endsection

@section('js')
    <script src="../js/simon.js"></script>
@endsection
