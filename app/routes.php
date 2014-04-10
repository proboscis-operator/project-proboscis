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
  /**  $membershipApplication = new MembershipApplication(array(
        'first_name' => 'Rick',
        'last_name' => 'Hunt',
        'phone_number' => '0504658741',
        'email' => 'mike.hunt@coniel.com'
    ));

     $membershipApplication->save(); **/

     $application = MembershipApplication::where('first_name', 'like','mike')->delete();    
});