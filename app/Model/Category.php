<?php
	class Category extends AppModel{
		public $hasMany = [          
			'Deck' => [              
				'className' => 'Deck',              
				'foreignKey' => 'category_id'
			]
		];
	}
?>