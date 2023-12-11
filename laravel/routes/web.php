<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/saluto', function(){
    
    return response('<h1>ciao da laravel</h2>', 200)
        ->header('Content-Type','text/plain')
        ->header('chiave','messagio custom');

});

Route::get('articoli/{id}', function($id){
    // ddd($id);
    return response('Post' . $id);
})
->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
    dd($request);
    return $request->nome . ' ' . $request->apiKey;
});


Route::get('/primo', function(){
    return view('primo', [
        'intestazioni' => 'le ultime note',
        'contents' => [
            [
                'id' => 1,
                'title' => 'Nota 1',
                'description' => 'lorem ipsum...'
            ],
            [
                'id' => 2,
                'title' => 'Nota 2',
                'description' => 'lorem ipsum 2 ...'
            ]
        ]
    ]);
});

Route::get('/notes', function(){
    return view('notes', [
        'intestazioni' => 'le ultime note',
        'contents' => [
            [
                'id' => 1,
                'title' => 'Nota 1',
                'description' => 'lorem ipsum...'
            ],
            [
                'id' => 2,
                'title' => 'Nota 2',
                'description' => 'lorem ipsum 2 ...'
            ]
        ]
    ]);
});