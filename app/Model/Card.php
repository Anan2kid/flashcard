<?php
	class Card extends AppModel{

		public $belongsTo = [
			'Deck' => [
				'className' => 'Deck',
				'foreignKey' => 'deck_id'
			]
		];
	}
?>