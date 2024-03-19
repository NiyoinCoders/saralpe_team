<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PaysprintCallbackController;
use App\Http\Controllers\RechargeController;
use App\Http\Controllers\RechargePlanController;
use App\Http\Controllers\AndroidApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/receive-data', function () {
    return 'webking';
});

Route::group(['prefix' => 'v1'], function () {
    Route::post('/cart-store', [CartsController::class, 'store'])->name('add-to-cart');
    Route::post('/loan-store', [LoanController::class, 'store'])->name('loan.store');
    Route::group(['prefix' => 'recharge'], function () {
        Route::post('prepaid-store', [RechargeController::class, 'prepaid_store'])->name('recharge.prepaid-store');
    });

    Route::group(['prefix' => 'recharge-plan'], function () {
        Route::post('plan-list', [RechargePlanController::class, 'plan_list'])->name('recharge-plan.plan-list');
    });
});

Route::post('/paysprint/callbackdata', [PaysprintCallbackController::class, 'index']);

Route::post('/paysprint/callbackdata1', [PaysprintCallbackController::class, 'next']);

// Route::post('/v1/payscallback', 'PaymentController@Data'); // receives payment status

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});
//////////////////////////////////get api/////////////////////////////
Route::get('/users', [AndroidApiController::class, 'users']);
Route::get('/RechargePlanCategories', [AndroidApiController::class, 'RechargePlanCategories']);
Route::get('/roles', [AndroidApiController::class, 'roles']);
Route::get('/Setting', [AndroidApiController::class, 'Setting']);
Route::get('/BankList', [AndroidApiController::class, 'BankList']);
Route::get('/BillPayment', [AndroidApiController::class, 'BillPayment']);
Route::get('/RechargePlan', [AndroidApiController::class, 'RechargePlan']);
Route::get('/products', [AndroidApiController::class, 'prodcuts']);
Route::get('/MobileRecharge', [AndroidApiController::class, 'MobileRecharge']);
Route::get('/Loan', [AndroidApiController::class, 'Loan']);
Route::get('/Invoice', [AndroidApiController::class, 'Invoice']);
Route::get('/Ekyc', [AndroidApiController::class, 'Ekyc']);
Route::get('/DmtBeneficiary', [AndroidApiController::class, 'DmtBeneficiary']);
Route::get('/Service', [AndroidApiController::class, 'Dc_Service']);
Route::get('/Carts', [AndroidApiController::class, 'Carts']);






