<?php

class Test_Controller extends Base_Controller {

	public function action_index()
	{
		//return var_dump(Auth::user());
		return View::make('home.test');
	}	

	public function action_process_form()
	{
		if ($input = Input::get())
		{

			$rules = array
			(
				'name' 	=> 'required|min:3|max:32|alpha',
				'age' 	=> 'required|integer|min:16'
			);

			$v = Validator::make($input, $rules);		

			if ( $v->fails() )
			{
				$form_errors =  $v->errors;
				return Redirect::to('test')
						->with_errors($v)
						->with_input();					
			}
			else
			{
				return Redirect::to('home')
							->with('messages','You signed in succesfully');
			}

		}

	}	

}