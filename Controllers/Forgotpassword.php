<?php 

class Forgotpassword extends Controllers
{
	public function __construct()
	{
		parent::__construct();
	}

	public function forgotpassword()
	{
		$data['page_tag'] = "Login - MonBez";
		$data['page_title'] = "Login";
		$data['page_name'] = "login";
		$data['page_functions_js'] = "function_login.js";
		$this->views->getView($this, "forgotpassword", $data);
	}
}

?>