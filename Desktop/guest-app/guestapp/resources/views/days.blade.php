@extends('layouts.app')

@section('content')


<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="days" class="page days">
    <!-- Scrollable page content-->
      <div class="list-block">
        <ul>
          @foreach ($days as $day)
            <li>
              <a href="{{ route('days', [$day->id]) }}" id="{{ $day->id }}" class="item-link item-content disable-day">
                <div class="item-media"><i class="icon ion-ios-cart larger"></i></div>
                <div class="item-inner">
                  <div class="item-title">{{ $day->day }}</div>
                  <div class="item-after">{{ $day->date }}</div>
                </div>
              </a>
            </li>
          @endforeach
        </ul>
        <div class="list-block-label">Ich bin so satt ich mag kein bla...   oh, Kuchen!</div>
      </div>
   </div>
</div>


@endsection

