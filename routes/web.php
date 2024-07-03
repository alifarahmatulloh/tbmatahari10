<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\KategoriController;
use App\Http\Controllers\Backend\BarangController;
use App\Http\Controllers\Backend\PengeluaranController;
use App\Http\Controllers\Backend\PosController;

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

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// Admin Route
Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

// Admin Route for Authentication
Route::middleware(['auth'])->group(function(){

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/password/change', [AdminController::class, 'ChangePassword'])->name('change.password');
    Route::post('/password/update', [AdminController::class, 'UpdatePassword'])->name('update.password');

        // Employee Route
    Route::controller(EmployeeController::class)->group(function(){
        Route::get('/employee/all', 'AllEmployee')->name('all.employee');
        Route::get('/employee/add', 'AddEmployee')->name('add.employee');
        Route::post('/employee/store', 'StoreEmployee')->name('employee.store');
        Route::get('/employee/edit/{id}', 'EditEmployee')->name('edit.employee');
        Route::post('/employee/update', 'UpdateEmployee')->name('employee.update');
        Route::get('/employee/delete/{id}', 'DeleteEmployee')->name('delete.employee');
    });

        // Customer Route
    Route::controller(CustomerController::class)->group(function(){
        Route::get('/customer/all', 'AllCustomer')->name('all.customer');
        Route::get('/customer/add', 'AddCustomer')->name('add.customer');
        Route::get('/customer/detail/{id}', 'DetailCustomer')->name('detail.customer');
        Route::post('/customer/store', 'StoreCustomer')->name('customer.store');
        Route::get('/customer/edit/{id}', 'EditCustomer')->name('edit.customer');
        Route::post('/customer/update', 'UpdateCustomer')->name('customer.update');
        Route::get('/customer/delete/{id}', 'DeleteCustomer')->name('delete.customer');
    });

    // Supplier Route
    Route::controller(SupplierController::class)->group(function(){
        Route::get('/supplier/all', 'AllSupplier')->name('all.supplier');
        Route::get('/supplier/add', 'AddSupplier')->name('add.supplier');
        Route::get('/supplier/detail/{id}', 'DetailSupplier')->name('detail.supplier');
        Route::post('/supplier/store', 'StoreSupplier')->name('supplier.store');
        Route::get('/supplier/edit/{id}', 'EditSupplier')->name('edit.supplier');
        Route::post('/supplier/update', 'UpdateSupplier')->name('supplier.update');
        Route::get('/supplier/delete/{id}', 'DeleteSupplier')->name('delete.supplier');
    });

        // Kategori Route
    Route::controller(KategoriController::class)->group(function(){
        Route::get('/kategori/all', 'AllKategori')->name('all.kategori');
        Route::post('/kategori/store', 'StoreKategori')->name('kategori.store');
        Route::get('/kategori/edit/{id}', 'EditKategori')->name('edit.kategori');
        Route::post('/kategori/update', 'UpdateKategori')->name('kategori.update');
        Route::get('/kategori/delete/{id}', 'DeleteKategori')->name('delete.kategori');
    });

        // Barang Route
    Route::controller(BarangController::class)->group(function(){
        Route::get('/barang/all', 'AllBarang')->name('all.barang');
        Route::get('/barang/add', 'AddBarang')->name('add.barang');
        Route::post('/barang/store', 'StoreBarang')->name('barang.store');
        Route::get('/barang/edit/{id}', 'EditBarang')->name('edit.barang');
        Route::post('/barang/update', 'UpdateBarang')->name('barang.update');
        Route::get('/barang/delete/{id}', 'DeleteBarang')->name('delete.barang');

        Route::get('barang/import/', 'ImportBarang')->name('import.barang');
        Route::get('/export', 'Export')->name('export');
        Route::post('/import', 'Import')->name('import');
    });

        // Pengeluaran Route
    Route::controller(PengeluaranController::class)->group(function(){
        Route::get('/pengeluaran/add', 'AddPengeluaran')->name('add.pengeluaran');
        Route::post('/pengeluaran/store', 'StorePengeluaran')->name('pengeluaran.store');
        Route::get('/pengeluaran/today', 'TodayPengeluaran')->name('today.pengeluaran');
        Route::get('/pengeluaran/month', 'MonthPengeluaran')->name('month.pengeluaran');
        Route::get('/pengeluaran/year', 'YearPengeluaran')->name('year.pengeluaran');
        Route::get('/pengeluaran/edit/{id}', 'EditPengeluaran')->name('edit.pengeluaran');
        Route::post('/pengeluaran/update', 'UpdatePengeluaran')->name('pengeluaran.update');
    });

    // POS Route
    Route::controller(PosController::class)->group(function(){
        Route::get('/pos/umum', 'PosUmum')->name('pos.umum');

        Route::post('/cart-add', 'AddCart');
        Route::get('/allitem', 'AllItem');
        Route::post('/cart-update/{rowId}', 'UpdateCart');
        Route::get('/cart-remove/{rowId}', 'RemoveCart');

        Route::post('/discount/apply', 'ApplyDiscount');
        Route::post('/shipping/apply', 'ApplyShipping');

        Route::get('/invoice/create', 'CreateInvocice');
    });


}); // End Middlewere





