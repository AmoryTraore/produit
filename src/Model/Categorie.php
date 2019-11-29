<?php

namespace Amorytraore\Produit\Model;

use Amorytraore\Produit\Model\Produit;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=['titre'];
    
    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }
}
