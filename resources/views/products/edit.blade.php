@extends('layouts.app')
  
@section('title', 'Modification du produit')
  
@section('contents')
    <h1 class="mb-0">Modifier le produit</h1>
    <hr />
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Titre" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Prix</label>
                <input type="text" name="price" class="form-control" placeholder="Prix" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Code du produit</label>
                <input type="text" name="product_code" class="form-control" placeholder="Code du produit" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Sauvergader</button>
            </div>
        </div>
    </form>
@endsection