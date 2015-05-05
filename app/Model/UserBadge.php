<?php
    class UserBadge extends AppModel{
        public $hasMany = [          
            'Badge' => [              
                'className' => 'Badge',              
                'foreignKey' => 'badge_id'         
            ]
    
        ];
		public $belongsTo = [
			'User' => [
				'className' => 'User',
				'foreignKey' => 'user_id'
			]
		];
    }
?>