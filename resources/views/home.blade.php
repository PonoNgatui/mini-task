@extends('layouts.master')

@section('pageTitle', 'Home')

@section('main')
  <div class="container">
    <div class="main">
      <div class="task-summary-container">
       <h1 class="task-summary-heading">Employee Directory</h1>

      <div  class="task-summary-list">
        <span class="material-icons">check_circle</span>
        <h2></h2>
      </div>

      <div class="task-summary-list">
        <span class="material-icons">list</span>
        <h2>You still have 5 tasks left</h2>
      </div>
    </div>
  </div>
@endsection