@extends('layouts.app')

@section('content')

<div class="pages">
  <!-- Page, data-page contains page name-->
  <div data-page="services" class="page">
    <div class="page-content">
    <!-- Scrollable page content-->
    <div class="content-block-title">Kunden Liste</div>
      <div class="list-block accordion-list">
        <ul>
        @foreach($user as $kunde)
            <li class="accordion-item"><a href="#" class="item-content item-link">
                <div class="chip">

                  <div class="chip-label">{{ $kunde->name }}</div>
                </div></a>
              <div class="accordion-item-content">
                <div class="content-block">
                  <p>E-mail: {{ $kunde->email }}</p>
                  <p>Adresse: {{ $kunde->strasse }}, {{ $kunde->ort }}</p>
                  <p>Telefon: {{ $kunde->telefon }}</p>
                </div>
              </div>
            </li>
         @endforeach 
        </ul>
      </div>

        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->

        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <div class="toolbar-inner"><a href="#" class="link"></a><a href="{{ url('/days') }}" class="link">Next</a></div>
        </div>
     </div>   
  </div>
</div>

@endsection
