@extends('layouts.app')

@section('content')


<div class="pages">
    <!-- Page, data-page contains page name-->
    <div data-page="receive-order" class="page">
        <div class="page-content">

            <div class="content-block-title">Auftragsliste</div>

            <div class="list-block media-list">
                <ul>
                  @foreach($day->orders as $order)
                  @if(!empty($order->o_fleisch))
                    <div class="card">
                        <li>
                            <label class="label-checkbox item-content">
                                <input type="checkbox" name="my-checkbox">
                                <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"></div>
                                        <div class="item-after">{{ $order->user->name }}</div>
                                    </div>
                                    <div class="item-subtitle">Bestelldatum  {{ $order->created_at }}</div>
                                    <div class="item-text">{{ $order->o_fleisch }} </div>
                                    <div class="item-text">Menge: {{ $order->nr_fleisch }} </div>
                                </div>
                            </label>
                        </li>
                        <div class="card-footer">
                            <span>Done</span>
                            
                            {!! Form::open(['route' => ['order.delete', $order->id], 'method' => 'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'delete-conf button color-red']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    @if(!empty($order->o_vegi))
                    <div class="card">
                        <li>
                            <label class="label-checkbox item-content">
                                <input type="checkbox" name="my-checkbox">
                                <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"></div>
                                        <div class="item-after">{{ $order->user->name }}</div>
                                    </div>
                                    <div class="item-subtitle">Bestelldatum  {{ $order->created_at }}</div>
                                    <div class="item-text">{{ $order->o_vegi }} </div>
                                    <div class="item-text">Menge: {{ $order->nr_vegi }} </div>
                                </div>
                            </label>
                        </li>
                        <div class="card-footer">
                            <span>Done</span>
                            {!! Form::open(['route' => ['order.delete', $order->id], 'method' => 'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'button color-red']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    @if(!empty($order->o_wochenhit))
                    <div class="card">
                        <li>
                            <label class="label-checkbox item-content">
                                <input type="checkbox" name="my-checkbox">
                                <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"></div>
                                        <div class="item-after">{{ $order->user->name }}</div>
                                    </div>
                                    <div class="item-subtitle">Bestelldatum  {{ $order->created_at }}</div>
                                    <div class="item-text">{{ $order->o_wochenhit }} </div>
                                    <div class="item-text">Menge: {{ $order->nr_wochenhit }} </div>
                                </div>
                            </label>
                        </li>
                        <div class="card-footer">
                            <span>Done</span>
                            {!! Form::open(['route' => ['order.delete', $order->id], 'method' => 'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'button color-red']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    @if(!empty($order->o_sallatteller))
                    <div class="card">
                        <li>
                            <label class="label-checkbox item-content">
                                <input type="checkbox" name="my-checkbox">
                                <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"></div>
                                        <div class="item-after">{{ $order->user->name }}</div>
                                    </div>
                                    <div class="item-subtitle">Bestelldatum  {{ $order->created_at }}</div>
                                    <div class="item-text">{{ $order->o_sallatteller }} </div>
                                    <div class="item-text">Menge: {{ $order->nr_sallatteller }} </div>
                                </div>
                            </label>
                        </li>
                        <div class="card-footer">
                            <span>Done</span>
                            {!! Form::open(['route' => ['order.delete', $order->id], 'method' => 'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'button color-red']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    @if(!empty($order->o_gemischtersallatte))
                    <div class="card">
                        <li>
                            <label class="label-checkbox item-content">
                                <input type="checkbox" name="my-checkbox">
                                <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"></div>
                                        <div class="item-after">{{ $order->user->name }}</div>
                                    </div>
                                    <div class="item-subtitle">Bestelldatum  {{ $order->created_at }}</div>
                                    <div class="item-text">{{ $order->o_gemischtersallatte }} </div>
                                    <div class="item-text">Menge: {{ $order->nr_gemischtersallatte }} </div>
                                </div>
                            </label>
                        </li>
                        <div class="card-footer">
                            <span>Done</span>
                            {!! Form::open(['route' => ['order.delete', $order->id], 'method' => 'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'button color-red']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                    @if(!empty($order->o_suppe))
                    <div class="card">
                        <li>
                            <label class="label-checkbox item-content">
                                <input type="checkbox" name="my-checkbox">
                                <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"></div>
                                        <div class="item-after">{{ $order->user->name }}</div>
                                    </div>
                                    <div class="item-subtitle">Bestelldatum  {{ $order->created_at }}</div>
                                    <div class="item-text">{{ $order->o_suppe }} </div>
                                    <div class="item-text">Menge: {{ $order->nr_suppe }} </div>
                                </div>
                            </label>
                        </li>
                        <div class="card-footer">
                            <span>Done</span>
                            {!! Form::open(['route' => ['order.delete', $order->id], 'method' => 'DELETE']) !!}
                              {!! Form::submit('Delete', ['class' => 'button color-red']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    @endif
                  @endforeach
                </ul>
            </div>
            <!-- Bottom Toolbar-->
            <div class="toolbar">
                <div class="toolbar-inner"><a href="{{ url('/todos') }}" class="link">Back</a><a href="{{ url('/days') }}" class="link">Next</a></div>
            </div>

        </div>
    </div>
</div>

@endsection

