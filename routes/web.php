<?php

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

Route::get('/', function(){
    return view('index');
});

Route::group(['prefix' => 'buku'], function(){
    Route::get('/', [
        'uses' => 'BukuController@index',
        'as' => 'buku'
    ]);
    Route::get('/form-tambah', [
        'uses' => 'BukuController@create',
        'as' => 'buku.form_tambah'
    ]);
    Route::get('/form-ubah/{id}', [
        'uses' => 'BukuController@edit',
        'as' => 'buku.form_ubah'
    ]);
    Route::post('/simpan', [
        'uses' => 'BukuController@store',
        'as' => 'buku.simpan'
    ]);
    Route::put('/ubah/{id}', [
        'uses' => 'BukuController@update',
        'as' => 'buku.ubah'
    ]);
    Route::delete('/hapus/{id}', [
        'uses' => 'BukuController@destroy',
        'as' => 'buku.hapus'
    ]);
    Route::get('/cari', [
        'uses' => 'BukuController@search',
        'as' => 'buku.cari'
    ]);
    Route::get('/cetak-pdf', [
        'uses' => 'BukuController@exportAllPDF',
        'as' => 'buku.cetak_pdf'
    ]);
    Route::get('/cetak-excel', [
        'uses' => 'BukuController@exportAllExcel',
        'as' => 'buku.cetak_pdf'
    ]);
});
