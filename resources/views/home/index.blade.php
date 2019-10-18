
@extends('layouts.base')
@section ('title', 'Home')
@section('content')
@include ('layouts.nav')

<div class="row">

        <div class="container">
                <h1 class="cyan-text text-lighten-1 center-align">Vaunted</h1>
    </div>


    <img style="bottom: 40px;  position: absolute; z-index: -1;" src="{{ asset('img/twave3.svg') }}" alt="">
    <img style="bottom: -20px;  position: absolute; z-index: -1;" src="{{ asset('img/twave2.svg') }}" alt="">
    <img style="bottom: -70px;  position: absolute; z-index: -1; background-size: cover;" src="{{ asset('img/twave3.svg') }}" alt="">
</div>
    <script>


            document.addEventListener('DOMContentLoaded', function() {
                var elems = document.querySelectorAll('.fixed-action-btn');
                var instances = M.FloatingActionButton.init(elems, {
                  direction: 'left'
                });
              });
              </script>

              @endsection
