<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	public $nodes = [
        'title' => [
            'label'  => 'Node Title',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node title field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Node Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Node desciption field is required.'
            ]
        ],

    ];

    public $role = [
        'role_name' => [
            'label'  => 'Role Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Role Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role desciption field is required.'
            ]
        ],

        'function_id' => [
            'label'  => 'Landing Page',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Landing Page field is required.'
            ]
        ],

    ];

    public $facility = [
        'facility_name' => [
            'label'  => 'Facility Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Facility Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Facility Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Facility description field is required.'
            ]
        ]
    ];

	public $user = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
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
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Password field is required.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'required|matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],
        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

    public $user_edit = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
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

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],

        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

		public $citizen = [
        'user_id' => [
            'label'  => 'User ID',
            'rules'  => 'required',
            'errors' => [
                'required' => 'User ID field is required.'
            ]
        ],

        'citizen_image' => [
            'label'  => 'Citizen Image',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Citizen image field is required.'
            ]
        ],

        'lastname' => [
            'label'  => 'Last Name',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Last name field is required.',
								'alpha' => 'Last name must not have numbers.'
            ]
        ],

        'firstname' => [
            'label'  => 'First Name',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'First name field is required.',
								'alpha' => 'First name must not have numbers.'
            ]
        ],

        'middlename' => [
            'label'  => 'Middle Name',
            'rules'  => 'alpha',
            'errors' => [
								'alpha' => 'Middle name must not have numbers.'
            ]
        ],

        'extension_name' => [
            'label'  => 'Extension Name',
            'rules'  => 'alpha',
            'errors' => [
								'alpha' => 'Extension name must not have numbers.'
            ]
        ],

        'maiden_name' => [
            'label'  => 'Maiden Name',
            'rules'  => 'alpha',
            'errors' => [
								'alpha' => 'Maiden name must not have numbers.'
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
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Gender field is required.',
								'alpha' => 'Lastname must not have numbers.'
            ]
        ],

        'civil_status' => [
            'label'  => 'Civil Status',
            'rules'  => 'required|alpha',
            'errors' => [
                'required' => 'Civil Status field is required.',
								'alpha' => 'Civil Status must not have numbers.'
							]
        ],

        'email' => [
            'label'  => 'Email',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Email field is required.'
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
        ]
    ];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
