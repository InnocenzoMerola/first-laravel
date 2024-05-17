
<button class={{ $attributes->class('btn') }}>{{$attributes->get('start')}} {{$slot}}</button>

{{-- Possiamo scrivere anche in questi altri due modi --}}

{{--
1-  <button>{{$attributes->start. ' '. $slot}}</button>
2-  <button>{{"$attributes->start $slot"}}</button> 
--}}