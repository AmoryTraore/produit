@extends('produit::layouts.app')
@section('contenu')

    <div class="container">
        <div class="row">
            <div class="">
    <form action="{{route('categorie_store')}}" method="post" class="col-12 col-sm-8 offset-sm-2">
            @method('POST')
        @csrf
                <div class="form-group">
                        <label for="titre">Titre</label>
                        <input type="text" name="titre" id="titre" class="form-control" placeholder="Titre de la catégorie">
                </div>
                <div class="center">
                    
                    <button type="submit" >Ajouter</button>
                </div>
            </form>
        </div>
    </div>
        </div>
   @endsection