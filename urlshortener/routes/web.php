<?php

use Illuminate\Support\Facades\Route;

use App\models\Url;

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

Route::get('/', function () {
    return view('welcome');
});


Route::post('/', function () {
   $url = request('url');
  // Valider l'url
  Validator::make(compact('url'), 

  ['url'=>'required|url'],
   ['url.required'=>'Vous devez fournir une URL.', 'url.url'=>'URL invalide.']
  )->validate();
  // Verifier si l'url a deja ete raccourcie et la retourner si tel est le cas

  $record = Url::where('url', $url )->first();

  if($record){
    return view('result')->with('shortened', $record->shortened);
  }
  //Creer une nouvelle short et la retourner

  function get_unique_short_url()
  {
    $shortened = Str::random(5);

    if(Url::where('shortened')->count() > 0){
        return get_unique_short_url();
    }

    return  $shortened;
  }

   $new_url = Url::create([
    'url' => request('url'),
    'shortened' => get_unique_short_url(),
   ]);

   if($new_url){
    return view('result')->with('shortened', $new_url->shortened);
   }
  //Felicitation voici l'url raccourcie
});

// Redirection vers l'url original
Route::get('/{shortened}', function ($shortened) {
    $url = Url::where('shortened', $shortened)->first();

    if(! $url){
        return redirect('/');
    }
    return redirect($url->url);
});