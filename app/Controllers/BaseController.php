<?php
namespace App\Controllers;

use Modules\UserManagement\Models\PermissionsModel;
use Modules\UserManagement\Models\ModulesModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 *
 * @package CodeIgniter
 */

use CodeIgniter\Controller;

class BaseController extends Controller
{

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];

	protected $permissions = [];
	protected $modules = [];

	/**
	 * Constructor.
	 */
	public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		// E.g.:
		// $this->session = \Config\Services::session();
		$this->session = \Config\Services::session();
		$this->session->start();

	}

	public function __construct()
	{
		$this->session = \Config\Services::session();
		helper(['link', 'namesearch', 'paging']);

		$model_permission = new PermissionsModel();
		$model_module = new ModulesModel();

		if(isset($_SESSION['user_logged_in']))
		{
			$this->permissions = $model_permission->like('allowed_roles', $_SESSION['rid'])->findAll();
			$this->modules = $model_module->findAll();

			$_SESSION['appmodules'] = $this->modules;
			$_SESSION['userPermmissions'] = $this->permissions;
		}
		else
		{
			$str = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    		if($str != base_url())
    		{
				header('Location: '.base_url());
				exit;
    		}
		}

		//print_r($_SESSION['userPermmissions']);
	}

	protected function hasPermissionRedirect($slugs)
	{
		//die("here");
		$isValidSlug = 0;

		if(!empty($this->permissions))
		{
			foreach($this->permissions as $permission)
			{
				if($slugs == $permission['slugs'] && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
				{
					$isValidSlug = 1;
					break;
				}
			}
		}

		if($isValidSlug == 0)
		{
			header('Location: '.base_url());
			session_destroy();
			exit;
		}
	}


	// protected function noPermissionRedirect($referrer, $functionSlug)
	// {

	// 	$isValidSlug = 0;

	// 	echo $referrer;

	// 	if(!empty($this->permissions))
	// 	{
	// 		foreach($this->permissions as $permission)
	// 		{
	// 			if(in_array($functionSlug, $permission))
	// 			{
	// 				$isValidSlug = 1;
	// 				break;
	// 			}
	// 		}

	// 	}

	// 	if($isValidSlug == 0)
	// 	{
	// 		header('Location: '.$referrer);
	// 		exit;
	// 	}
	// }
}
