<?php

use Illuminate\Support\Facades\Route;

enum Section: string
{
    case Phone = 'phone';
    case Computer = 'computer';
    case Device = 'device';

}
Route::get('section/{section}',function (Section $section){
    return $section->value;
});
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
Route::resource('example',\App\Http\Controllers\ExampleController::class);

Route::group(['middleware'=>'test:55,hello'], function () {
    Route::get('middle',fn()=>'middle');
    Route::get('ware',fn()=>'ware');
});
Route::domain('{accoutn}.localhost')->group(function ($account){
    Route::get('/', function (){
        return view('welcome');
    });
});
Route::view('my/data','my_data');


//Route::get('/{id}', function ($id) {
//    return " my id = ".$id;
//})->where(['id'=>'[0-9]']);

//Route::fallback( fn()=>redirect('/'));

Route:: view('/','index');


//Route::get('/', function () {
//    return    '<form method="post" action="welcome">
//'.csrf_field().'
//<input type="submit"value="go">
//</form>';
//});
//Route::post('/welcome', function () {
//    return "view('welcome')";
//});

//Route::get('/', function () {
//    return view('welcome');
//});
