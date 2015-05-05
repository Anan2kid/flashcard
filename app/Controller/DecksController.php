<?php
	class DecksController extends AppController{


		public $uses = array('Category', 'Deck', 'User', 'Card', 'Score');

		 public function viewall($id = null){


		 	$decks = $this->Deck->find('all', [
		 		'conditions' => [
					'Category.id' => $id 
					],
					'recursive' => -2       
		 	        ]);         
		 	$this->set('decks', $decks);
			if(empty($decks))
			{
		 		$this->set('category_name', "Sorry");
		 	}
		 	else{
		 		$this->set('category_name', $decks[0]['Category']['name']);
		 	}

		 	$this->set('username', $this->Auth->user('username'));

		 }


        public function review($id = 1)
        {

            if(empty($id)){
                $this->redirect([
                    'controller' => 'Decks',
                    'action' => 'index'
                ]);
            }

            $deck = $this->Deck->find('first', [
                'conditions' => [
                    'deck.id' => $id
                ]

            ]);

            if(empty($deck)){
                $this->redirect([
                    'controller' => 'Decks',
                    'action' => 'index'
                ]);
            }

            $this->set('deck', $deck);

        }
	}


?>