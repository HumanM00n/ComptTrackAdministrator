@extends('layouts.app')
  
@section('title', 'Afficher le produit')
  
@section('contents')
    <h1 class="mb-0">Détail du produit</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" placeholder="Titre" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Prix</label>
            <input type="text" name="price" class="form-control" placeholder="Prix" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Code du produit</label>
            <input type="text" name="product_code" class="form-control" placeholder="Code produit" value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Description" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Créé le</label>
            <input type="text" name="created_at" class="form-control" placeholder="Créé à" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Mis à jour le</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Mis à jour le" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection