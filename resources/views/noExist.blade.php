@extends('layouts.main')

@section('css')
  <link rel="stylesheet" type="text/css" href="css/main.css">
@endsection

@section('content')
<h2>This Page Does Not Exist</h2>
<p>{{ $url }}</p>
@endsection
