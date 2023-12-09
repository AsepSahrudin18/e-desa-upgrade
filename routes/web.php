<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    DusunController,
    PendudukController,
    KartuKeluargaController,
    KematianController,
    KelahiranController,
    MutasiController,
    SuratController,
    UserController,


};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',function(){
    return redirect()->route('login');
  //   return redirect('dashboard');
  });
  
  Route::group(['middleware' => 'auth'], function(){
      Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
      Route::resource('penduduk', PendudukController::class);
      Route::resource('dusun', DusunController::class);
      Route::resource('kartukeluarga', KartuKeluargaController::class);
      Route::resource('detailkartukeluarga', DetailKartuKeluargaController::class);
      Route::resource('kematian', KematianController::class);
      Route::resource('kelahiran', KelahiranController::class);
      Route::resource('mutasi', MutasiController::class);
      Route::resource('surat', SuratController::class);
      Route::resource('user', UserController::class);
  
      Route::get('persetujuan/{id}/{fungsi}/{kondisi}', [SupportController::class, 'persetujuan'])->name('persetujuan');
      Route::get('file/{id}/{fungsi}', [SupportController::class,'file'])->name('file');
  });
  //auth laravel
  Auth::routes();