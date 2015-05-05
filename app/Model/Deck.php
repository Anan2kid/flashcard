<?php
	class Deck extends AppModel{
		public $hasMany = [          
			'Card' => [              
				'className' => 'Card',              
				'foreignKey' => 'deck_id'          
			],
			'DeckTag' => [
				'className' => 'deck_tags',
				'foreignKey' => 'deck_id'
			],
			'Score' => [
				'clasName' => 'Score',
				'foreignKey' => 'deck_id'
			],
            'Favorite' => [
                'className' => 'Favorite',
                'foreignKey' => 'deck_id'
            ]
		];

		public $belongsTo = [
			'Category' => [
				'className' => 'Category',
				'foreignKey' => 'category_id'
			],
			'User' => [
				'className' => 'User',
				'foreignKey' => 'user_id'
			]

		];
	}
?>