@extends('layouts.main')


@section('css')
  <link href="../css/tictactoe.css" rel="stylesheet"
@endsection

@section('content')
      <!-- start tic tac toe -->
      <div class='tictactoe-container'>
        <button type='submit' class='button' id='resetButton'>Reset Game</button>
        <canvas id='ticTacToeCanvas'></canvas>
      </div>
      <!-- end tic tac toe-->
@endsection

@section('js')
    <script src="../js/tictactoe.js"></script>
@endsection
