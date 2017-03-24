<?php

namespace App\Http\Controllers;

use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;
use App\Http\Requests\Newsletter\CreateSubscriptionFormRequest;

class HomeController extends Controller
{
	protected $mailer;

	public function __construct(Mailer $mailer){
		$this->mailer = $mailer;
	}

	public function index(){

		$name = 'Dato';

		$this->mailer->send('emails.auth.welcome',['name'=>$name],function($m){
			$m->to('ddavid.abuladze@gmail.com','Alex Garrett')->
			subject('you have registered');

		});
		 //return view('home.index');

	}
    //


	public function create(CreateSubscriptionFormRequest $request){




		dd($request);
	}
}
