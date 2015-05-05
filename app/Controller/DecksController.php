<?php
	class DecksController extends AppController{

        public $uses = array('Deck','User', 'Card', 'Category', 'Score');


		 public function index(){

               // $this->layout = 'flash';

		 	}

		 public function create(){

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


        public function test($num){

            $data = [
                Score => [
                    'score' => $num,
                    'user_id' => $num,
                    'deck_id' => $num,
                ]
            ];
            $this->Score->save($data);
            $this->set('dataNa', "koo return to ajax");
            return $data;
        }




		  
	}
?>