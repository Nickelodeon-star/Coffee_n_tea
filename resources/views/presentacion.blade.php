@extends('master')

@section('pestaña')
    <title>Coffee_N_Tea - Presentación</title>
@endsection

@section('titulo')
    <h2 class="text-center mb-4 vintage-title">Bienvenido a nuestra cafetería</h2>
@endsection

@section('contenido')
    <p>
        En Coffee_N_Tea encontrarás un ambiente cálido, clásico y acogedor donde
        los aromas de café y té artesanal se mezclan con un estilo retro único.
    </p>

    <p>
        Nuestro espacio está inspirado en cafeterías antiguas: tonos envejecidos,
        madera gastada y una atmósfera tranquila diseñada para que disfrutes cada sorbo.
    </p>

    <img src="{{asset('img/cafe.webp')}}" class="img-fluid rounded shadow vintage-img" alt="Cafetería vintage">
@endsection