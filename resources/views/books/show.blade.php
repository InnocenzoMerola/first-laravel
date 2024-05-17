@extends('templates.base')

@section('title', 'Libreria - Homepage')

@section('content')

<div class="row justify-content-center mt-5">
<div class="col-5">
    <h1>Pagina di dettagli</h1>
    <h2>Libro con id <?= $id ?></h2>
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div></div>

@endsection