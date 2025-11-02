Route::get('/profile', [ProfileController::class, 'show']);
Route::post('/profile', [ProfileController::class, 'update']);