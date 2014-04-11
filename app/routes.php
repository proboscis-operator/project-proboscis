<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{


});



Route::resource('membership_applications','MembershipApplicationController');

Route::get('membership_applications/{id}/paid/{bool}', function($id , $bool){
    
    $application = MembershipApplication::find($id);

   if(is_object($application) && ($bool == 1 || $bool == 0))
   {
       $application->paid = $bool;

       $application->save();

   }
   return Redirect::back();
});