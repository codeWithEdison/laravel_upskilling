<?php

use App\Http\Controllers\postsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\posts;


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/posts', function (){
//     // dd($id);
//     return view('posts.index' ,[
//         'posts'=>posts::all()
//     ]);
// });
// Route::get('/posts/{id}', function ($id){
//     // dd($id);
//     return view('posts.post' ,[
//         'post'=>posts::find($id)
//     ]);
// });
Route::resource('posts', postsController::class);
// find specific post


Route::get('/search', function(Request $request){
    dd($request->city);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php'; 
