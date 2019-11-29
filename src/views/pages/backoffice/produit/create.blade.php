@extends('produit::layouts.app')
@section('contenu')

    <div class="container">
        <div class="row">
            <div class="">
    <form action="{{route('store')}}" method="post"  enctype="multipart/form-data" class="col-12 col-sm-8 offset-sm-2">
            @method('POST')
        @csrf

                <div class="form-group">
                    <label for="libelle">Libellé</label>
                    <input type="text" class="form-control @error('type')is-invalid @enderror" name="libelle" id="libelle" placeholder="Libellé du produit">             
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea class="form-control" name="desc" id="desc"></textarea>
                </div>
                <div class="form-group">
                    <label for="qtte">Quantité</label>
                    <input type="text" class="form-control" name="qtte" id="qtte" placeholder="Quantité du produit">
                </div>
                <div class="form-group">
                    <label for="prix">Prix</label>
                    <input type="text" name="prix" id="prix" class="form-control" placeholder="Prix unitaire">
                </div>
                <div class="form-group">
                  <label for="image">Image : </label><br>
                  <input type="file" class="form-control-file" name="image" id="image" placeholder="Image" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Veuillez choisir votre image</small>
                </div>
                <div class="form-group">
                  <label for="">Categorie : </label><br>                  
                  @foreach ($categories as $categorie)
                
                      <input type="checkbox" name="titre[]" value="{{$categorie->id}}" multiple/>
                      <span>{{$categorie->titre}}</span>
                    
                    @endforeach
                </div>
            
            <div class="center">
                    
                    <button type="submit" >Ajouter produit</button>
                </div>
            </form>
        </div>
    </div>
        </div>
   @endsection