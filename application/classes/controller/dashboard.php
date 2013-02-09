<?php defined('SYSPATH') or die('No direct script access');

class Controller_Dashboard extends Controller_Template
{
	public function action_index()
	{
		if (Auth::is_user_signed_in()) {
			$view = View::factory('dashboard');
			$view->user = ORM::factory('User')
			->where('id', '=', Session::instance()->get('user_id'))
			->find();
			$this->template->content = $view->render();
		} else {
			$this->request->redirect('.');
		}
	}
}