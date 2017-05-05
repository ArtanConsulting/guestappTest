@extends('layouts.app')

@section('content')

<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="about" class="page">
    <!-- Scrollable page content-->
    <div class="content-block-title">Wählen Sie Tag Menü zu aktualisieren</div>
      <div class="list-block">
        <ul>
          @foreach ($day as $d)
            <li>
              <a href="{{ route('days.edit', [$d->id]) }}" class="item-link item-content">
                <div class="item-media"><i class="icon ion-ios-calendar-outline larger"></i></div>
                <div class="item-inner">
                  <div class="item-title">{{ $d->day }}</div>
                  <div class="item-after">{{ $d->date }}</div>
                </div>
              </a>
            </li>
          @endforeach
        </ul>
        <div class="list-block-label">When Life Goes Away, Have a piece of Cake!</div>
      </div>
   </div>
</div>

@endsection