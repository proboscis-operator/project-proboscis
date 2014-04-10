<?php


class MembershipApplication extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'membership_applications';

	
	protected $fillable = array('first_name','last_name','phone_number','email');

}