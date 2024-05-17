@extends('templates.base')

@section('title', 'Libreria - Homepage')

@section('content')
<h1 class="text-center">Libri in magazzino</h1>


{{-- @dd($titles) --}}
{{-- @dump($titles)  --> ci fa vedere anche parti di codice sucecessive--}}

@if ($titles)
  <ul>
    @foreach ( $titles as $title)
      <li @style([
        'background-color: red' => $loop->first,
        'background-color: green' => $loop->last,
        'background-color: salmon' => $loop->iteration === 3,
        'background-color: gray' => $loop->even,
        'background-color: lightgray' => $loop->odd,
      ])>{{$loop->iteration}} - remaining {{$loop->remaining}} {{$title}}</li>
      {{-- @dump($loop) --}}
    @endforeach
  </ul>
@else
  <h2>Non ci sono libri</h2>
@endif


{{-- In questo caso  la scorciatoia non è utile, perchè la ul uscirebbe anche se non ci sono libri --}}
{{-- <ul> 
  @forelse ( $titles as $title )
    <li>{{$title}}</li>
  @empty
    <h2>Non ci sono libri</h2>
  @endforelse
</ul>  --}}


@endsection