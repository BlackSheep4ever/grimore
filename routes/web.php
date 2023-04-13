<?php

use App\Http\Controllers\favoriteController;
use App\Http\Controllers\ArmorsController;
use App\Http\Controllers\FeatsController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\SpellsController;
use App\Http\Controllers\StableDiffusionController;
use App\Http\Controllers\WeaponsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum', config('jetstream.auth_session'),
    'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/favorite', [favoriteController::class, 'index'])->name('favorite');

// Renderizar datatables de cada página 
    Route::get('/feats', [FeatsController::class, 'feats'])->name('feats');
    Route::get('/spells', [SpellsController::class, 'spells'])->name('spells');
    Route::get('/skills', [SkillsController::class, 'skills'])->name('skills');
    Route::get('/weapons', [WeaponsController::class, 'weapons'])->name('weapons');
    Route::get('/armors', [ArmorsController::class, 'armors'])->name('armors');
    Route::get('/items', [ItemsController::class, 'items'])->name('items');

// Ajax para o select-filter por elemento
    Route::get('/skills/data', [SkillsController::class, 'getData'])->name('get.data');
    Route::get('/weapons/data', [WeaponsController::class, 'getData'])->name('get.data');
    Route::post('/feats/favorites', [FeatsController::class, 'store'])->name('feats.save');
    Route::post('/feats/remove', [favoriteController::class, 'remove'])->name('feats.remove');

// StableDiffusion Routes

Route::get('/dashboard/stableImage',[ StableDiffusionController::class, 'generateImg'])->name('stableDiffusion');

Route::get('/dashboard/stableLink',[ StableDiffusionController::class, 'getLink'])->name('stableLink');
});

