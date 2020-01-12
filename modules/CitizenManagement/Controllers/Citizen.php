<?php
namespace Modules\CitizenManagement\Controllers;

use Modules\CitizenManagement\Models\CitizenModel;
use Modules\UserManagement\Models\UsersModel;
use Modules\UserManagement\Models\PermissionsModel;
use Modules\SystemSettings\Models\ReservationsModel;
use App\Controllers\BaseController;

class Citizen extends BaseController
{
	//private $permissions;

	public function __construct()
	{
		parent:: __construct();
		$permissions_model = new PermissionsModel();
		$this->permissions = $permissions_model->getPermissionsWithCondition(['status' => 'a']);
	}

    public function index($offset = 0) //list of citizen
    {
			$this->hasPermissionRedirect('list-of-citizen');

    	$model = new CitizenModel();

			  $data['all_items'] = $model->get([],[],['status'=> 'a'],[]);
       	$data['offset'] = $offset;

				// print_r($str); die();
				$fields = [
					'firstname' => 'users',
					'lastname' => 'users'
				];

				$tables = [
					'users' => [
						'citizens.user_id' => 'users.id'
					]
				];

				$conditions = [
						'citizens.status' => 'a'
				];
        $data['citizens'] = $model->get($fields, $tables, $conditions, ['limit' => PERPAGE, 'offset' => $offset]);
				//n ito para sa pagination
       	// $data['all_items'] = $model->getCitizenWithCondition(['status'=> 'a']);
       	// $data['offset'] = $offset;
				//
        // $data['citizens'] = $model->getCitizenWithFunction(['status'=> 'a', 'limit' => PERPAGE, 'offset' =>  $offset]);

				$data['function_title'] = "List of Citizens";
        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\index';
        echo view('App\Views\theme\index', $data);
    }
	//
    public function show_citizen($id)
	{
		$this->hasPermissionRedirect('show-citizen');
		$data['permissions'] = $this->permissions;
		// $user_model = new UsersModel();
		// $data['users'] = $user_model->findAll();

		$model = new CitizenModel();
		$data['citizen'] = $model->get([],[],['id'=>$id],[]);

		$fields = [
					'firstname' => 'users',
					'lastname' => 'users',
				];

				$tables = [
					'users' => [
						'citizens.user_id' => 'users.id'
					],
				];

				$conditions = [
						'citizens.id' => $id
				];

				$data['citizens'] = $model->get($fields, $tables, $conditions);

		// $data['citizen'] = $model->getCitizenWithFunction(['status'=> 'a']);
		// $data['citizen'] = $model->getCitizenWithCondition(['id' => $id]);

		$data['function_title'] = "Citizen Details";
    $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\citizenDetails';
    echo view('App\Views\theme\index', $data);
		// $data['citizens'] = $model->get($id);
		// $data['citizen'] = $model->getCitizenWithCondition(['id' => $id]);
	}
	//
    public function add_citizen()
    {
    	$this->hasPermissionRedirect('add-citizen');
    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$user_model = new UsersModel();
			$data['users'] = $user_model->where('status', 'a')->findAll();

    	helper(['form', 'url']);
    	$model = new CitizenModel();

    	if(!empty($_POST))
    	{

				$validated = $this->validate([
						'citizen_image' => [
                'rules' => 'uploaded[citizen_image]',
								'mime_in[citizen_image,image/jpg,image/jpeg,image/png]',
                'max_size[citizen_image,10000]',
								'label' => 'Citizen Image'
            ],

		        'last_name' => [
		            'label'  => 'Last Name',
		            'rules'  => 'required|alpha_space',
		            'errors' => [
		                'required' => 'Last name field is required.'
										// 'alpha' => 'Last name must not have numbers.'
		            ]
		        ],

		        'first_name' => [
		            'label'  => 'First Name',
		            'rules'  => 'required|alpha_space',
		            'errors' => [
		                'required' => 'First name field is required.'
		            ]
		        ],

		        'middlename' => [
		            'label'  => 'Middle Name',
		            'rules'  => 'alpha_space',
		            'errors' => [
										''
		            ]
		        ],

		        'extension_name' => [
		            'label'  => 'Extension Name',
								'rules'  => 'alpha_space',
		            'errors' => [
										''
		            ]
		        ],

		        'maiden_name' => [
		            'label'  => 'Maiden Name',
								'rules'  => 'alpha_space',
		            'errors' => [
										''
		            ]
		        ],

		        'address' => [
		            'label'  => 'Address',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Address field is required.'
		            ]
		        ],

		        'barangay' => [
		            'label'  => 'Barangay',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Barangay field is required.'
		            ]
		        ],

		        'birth_date' => [
		            'label'  => 'Birth Date',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Birth date field is required.'
		            ]
		        ],

		        'gender' => [
		            'label'  => 'Gender',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Gender field is required.',
		            ]
		        ],

