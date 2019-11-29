@extends('produit::layouts.app')
@section('contenu')
    
    <div class="container">
    <form action="{{route('update', $produit->id)}}" method="post" class="col-12 col-sm-8 offset-sm-2">
            @method('PATCH')
            @csrf
           <div class="form-group">
             <label for="">Libellé</label>
           <input type="text" class="form-control" name="libelle" id="" value="{{$produit->libelle}}">             
           </div>
           <div class="form-group">
             <label for="">Description</label>
           <textarea class="form-control" name="desc">{{$produit->description}}</textarea>
           </div>
            <div class="form-group">
              <label for="">Quantité</label>
              <input type="text" class="form-control" name="qtte" id="" value="{{$produit->quantite}}">
            </div>
            <div class="form-group">
              <label for="">Prix</label>
              <input type="text" name="prix" id="" class="form-control" value="{{$produit->prix}}">
            </div>
            <div class="form-group">
                  <label for="image">Image : </label><br>
                  <input type="file" class="form-control-file" name="image" id="image" placeholder="Image" aria-describedby="fileHelpId">
                  <small id="fileHelpId" class="form-text text-muted">Veuillez choisir votre image</small>
                </div>
            <div class="form-group">
                <label for="categorie">Categorie</label>
                <input type="text" name="categorie" id="categorie" class="form-control" value="{{$produit->categorie}}" placeholder="categorie">
           </div>  
           
            <div class="form-group center">
                <a href="#!"></a>
                    <button type="submit" class="btn btn-primary center">modifier</button>
              
            </div>
        </form><br>
   </div>    
@endsection