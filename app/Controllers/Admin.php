<?php  

/**
 * Admin Controller
 */
namespace App\Controllers;
class Admin extends BaseController
{
	
	// function __construct()
	// {
	// 	parent::__construct();	
	// 	echo "Admin Controller";
	// }

	public function index()
	{
		return view('admin/index');
	}
	public function tables()
	{
		return view('admin/tables');
	}
}

?>