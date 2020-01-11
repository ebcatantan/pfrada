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
                'required' => 'businessTypes desciption field'
            ]
        ]
    ];

		public $reservation_fees = [
			'facility_id' => [
					'label'  => 'Facility Name',
					'rules'  => 'required',
					'errors' => [
							'required' => 'Facility Name field is required.'
					]
			],

				'fee_per_hour' => [
						'label'  => 'Fee per hour',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Fee per hour field is required.'
						]
				],

				'maintenance_fee' => [
						'label'  => 'Maintenance Fee',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Maintenance fee field is required.'
				]
			]
		];

				public $reservation = [
					'citizen_id' => [
							'label'  => 'Citizen Name',
							'rules'  => 'required',
							'errors' => [
									'required' => 'Citizen Name field is required.'
							]
					],

					'facility_id' => [
							'label'  => 'Facility Name',
							'rules'  => 'required',
							'errors' => [
									'required' => 'Facility Name field is required.'
							]
					],

				'user_id' => [
						'label'  => 'User ID',
						'rules'  => 'required',
						'errors' => [
								'required' => 'User ID field is required.'
						]
				],

				'reservation_date_time_start' => [
						'label'  => 'Reservation Date Time Start',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Reservation Date Time Start field is required.'
						]
				],

				'reservation_date_time_end' => [
						'label'  => 'Reservation Date Time End',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Reservation Date Time End field is required.'
						]
				],

				'reservation_payment' => [
						'label'  => 'Reservation Payment',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Reservation Payment field is required.'
						]
				],

				'is_approved' => [
						'label'  => 'Approved',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Approved field is required.'
						]
				],

				'is_paid' => [
						'label'  => 'Paid',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Paid is required.'
						]
				],

				'processed_by' => [
						'label'  => 'Processed By',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Processed field is required.'
						]
				],

				'date_paid' => [
						'label'  => 'Date Paid',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Date Paid field is required.'
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

		public $blotter = [
				'citizen_id' => [
						'label'  => 'Citizen ID',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Citizen ID field is required.'
						]
				],

				'person_complained' => [
						'label'  => 'Person Complained',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Person Complained field is required.'
						]
				],

				'reason' => [
						'label'  => 'Reason',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Reason field is required.'
						]
				],

				'additional_details' => [
						'label'  => 'Additional Details',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Additional Details field is required.'
						]
				],

				'filling_date' => [
						'label'  => 'Filling Date',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Filling Date field is required.'
						]
				],

				'processed_by' => [
						'label'  => 'Processed By',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Processed by field is required.'
						]
				],

				'case_assigned_to' => [
						'label'  => 'Case Assigned To',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Case assigned to field is required.'
						]
				],

				'case_status' => [
						'label'  => 'Case Status',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Case status to field is required.'
						]
				],
		];

		public $officials = [
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

			'ext_name' => [
					'label'  => 'Extension Name',
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
			]
		];

	// Rules
	//--------------------------------------------------------------------
}
