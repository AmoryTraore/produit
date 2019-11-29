@extends('produit::layouts.app')
@section('contenu')

    <div class="container">
        <div class="row">
            <div class="">
    <form action="{{route('categorie_update', $categorie->id)}}" method="post" class="col-12 col-sm-8 offset-sm-2">
            @method('PATCH')
        @csrf
                <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" name="titre" id="titre" class="form-control" value="{{$categorie->titre}}" placeholder="Titre de la catégorie">
                </div>
                
                <div class="center">
                    
                    <button type="submit" >Ajouter</button>
                </div>
            </form>
        </div>
    </div>
        </div>
   @endsection