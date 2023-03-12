<?php

Route::get('/', function() {
    return redirect(route('admin.dashboard'));
});

Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController')->name('dashboard');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});

Route::get('opd', ['as' => 'admin.opd.index', 'uses' => 'OpdController@index']);
Route::get('opd/create', ['as' => 'admin.opd.create', 'uses' => 'OpdController@create']);
Route::post('opd', ['as' => 'admin.opd.store', 'uses' => 'OpdController@store']);
Route::get('opd/edit/{id}', ['as' => 'admin.opd.edit', 'uses' => 'OpdController@edit']);
Route::put('opd/edit/{id}', ['as' => 'admin.opd.update', 'uses' => 'OpdController@update']);
Route::get('opd/delete/{id}', ['as' => 'admin.opd.delete', 'uses' => 'OpdController@delete']);

Route::get('jenis_aset', ['as' => 'admin.jenis_aset.index', 'uses' => 'JenisAsetController@index']);
Route::get('jenis_aset/create', ['as' => 'admin.jenis_aset.create', 'uses' => 'JenisAsetController@create']);
Route::post('jenis_aset', ['as' => 'admin.jenis_aset.store', 'uses' => 'JenisAsetController@store']);
Route::get('jenis_aset/edit/{id}', ['as' => 'admin.jenis_aset.edit', 'uses' => 'JenisAsetController@edit']);
Route::put('jenis_aset/edit/{id}', ['as' => 'admin.jenis_aset.update', 'uses' => 'JenisAsetController@update']);
Route::get('jenis_aset/delete/{id}', ['as' => 'admin.jenis_aset.delete', 'uses' => 'JenisAsetController@delete']);

Route::get('aset_tik', ['as' => 'admin.aset_tik.index', 'uses' => 'AsetController@index']);
Route::get('aset_tik/create', ['as' => 'admin.aset_tik.create', 'uses' => 'AsetController@create']);
Route::post('aset_tik', ['as' => 'admin.aset_tik.store', 'uses' => 'AsetController@store']);
Route::get('aset_tik/edit/{id}', ['as' => 'admin.aset_tik.edit', 'uses' => 'AsetController@edit']);
Route::put('aset_tik/edit/{id}', ['as' => 'admin.aset_tik.update', 'uses' => 'AsetController@update']);
Route::get('aset_tik/delete/{id}', ['as' => 'admin.aset_tik.delete', 'uses' => 'AsetController@delete']);

Route::get('lokasi_aset', ['as' => 'admin.lokasi_aset.index', 'uses' => 'LokasiAsetController@index']);
Route::get('lokasi_aset/create', ['as' => 'admin.lokasi_aset.create', 'uses' => 'LokasiAsetController@create']);
Route::post('lokasi_aset', ['as' => 'admin.lokasi_aset.store', 'uses' => 'LokasiAsetController@store']);
Route::get('lokasi_aset/edit/{id}', ['as' => 'admin.lokasi_aset.edit', 'uses' => 'LokasiAsetController@edit']);
Route::put('lokasi_aset/edit/{id}', ['as' => 'admin.lokasi_aset.update', 'uses' => 'LokasiAsetController@update']);
Route::get('lokasi_aset/delete/{id}', ['as' => 'admin.lokasi_aset.delete', 'uses' => 'LokasiAsetController@delete']);

Route::get('maintenance', ['as' => 'admin.maintenance.index', 'uses' => 'MaintenanceController@index']);
Route::get('maintenance/create', ['as' => 'admin.maintenance.create', 'uses' => 'MaintenanceController@create']);
Route::post('maintenance', ['as' => 'admin.maintenance.store', 'uses' => 'MaintenanceController@store']);
Route::get('maintenance/edit/{id}', ['as' => 'admin.maintenance.edit', 'uses' => 'MaintenanceController@edit']);
Route::put('maintenance/edit/{id}', ['as' => 'admin.maintenance.update', 'uses' => 'MaintenanceController@update']);
Route::get('maintenance/delete/{id}', ['as' => 'admin.maintenance.delete', 'uses' => 'MaintenanceController@delete']);

Route::get('pengguna', ['as' => 'admin.pengguna.index', 'uses' => 'PenggunaController@index']);
Route::get('pengguna/create', ['as' => 'admin.pengguna.create', 'uses' => 'UserController@create']);
Route::post('pengguna', ['as' => 'admin.pengguna.store', 'uses' => 'PenggunaController@store']);
Route::get('pengguna/edit/{id}', ['as' => 'admin.pengguna.edit', 'uses' => 'PenggunaController@edit']);
Route::put('pengguna/edit/{id}', ['as' => 'admin.pengguna.update', 'uses' => 'PenggunaController@update']);
Route::get('pengguna/delete/{id}', ['as' => 'admin.pengguna.delete', 'uses' => 'PenggunaController@delete']);