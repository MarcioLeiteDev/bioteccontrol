<?php

use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PostCategController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EventController::class , 'home']);

Route::get('/empresa' , [EventController::class , 'empresa']);

Route::get('dedetizacao-de-baratas' , [EventController::class , 'barata']);

Route::get('dedetizacao-de-cupins-descupinizacao' , [EventController::class , 'cupim']);

Route::get('dedetizacao-de-escorpioes' , [EventController::class , 'escorpiao']);

Route::get('dedetizacao-de-formigas' , [EventController::class, 'formiga']);

Route::get('dedetizacao-de-carrapatos' , [EventController::class, 'carrapato']);

Route::get('dedetizacao-de-percevejo' , [EventController::class , 'percevejo']);

Route::get('dedetizacao-de-pombos' , [EventController::class , 'pombo']);

Route::get('dedetizacao-de-pulgas' , [EventController::class, 'pulga']);

Route::get('dedetizacao-de-ratos-desratizacao' , [EventController::class , 'rato']);

Route::get('limpeza-caixa-dagua' , [EventController::class, 'caixa_agua']);

Route::get('desentupimento' , [EventController::class , 'desentupimento']);

Route::get('localizacao' , [EventController::class , 'localizacao']);

Route::get('area' , [EventController::class , 'area']);

Route::get('area/{url}' , [PostController::class , 'post']);

Route::get('contato' , [EventController::class , 'contato']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dashboard' , [DashboardController::class , 'index'])->name('home');
});



Route::get('dashboard/home' , [DashboardController::class , 'index'])->name('home');



Route::get('dashboard/usuarios' , [UserController::class , 'index'])->name('users');

Route::get('dashboard/usuarios/create' , [UserController::class , 'create'])->name('create_user');

Route::post('dashboard/usuarios/cad_user' , [UserController::class , 'store'])->name('cad_user');

Route::get('dashboard/usuarios/update/{id}' , [UserController::class , 'edit'])->name('edit_user');

Route::post('dashboard/usuarios/update/' , [UserController::class, 'update'])->name('update_user');

Route::get('dashboard/usuarios/destroy/{id}' , [UserController::class, 'destroy'])->name('destroy_user');



Route::get('dashboard/orcamentos' , [BudgetController::class , 'index'])->name('budget');

Route::get('dashboard/sair' , [DashboardController::class , 'destroy'])->name('destroy_session');

Route::get('dashboard/orcamentos/create' , [BudgetController::class , 'create'])->name('create_budget');

Route::post('dashboard/orcamentos/cad_budget' , [BudgetController::class , 'store'])->name('cad_budget');

Route::post('dashboard/orcamentos/create/cad_budget' , [BudgetController::class , 'store'])->name('cad_budget');

Route::get('dashboard/orcamentos/pdf/{id}' , [BudgetController::class , 'show'])->name('budget_pdf');

Route::get('dashboard/orcamentos/update/{id}' , [BudgetController::class , 'edit'])->name('budget_edit');

Route::post('dashboard/orcamentos/update/update_budget' , [BudgetController::class , 'update'])->name('budget_update');

Route::get('dashboard/orcamentos/destroy/{id}' , [BudgetController::class , 'destroy'] )->name('budget_destroy');

Route::get('dashboard/orcamentos/create/{id}' , [BudgetController::class , 'cad']);


Route::get('dashboard/clientes' , [CustomerController::class, 'index'])->name('customer');

Route::get('dashboard/clientes/create' , [CustomerController::class , 'create'])->name('customer_create');

Route::post('dashboard/clientes/restore' , [CustomerController::class , 'store'])->name('customer_cad');

Route::post('dashboard/clientes/create/{id}' , [CustomerController::class , 'show'])->name('customer_show');

Route::get('dashboard/clientes/update/{id}' , [CustomerController::class , 'edit'])->name('customer_update');

Route::post('dashboard/clientes/update/cad' , [CustomerController::class , 'update'])->name('customer_edit');

Route::get('dashboard/clientes/destroy/{id}' , [CustomerController::class , 'destroy'])->name('customer_destroy');

Route::get('dashboard/orcamentos/create_cad' , [CustomerController::class , 'view']);


Route::get('dashboard/servicos' , [ServiceController::class , 'index'])->name('service');

Route::get('dashboard/servicos/create' , [ServiceController::class , 'create'])->name('service_create');

Route::post('dashboard/servicos/cad_service' , [ServiceController::class , 'store'])->name('service_cad');

Route::get('dashboard/servicos/update/{id}' , [ServiceController::class , 'edit'])->name('service_edit');

Route::post('dashboard/servicos/update/update_service' , [ServiceController::class , 'update'])->name('service_update');

Route::get('dashboard/servicos/destroy/{id}' , [ServiceController::class , 'destroy'])->name('service_destroy');

Route::get('dashboard/servicos/pdf/{id}' , [ServiceController::class , 'show'])->name('service_pdf');



Route::get('dashboard/financeiro' , [InvoiceController::class , 'index'])->name('invoice');

Route::post('dashboard/financeiro/store' , [InvoiceController::class , 'store'])->name('invoice_store');

Route::get('dashboard/financeiro/status/{id}' , [InvoiceController::class , 'show']);

Route::get('dashboard/financeiro/destroy/{id}' , [InvoiceController::class , 'destroy']);

Route::get('dashboard/post' , [PostController::class , 'index']);

Route::get('dashboard/categorias' , [PostCategController::class , 'index']);

Route::post('dashboard/categorias/store' , [PostCategController::class , 'store']);

Route::get('dashboard/categorias/edit/{id}' , [PostCategController::class , 'show']);

Route::post('dashboard/categorias/update' , [PostCategController::class , 'update']);

Route::get('dashboard/categorias/destroy/{id}' , [PostCategController::class , 'destroy']);

Route::get('dashboard/post/create' , [PostController::class , 'input']);

Route::post('dashboard/post/store' , [PostController::class , 'store']);

Route::get('dashboard/post/destroy/{id}' , [PostController::class , 'destroy']);

Route::get('dashboard/post/edit/{id}' , [PostController::class , 'show']);


Route::post('dashboard/post/update' , [PostController::class , 'update']);



















