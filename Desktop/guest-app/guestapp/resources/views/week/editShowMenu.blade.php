@extends('layouts.app') 

@section('content')
<div class="pages">
    <div data-page="about" class="page">
     <div class="page-content">
        <form method="POST" action="/days/{{ $day->id }}">
        {{ method_field('PATCH') }}
            

            <div class="content-block-title">{{ $day->day }}</div>
            
            <div class="list-block media-list">
                <ul>
                     <li>
                        <div class="item-content">
                            <div class="item-inner">
                              <div class="item-input">
                                <input type="date" name="date" placeholder="Date" value="{{$day->date}}">
                              </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <label class="label-checkbox item-content"> 
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Fleisch</div>
                                    <div class="item-after">Fr 12:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    
                                    <div class="card-content">
                                        <div class="item-input">
                                            <textarea type="text" name="fleisch" id="input-txt">{{ $day->fleisch }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content"> 
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Vegitarisch</div>
                                    <div class="item-after">Fr 12:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    
                                    <div class="card-content">
                                        <div class="item-input">
                                            <textarea type="text" name="vegi" id="input-txt">{{ $day->vegi }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content"> 
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Wochenhit</div>
                                    <div class="item-after">Fr 7:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    
                                    <div class="card-content">
                                        <div class="item-input">
                                            <textarea type="text" name="wochenhit" id="input-txt">{{ $day->wochenhit }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content"> 
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Sallatteller</div>
                                    <div class="item-after">Fr 7:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    
                                    <div class="card-content">
                                        <div class="item-input">
                                            <textarea type="text" name="sallatteller" id="input-txt">{{ $day->sallatteller }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content"> 
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Gemischtersallatte</div>
                                    <div class="item-after">Fr 7:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    
                                    <div class="card-content">
                                        <div class="item-input">
                                            <textarea type="text" name="gemischtersallatte" id="input-txt">{{ $day->gemischtersallatte }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content"> 
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Suppe</div>
                                    <div class="item-after">Fr 3:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    
                                    <div class="card-content">
                                        <div class="item-input">
                                            <textarea type="text" name="suppe" id="input-txt">{{ $day->suppe }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>
            <p class="buttons-row">
                <button href="#" type="submit" id="send-order" class="button button-big button-fill button-raised color-bluegray">Neue Woche</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </p>
        </form>
        <div class="toolbar">
                <div class="toolbar-inner"><a href="{{ url('/menu') }}" class="link">Back</a><a href="#" class="link"></a></div>
            </div>
      </div>
    </div>
</div>
@endsection