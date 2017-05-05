@extends('layouts.app') 
@section('content') 
<div class="pages">
    <div data-page="orders" class="page">
     <div class="page-content">
        <form method="POST" action="/days/{{ $day->id }}/orders">
            {!! csrf_field() !!}

            <div class="content-block-title">{{ $day->day }} - {{$day->date}}</div>
            <div class="list-block media-list">
                <ul>
                    <li>
                        <label class="label-checkbox item-content valid-class">
                            <input type="checkbox" name="o_fleisch" value="{{ $day->fleisch }}">
                            <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Fleisch</div>
                                    <div class="item-after">Fr 12:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    <div style="background-image:url('../images/fleisch.jpg')" valign="bottom" class="card-header color-white"></div>
                                    <div class="card-content">
                                        <div class="card-content-inner" name="o_fleisch">{{ $day->fleisch }}</div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="item-title  new-label">Menge</div>
                                        <input type="number" name="nr_fleisch" class="modal-text-input" placeholder="Enter number of meals">
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content valid-class">
                            <input type="checkbox" name="o_vegi" value="{{ $day->vegi }}">
                            <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Vegi</div>
                                    <div class="item-after">Fr 12:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    <div style="background-image:url('../images/vegi.jpg')" valign="bottom" class="card-header color-white"></div>
                                    <div class="card-content">
                                        <div class="card-content-inner">{{ $day->vegi }}</div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="item-title new-label">Menge</div>
                                        <input type="number" name="nr_vegi" class="modal-text-input">
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content valid-class">
                            <input type="checkbox" name="o_wochenhit" value="{{ $day->wochenhit }}">
                            <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Wochenhit</div>
                                    <div class="item-after">Fr 7:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    <div style="background-image:url('../images/wochenhit.jpg')" valign="bottom" class="card-header color-white"></div>
                                    <div class="card-content">
                                        <div class="card-content-inner">{{ $day->wochenhit }}</div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="item-title new-label">Menge</div>
                                        <input type="number" name="nr_wochenhit" class="modal-text-input">
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content valid-class">
                            <input type="checkbox" name="o_sallatteller" value="{{ $day->sallatteller }}">
                            <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Sallatteller</div>
                                    <div class="item-after">Fr 7:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    <div style="background-image:url('../images/sallate.jpg')" valign="bottom" class="card-header color-white"></div>
                                    <div class="card-content">
                                        <div class="card-content-inner">{{ $day->sallatteller }}</div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="item-title new-label">Menge</div>
                                        <input type="number" name="nr_sallatteller" class="modal-text-input">
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content valid-class">
                            <input type="checkbox" class="sallate" name="o_gemischtersallatte" value="{{ $day->gemischtersallatte }}">
                            <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Gemischtersallatte</div>
                                    <div class="item-after">Fr 7:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    <div style="background-image:url('../images/gemischtersallatte.jpg')" valign="bottom" class="card-header color-white"></div>
                                    <div class="card-content">
                                        <div class="card-content-inner">{{ $day->gemischtersallatte }}</div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="item-title new-label">Menge</div>
                                        <input type="number" name="nr_gemischtersallatte" class="modal-text-input">
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                    <li>
                        <label class="label-checkbox item-content valid-class">
                            <input type="checkbox"  class="suppe" name="o_suppe" value="{{ $day->suppe }}">
                            <div class="item-media"><i class="icon icon-form-checkbox"></i></div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title">Suppe</div>
                                    <div class="item-after">Fr 3:50</div>
                                </div>
                                <div class="card demo-card-header-pic">
                                    <div style="background-image:url('../images/suppe.jpg')" valign="bottom" class="card-header color-white"></div>
                                    <div class="card-content">
                                        <div class="card-content-inner">{{ $day->suppe }}</div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="item-title new-label">Menge</div>
                                        <input type="number" name="nr_suppe" class="modal-text-input">
                                    </div>
                                </div>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>
            <p class="buttons-row">
                <input  type="submit" id="send-order" class="button button-big button-fill button-raised color-bluegray send-order test" value="Menü bestellen" disabled>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </p>
        </form>
      </div>
    </div>
</div>


@endsection