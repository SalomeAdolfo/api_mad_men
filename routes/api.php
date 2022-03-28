<?php

use App\Http\Controllers\API\EspecialidadesController;
use App\Http\Controllers\API\PsicologosController;
use App\Http\Controllers\API\UsuariosController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('especialidades', EspecialidadesController::class)-> names('api-especialidades');
Route::apiResource('psicologos', PsicologosController::class)->names('api-psicologos');
Route::apiResource('usuarios', UsuariosController::class)->names('api-usuarios');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);

    return ['token' => $token->plainTextToken];
});

Route::post('/sanctum/token', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
 
    $user = User::where('email', $request->email)->first();
 
    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }
 
    return response()->json(['token'=> $user->createToken('app')->plainTextToken]);
});

Route::middleware('auth:sanctum')->group(function(){
    
});
