<?php
Route::group(['namespace'=>'Sm\Produit\Http\Controller'], function(){

    Route::get('/accueil',                                'PagesController@index')->name('accueil');
    Route::get('/produit',                          'Produit\ProduitsController@index')->name('liste');
    Route::get('/produit/create',                   'Produit\ProduitsController@create')->name('create');
    Route::post('/produit/save',                    'Produit\ProduitsController@store')->name('store');
    Route::get('/produit/edit/{id}',                'Produit\ProduitsController@edit')->name('edit');
    Route::patch('/produit/update/{id}',            'Produit\ProduitsController@update')->name('update');
    Route::delete('/produit/delete/{id}',           'Produit\ProduitsController@destroy')->name('delete');

    
    Route::get('/categorie',                        'Categorie\CategoriesController@index')->name('categorie_liste');
    Route::get('/categorie/create',                 'Categorie\CategoriesController@create')->name('categorie_create');
    Route::post('/categorie/save',                  'Categorie\CategoriesController@store')->name('categorie_store');
    Route::get('/categorie/edit/{id}',              'CaCategorie\tegoriesController@edit')->name('categorie_edit');
    Route::patch('/categorie/update/{id}',          'Categorie\CategoriesController@update')->name('categorie_update');
    Route::delete('/categorie/delete/{id}',         'Categorie\CategoriesController@destroy')->name('categorie_delete');

});

