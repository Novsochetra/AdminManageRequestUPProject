<?php

use Illuminate\Http\Request;

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

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('ping', 'PingController@index');
    // Route::resource('tickets', 'TicketController');
    Route::get('tickets', 'TicketController@index');
    Route::post('tickets', 'TicketController@store');
    Route::get('ticket/{id}', 'TicketController@show');
    Route::patch('ticket/{id}', 'TicketController@update');
    Route::delete('ticket/{id}', 'TicketController@destroy');


    Route::get('comments', 'CommentController@index');
    Route::get('ticket/{ticket_id}/comments', 'CommentController@find_by_ticket');
    Route::get('ticket/{ticket_id}/comment/{comment_id}', 'CommentController@show');
    Route::post('ticket/{ticket_id}/comments', 'CommentController@store');
    Route::patch('ticket/{ticket_id}/comment/{comment_id}', 'CommentController@update');
    Route::delete('ticket/{ticket_id}/comment/{comment_id}', 'CommentController@destroy');
});
