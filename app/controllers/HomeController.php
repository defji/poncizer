<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

        
        public function showParseUrl()
        {
            $url = Input::get('url');
            


            $validator = Validator::make(
                Input::all(),
                array('url' => 'URL|required'),
                array(
                    'u_rl' => 'Ílj be szabályos ULL-t!',
                    'required' => 'Balátom, nem íltál be ULL-t!'
                )
    	    );

            if ($validator->fails())
            {
                //return Redirect::to('/')->withErrors($validator);
                return Redirect::to('/')->withErrors($validator->messages());
            }            
            try {
                print Ponci::parseUrl($url);
            } catch (Exception $ex) {

            }
        }
}