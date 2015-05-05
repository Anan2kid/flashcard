<?php
    class Badge extends AppModel{
       public $belongsTo = [
			'UserBadge' => [
				'className' => 'UserBadge',
				'foreignKey' => 'userbadge_id'
			]
		];
    }
?>