@extends('layouts.app')

@section('content')


<div class="pages">
    <!-- Page, data-page contains page name-->
    <div data-page="about" class="page">
        <!-- Scrollable page content-->
        <div class="content-block-title">Sortiert nach den Wochentagen</div>
        <div class="list-block">
            <ul>
                @foreach ($week as $order)
                <li>
                    <a href="{{ route('orders', [$order->id]) }}" class="item-link item-content">
                        <div class="item-media"><i class="icon ion-android-restaurant larger"></i></div>
                        <div class="item-inner">
                            <div class="item-title">{{ $order->day }}</div>
                            <div class="item-after">{{ $order->date }}</div>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
            <div class="list-block-label">Der leckerste Fisch ist immer noch der Schnitzel</div>
        </div>
    </div>
</div>


@endsection

