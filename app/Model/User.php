<?php
	class User extends AppModel{
		public $hasMany = [          
			'Score' => [              
				'className' => 'Score',              
				'foreignKey' => 'user_id'          
			],
			'UserBadge' => [
				'className' => 'UserBadge',
				'foreignKey' => 'user_id'
			],
			'Deck' => [
				'className' => 'Deck',
				'foreignKey' => 'user_id'
			],
            'Favorite' => [
                'className' => 'Favorite',
                'foreignKey' => 'user_id'
            ]
		];
	}
?>