<?php
    class Score extends AppModel{
 
		public $belongsTo = [
			'User' => [
				'className' => 'User',
				'foreignKey' => 'user_id'
			],
			'Deck' => [
				'className' => 'Deck',
				'foreignKey' => 'deck_id'
			]
			
		];
    }
?>