		        'civil_status' => [
		            'label'  => 'Civil Status',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Civil Status field is required.',
									]
		        ],

		        'email' => [
		            'label'  => 'Email',
		            'rules'  => 'required|valid_email',
		            'errors' => [
										'required' => 'Email field is required.',
										'valid_email' => 'You must provide a valid email address.'
		            ]
		        ],

		        'contact_no' => [
		            'label'  => 'Contact Number',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Contact number field is required.'
		            ]
		        ],

		        'citizen_voter_id' => [
		            'label'  => 'Citizen Voter ID',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'Citizen Voter ID field is required.'
		            ]
		        ],

		        'is_brgy_employee' => [
		            'label'  => 'Is Barangay Employee',
		            'rules'  => 'required',
		            'errors' => [
		                'required' => 'This field is required.'
		            ]
		        ]
					]);

	    	if (!$validated)
		    {
			    	$data['errors'] = \Config\Services::validation()->getErrors();
		        $data['function_title'] = "Adding Citizen";
		        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
		        echo view('App\Views\theme\index', $data);
		    }
		    else
		    {
					$file_array = [
												'user_id' => $_SESSION['uid'],
												'citizen_image' => $_FILES['citizen_image']['name'],
												'last_name' => $_POST['last_name'],
												'first_name' => $_POST['first_name'],
												'middlename' => $_POST['middlename'],
												'extension_name' => $_POST['extension_name'],
												'maiden_name' => $_POST['maiden_name'],
												'address' => $_POST['address'],
												'barangay' => $_POST['barangay'],
												'birth_date' => $_POST['birth_date'],
												'gender' => $_POST['gender'],
												'civil_status' => $_POST['civil_status'],
												'email' => $_POST['email'],
												'contact_no' => $_POST['contact_no'],
												'citizen_voter_id' => $_POST['citizen_voter_id'],
												'is_brgy_employee' => $_POST['is_brgy_employee']
												];

		        if($model->addCitizen($file_array))
		        {
							$user_id = $model->insertID();
							$UserModel = new UsersModel();
							$user_data = [
								'lastname' => $_POST['last_name'],
								'firstname' => $_POST['first_name'],
								'username' => $_POST['last_name'] . $_POST['first_name'],
								'email' => $_POST['email'],
								// 'password' => $UserModel->generateRandomString(8),
								'password' => 'password',
								'role_id' => 2
							];
							$UserModel->addUsers($user_data);
							$file = $this->request->getFile('citizen_image');
							$file->move(ROOTPATH."uploads/");

		        	$_SESSION['success'] = 'You have added a new record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('citizens'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in adding a new record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to(base_url('citizens'));
		        }
		    }
    	}
    	else
    	{

	    	$data['function_title'] = "Adding Citizens";
	        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function edit_citizen($id)
    {
    	$this->hasPermissionRedirect('edit-citizen');
    	helper(['form', 'url']);
    	$model = new CitizenModel();
    	$data['rec'] = $model->find($id);

    	$permissions_model = new PermissionsModel();
    	$data['permissions'] = $this->permissions;

			$user_model = new UsersModel();
			$data['users'] = $user_model->where('status', 'a')->findAll();

    	if(!empty($_POST))
    	{
				$arrFile = [];
				if(!empty($_FILES['citizen_image']['name']))
				{
					$arrFile = [
						'rules' => 'uploaded[citizen_image]',
						'mime_in[citizen_image,image/jpg,image/jpeg,image/png]',
						'max_size[citizen_image,5000]',
						'label' => 'Citizen Image'
					];
				}

				$validated = $this->validate([
						'user_id' => [
								'label'  => 'Roles',
								'rules'  => 'required',
								'errors' => [
										'required' => 'This field is required.'
								]
						],

						'citizen_image' => [
								'rules' => 'uploaded[citizen_image]',
								'mime_in[citizen_image,image/jpg,image/jpeg,image/png]',
								'max_size[citizen_image,10000]',
								'label' => 'Citizen Image'
						],

						'lastname' => [
								'label'  => 'Last Name',
								'rules'  => 'required|alpha_space',
								'errors' => [
										'required' => 'Last name field is required.'
										// 'alpha' => 'Last name must not have numbers.'
								]
						],

						'firstname' => [
								'label'  => 'First Name',
								'rules'  => 'required|alpha_space',
								'errors' => [
										'required' => 'First name field is required.'
								]
						],

						'middlename' => [
								'label'  => 'Middle Name',
								'rules'  => 'alpha_space',
								'errors' => [
										''
								]
						],

						'extension_name' => [
								'label'  => 'Extension Name',
								'rules'  => 'alpha_space',
								'errors' => [
										''
								]
						],

						'maiden_name' => [
								'label'  => 'Maiden Name',
								'rules'  => 'alpha_space',
								'errors' => [
										''
								]
						],

						'address' => [
								'label'  => 'Address',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Address field is required.'
								]
						],

						'barangay' => [
								'label'  => 'Barangay',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Barangay field is required.'
								]
						],

						'birth_date' => [
								'label'  => 'Birth Date',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Birth date field is required.'
								]
						],

						'gender' => [
								'label'  => 'Gender',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Gender field is required.',
								]
						],

						'civil_status' => [
								'label'  => 'Civil Status',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Civil Status field is required.',
									]
						],

						'email' => [
								'label'  => 'Email',
								'rules'  => 'required|valid_email',
								'errors' => [
										'required' => 'Email field is required.',
										'valid_email' => 'You must provide a valid email address.'
								]
						],

						'contact_no' => [
								'label'  => 'Contact Number',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Contact number field is required.'
								]
						],

						'citizen_voter_id' => [
								'label'  => 'Citizen Voter ID',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Citizen Voter ID field is required.'
								]
						],

						'is_brgy_employee' => [
								'label'  => 'Is Barangay Employee',
								'rules'  => 'required',
								'errors' => [
										'required' => 'This field is required.'
								]
						]
					]);


				if (!$validated)
				{
						$data['errors'] = \Config\Services::validation()->getErrors();
						$data['function_title'] = "Modify Citizen";
		        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
		        echo view('App\Views\theme\index', $data);
				}

		    else
		    {
		    	if(!empty($_FILES['citizen_image']['name']))
		        {
							$file_array = [
													'user_id' => $_SESSION['uid'],
													'citizen_image' => $_FILES['citizen_image']['name'],
													'lastname' => $_POST['lastname'],
													'firstname' => $_POST['firstname'],
													'middlename' => $_POST['middlename'],
													'extension_name' => $_POST['extension_name'],
													'maiden_name' => $_POST['maiden_name'],
													'address' => $_POST['address'],
													'barangay' => $_POST['barangay'],
													'birth_date' => $_POST['birth_date'],
													'gender' => $_POST['gender'],
													'civil_status' => $_POST['civil_status'],
													'email' => $_POST['email'],
													'contact_no' => $_POST['contact_no'],
													'citizen_voter_id' => $_POST['citizen_voter_id'],
													'is_brgy_employee' => $_POST['is_brgy_employee']
													];
						}
						else {
							$file_array = [
								'user_id' => $_SESSION['uid'],
								'lastname' => $_POST['lastname'],
								'firstname' => $_POST['firstname'],
								'middlename' => $_POST['middlename'],
								'extension_name' => $_POST['extension_name'],
								'maiden_name' => $_POST['maiden_name'],
								'address' => $_POST['address'],
								'barangay' => $_POST['barangay'],
								'birth_date' => $_POST['birth_date'],
								'gender' => $_POST['gender'],
								'civil_status' => $_POST['civil_status'],
								'email' => $_POST['email'],
								'contact_no' => $_POST['contact_no'],
								'citizen_voter_id' => $_POST['citizen_voter_id'],
								'is_brgy_employee' => $_POST['is_brgy_employee']
							];
						}

						$origFile = ROOTPATH."uploads/".strtoupper($data['rec']['citizen_image']);

						if(!empty($_FILES['citizen_image']['name']))
						{
							$newFile = ROOTPATH."uploads/".strtoupper($_FILES['citizen_image']['name']);

							if (!file_exists($newFile) && $origFile != $newFile) {
									$file = $this->request->getFile('citizen_image');
									$file->move(ROOTPATH."uploads/");
									unlink($origFile);
									// die("here");
							}

							if (!file_exists($newFile) && $origFile == $newFile) {
									unlink($origFile);
									$file = $this->request->getFile('citizen_image');
									$file->move(ROOTPATH."uploads/");
							}
						}


						if($model->editCitizen($file_array, $id))
						{
							// $permissions_model->update_permitted_role($id, $_POST['function_id'], $data['rec']['function_id']);
		        	$_SESSION['success'] = 'You have updated a record';
							$this->session->markAsFlashdata('success');
		        	return redirect()->to(base_url('citizens'));
		        }
		        else
		        {
		        	$_SESSION['error'] = 'You have an error in updating a record';
							$this->session->markAsFlashdata('error');
		        	return redirect()->to( base_url('citizens'));
		        }
		    }
    	}
    	else
    	{
	    	$data['function_title'] = "Edit Citizen";
	        $data['viewName'] = 'Modules\CitizenManagement\Views\citizens\frmCitizens';
	        echo view('App\Views\theme\index', $data);
    	}
    }

    public function delete_citizen($id)
    {
    	$this->hasPermissionRedirect('delete-citizen');

    	$model = new CitizenModel();
    	$model->deleteCitizen($id);
    }

}
