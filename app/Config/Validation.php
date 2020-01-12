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

		public $clearancepurposes = [
        'purpose' => [
            'label'  => 'purpose',
            'rules'  => 'required',
            'errors' => [
                'required' => 'purpose field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Purpose Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'purpose description field is required.'
            ]
        ]
			];

		public $clearance = [
        'document_id' => [
            'label'  => 'Document',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Clearance ID field is required.'
            ]
        ],
				'clearance_purpose_id' => [
						'label'  => 'Document',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Clearance Purpose ID field is required.'
						]
				],
				'voter_fee_amount' => [
						'label'  => 'Document',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Amount field is required.'
						]
				],
				'non_voter_fee_amount' => [
						'label'  => 'Document',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Amount field is required.'
						]
				]
    ];

		public $businesstype = [
        'business_type_name' => [
            'label'  => 'Business Types Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'businessTypes Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Business Types Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'businessTypes desciption field is required.'
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
                'alpha' => 'Firstname must not have numbers.'
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

		public $permit = [
        'document_id' => [
            'label'  => 'Document Id',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Business Name field is required.'
            ]
        ],
        'business_type_id' => [
            'label'  => 'Bussiness Type Id',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Business desciption field is required.'
            ]
        ],
				'new_applicant_charge' => [
						'label'  => 'New Applicant Charge',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Business Name field is required.'
						]
				],
				'nrenewal_charge' => [
						'label'  => 'Renewal Charge',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Business Name field is required.'
						]
				]
    ];


		public $document = [
				'document_name' => [
						'label'  => 'Document Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Document name field is required.'
						]
				],

				'description' => [
						'label'  => 'Document Description',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Document description field is required.'
						]
				]
		];
		public $corporation = [
				//  'user_id' => [
				// 		'label'  => 'User Id',
				// 		'rules'  => 'required',
				// 		'errors' => [
				// 				'required' => 'User Id field is required.'
				// 		]
				// ],
				//
				// 'business_type_id' => [
				// 		'label'  => 'Business Type Id',
				// 		'rules'  => 'required',
				// 		'errors' => [
				// 				'required' => 'Business Type Id field is required.'
				// 		]
				// ],
				'business_name' => [
						'label'  => 'Business Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Business Name field is required.'
						]
				],
				'date_registered' => [
						'label'  => 'Date Registered',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Date Registered is field required.'
						]
				 ],
				'bir_no' => [
						'label'  => 'Bir No',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Bir No field is required.'
						]
				],
				'tin_no' => [
						'label'  => 'Tin No',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Tin No field is required.'
						]
				],
				'philgeps' => [
						'label'  => 'Philgeps',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Philgeps field is required.'
						]
				],
				'owner_name' => [
						'label'  => 'Owner Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Owner Name field is required.'
						]
				],
				'address' => [
						'label'  => 'Address',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Address field is required.'
						]
				],
				'contact_person_name' => [
						'label'  => 'Contact Person Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Contact Person Name field is required.'
						]
				],
				'contact_person_email' => [
						'label'  => 'Contact Person Email',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Contact Person Email field is required.'
						]
				],
				'contact_no' => [
						'label'  => 'Contact Number',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Contact Number field is required.'
						]
				],
		];
	// Rules
	//--------------------------------------------------------------------
}
