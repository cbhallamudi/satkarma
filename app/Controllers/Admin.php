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

	public function page_404($value='')
	{
		return view('admin/404');
	}

	public function forgotpwd($value='')
	{
		return view('admin/forgotpwd');
	}
	public function login($value='')
	{
		return view('admin/login');
	}
	public function register($value='')
	{
		return view('admin/register');
	}
	public function Users(){
		return view('admin/Users');
	}
	public function Partners(){
		return view('admin/Partners');
	}
	public function CMS(){
		return view('admin/CMS');
	}
	public function Books(){
		return view('admin/Books');
	}
	public function BookCategories(){
		return view('admin/BookCategories');
	}
	public function BookGenres(){
		return view('admin/BookGenres');
	}
	public function BookLanguages(){
		return view('admin/BookLanguages');
	}
	
}

?>