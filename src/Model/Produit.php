<?php

namespace Amorytraore\Produit\Model;

use Amorytraore\Produit\Model\Categorie;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable=['libelle', 'description', 'quantite', 'prix', 'categorie'];
    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

}
