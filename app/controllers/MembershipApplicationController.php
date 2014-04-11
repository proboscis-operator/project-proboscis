<?php

class MembershipApplicationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
        $applications = MembershipApplication::all();

        return View::make('membership_application.index', array('applications' => $applications));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
	
     
     return View::make('membership_application.create')->with('application', array());

    
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		 $rules = array(
    'first_name' => 'required|max:60',
    'last_name' => 'required|max:60',
    'email' => 'required|max:100|email',
    'phone_number' => 'required|max:20',
    
    
    );

   $v = Validator::make(Input::all(), $rules);

   if ($v->fails())
   {
       return Redirect::back()->withInput()->withErrors($v);


   }
   
   else{
 $application = new MembershipApplication(Input::all());

 $application->save();

 return Redirect::route('membership_applications.index');
      
   }

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 $application = MembershipApplication::find($id);

      if (is_object($application))
      {
       return View::make('membership_application.show', array('application' => $application));
        
      }
      else
      {
          echo 'no application';
      }
      
      
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}