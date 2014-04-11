<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Application Form</title>
    </head>
    <body>
       
       {{ Form::model($application, array('url' => '/membership_applications' ))}}
           <div>
           <label>First Name</label>
         {{Form::text('first_name')}}
               {{ $errors->first('first_name') }}
           </div>

           <div>
           <label>Last Name</label>
           {{Form::text('last_name')}}
               {{ $errors->first('last_name') }}
           </div>

           <div>
           <label>Email</label>
           {{Form::text('email')}}
               {{ $errors->first('email') }}
           </div>
       
           <div>
           <label>Phone Number</label>
           {{Form::text('phone_number')}}
               {{ $errors->first('phone_number') }}
           </div>

           <button type="submit">Register</button>

           
           
        {{ Form::close() }}
       </form>
    </body>
</html>
