<?php

namespace Amorytraore\Produit\Http\Controller\Produit;

use Illuminate\Http\Request;

use Amorytraore\Produit\Model\Produit;
use Amorytraore\Produit\Model\Categorie;
use App\Http\Controllers\Controller;
use Session;

class ProduitsController extends Controller
{

    

    
    public function index()
    {
        
        $produits = Produit::paginate(8);
        return view('produit::pages.backoffice.produit.liste', compact('produits'));
    }

    public function create(){

        $categories = Categorie::all();
        return view('produit::pages.backoffice.produit.create', compact('categories'));
    }


    public function store(Request $request){

                $produit = new Produit();
        $produit->libelle = $request->libelle;
        $produit->description = $request->desc;
        $produit->quantite = $request->qtte;
        $produit->prix = $request->prix;
        $produit->image  = $request->file('image')->store('produit');  
        $produit->save();
        Session::flash('success','Vous Avez Bien Ajouer votre nouveaux Produit');
        $cates=$request->titre;
        // dd($cates);
        foreach ($cates as $cat) {
            $categorie = Categorie::findOrFail($cat);
             $produit->categories()->attach($categorie);
        }
        return redirect()->route('liste');

    }

    public function edit($id){
        $produit = Produit::findorfail($id);
        return view('produit::pages.backoffice.produit.edit', compact('produit'));
    }
    public function update(Request $request, $id){

        $produit = Produit::findorfail($id);
        $produit->libelle = $request->libelle;
        $produit->description = $request->desc;
        $produit->quantite = $request->qtte;
        $produit->prix = $request->prix;
        $produit->categorie = $request->categorie;

        $produit->save();
        Session::flash('success','Vous Avez Bien Modifier votre Produit');
        return redirect()->route('edit', $id);
    }
   
    public function destroy($id){
        $produit = Produit::findorfail($id);
        $produit->delete()->withSuccess('success','Vous Avez Bien Supprimer votre Produit');
        // Session::flash('success','Vous Avez Bien Supprimer votre Produit');
        return redirect()->route('liste');
    }
}
