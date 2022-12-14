@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 80px">
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="/">Inicio</a></li>
<li class="breadcrumb-item active" aria-current="page">Tienda</li>
</ol>
</nav>
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-7">
<h4>Productos</h4>
</div>
</div>
<hr>
<div class="row">
@foreach($producto as $producto)
<div class="col-lg-3">
<div class="card" style="margin-bottom: 20px; height: auto;">
<img src="/Assets/Productos/{{ $producto->image }}"
class="card-img-top mx-auto"
style="height: 150px; width: 150px;display: block;"
alt="{{ $producto->image }}"> 
<div class="card-body">
<a href=""><h6 class="card-title">{{ $producto->name }}</h6></a>
<p>Q{{ $producto->price }}</p>

</=div>
</div>
</div>
@endforeach
</div>
</div>
</div>
</div>
@endsection