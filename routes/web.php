<?php

use App\Http\Controllers\Admin\CoffeeSpaceController;
use App\Http\Controllers\Admin\EventRoomController;
use App\Http\Controllers\Admin\EventStageController;
use App\Http\Controllers\Admin\ParticipantController;
use App\Http\Controllers\Admin\UserController;
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


Route::get('/login', [function () {
    // return view('admin.main.index');
    return view('admin.login.index');
}])->name('login');

Route::post('/admin/login', [UserController::class, 'login'])->name('admin.signin');

Route::middleware(['auth'])->group(function () {

    Route::get('/', [UserController::class, 'dashboard'])->name('app.root');

    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/participant/add', [ParticipantController::class, 'add'])->name('admin.participant.add');
    Route::post('/admin/participant/save', [ParticipantController::class, 'save'])->name('admin.participant.save');
    Route::get('/admin/participant/edit/{id}', [ParticipantController::class, 'edit'])->name('admin.participant.edit');
    Route::get('/admin/participant/details/{id}', [ParticipantController::class, 'details'])->name('admin.participant.details');
    Route::put('/admin/participant/update/{id}', [ParticipantController::class, 'update'])->name('admin.participant.update');
    Route::put('/admin/participant/update-details/{id}', [ParticipantController::class, 'update-details'])->name('admin.participant.update-details');
    Route::post('/admin/participant/delete/{id?}', [ParticipantController::class, 'delete'])->name('admin.participant.delete');

    Route::get('/admin/event-rooms/add', [EventRoomController::class, 'add'])->name('admin.event-rooms.add');
    Route::post('/admin/event-rooms/save', [EventRoomController::class, 'save'])->name('admin.event-rooms.save');
    Route::get('/admin/event-rooms/edit/{id}', [EventRoomController::class, 'edit'])->name('admin.event-rooms.edit');
    Route::get('/admin/event-rooms/details/{id}', [EventRoomController::class, 'details'])->name('admin.event-rooms.details');
    Route::put('/admin/event-rooms/update/{id}', [EventRoomController::class, 'update'])->name('admin.event-rooms.update');
    Route::post('/admin/event-rooms/delete/{id?}', [EventRoomController::class, 'delete'])->name('admin.event-rooms.delete');

    Route::get('/admin/event-stages/add', [EventStageController::class, 'add'])->name('admin.event-stages.add');
    Route::post('/admin/event-stages/save', [EventStageController::class, 'save'])->name('admin.event-stages.save');
    Route::get('/admin/event-stages/edit/{id}', [EventStageController::class, 'edit'])->name('admin.event-stages.edit');
    Route::put('/admin/event-stages/update/{id}', [EventStageController::class, 'update'])->name('admin.event-stages.update');
    Route::post('/admin/event-stages/delete/{id?}', [EventStageController::class, 'delete'])->name('admin.event-stages.delete');

    Route::get('/admin/coffee-spaces/add', [CoffeeSpaceController::class, 'add'])->name('admin.coffee-spaces.add');
    Route::post('/admin/coffee-spaces/save', [CoffeeSpaceController::class, 'save'])->name('admin.coffee-spaces.save');
    Route::get('/admin/coffee-spaces/edit/{id}', [CoffeeSpaceController::class, 'edit'])->name('admin.coffee-spaces.edit');
    Route::get('/admin/coffee-spaces/details/{id}', [CoffeeSpaceController::class, 'details'])->name('admin.coffee-spaces.details');
    Route::put('/admin/coffee-spaces/update/{id}', [CoffeeSpaceController::class, 'update'])->name('admin.coffee-spaces.update');
    Route::post('/admin/coffee-spaces/delete/{id?}', [CoffeeSpaceController::class, 'delete'])->name('admin.coffee-spaces.delete');
});
