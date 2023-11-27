<?php

use App\Http\Controllers\Api\PropertySearch;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Mls_Controller;
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


Route::middleware(['auth:sanctum','cors'])->group(function () {
    // Your protected API routes go here
     Route::post('/property-favorite', [PropertySearch::class, 'propertyFavorite']);
     Route::post('/user-dashboard', [UserController::class, 'userDashboard']);
     Route::post('/property-schedule', [PropertySearch::class, 'propertySchedule']);
     Route::post('/askquestion', [PropertySearch::class, 'askQuestion']);
     Route::post('/update-profile', [UserController::class, 'updateuser']);
     Route::post('/property-listing', [PropertySearch::class, 'propertyListing']);
     Route::post('/delete-user-listing', [UserController::class, 'deleteUserListing']);
     Route::post('/user-delete', [UserController::class, 'deleteUser']);
     Route::post('/save-search', [PropertySearch::class, 'saveSearch']);
     Route::post('/user', function (Request $request) {
        return $request->user();
    });
    // Add more protected routes as needed
});
Route::post('/seller-leads', [PropertySearch::class, 'sellerLeads']);
Route::get('/all-agents', [UserController::class, 'allAgent']);
Route::post('/agent-details', [UserController::class, 'agentDetail']);
Route::post('/buyer-leads', [PropertySearch::class, 'buyerLeads']);
Route::get('/recent-properties', [PropertySearch::class, 'getRecentProperties']);
Route::post('/get-templates', [UserController::class, 'getTemplates']);
Route::post('/properties-search', [PropertySearch::class, 'propertySearch']);
Route::post('/property-detail', [PropertySearch::class, 'propertyDetail']);
Route::post('/auth/register', [UserController::class, 'register']);
Route::post('/auth/agent-register', [UserController::class, 'agentRegistration']);
Route::post('/auth/login', [UserController::class, 'login'])->name('userLogin');


















// Route::post('/lender/register', [UserController::class, 'create'])->name('lenderRegister');
// Route::post('/signup', [UserController::class, 'signUp'])->name('signUp');


// Route::get('test',[testing::class, 'getapi'])->name('test');
// Route::get('insertProperty',[testing::class, 'insertProperty'])->name('insertProperty');

// //Bulk Insert Properties

// Route::group(['prefix'=>'mls','as'=>'mls.'], function() {
//     Route::get('mlsdata',[testing::class, 'getapi'])->name('mlsdata');
//     Route::get('mlsproperties',[Mls_Controller::class, 'MlsInsertProperty'])->name('savedata');
//     Route::get('cleardata',[testing::class, 'ClearData'])->name('cleardata');
// });



