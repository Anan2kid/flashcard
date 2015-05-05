<?php
	class UsersController extends AppController{
		
		public $uses = array('User', 'Category', 'Deck', 'Card', 'Favorite', 'Score', 'Achievement');



		public function manage() {
			$users = $this->User->find('all');
			$this->set('users', $users);
      	}

		public function newsfeed(){

			//get all category
			$categories = $this->Category->find('all', [
			 	'order' => [
			   		'Category.name' => 'ASC'             
			   	]         
			]); 

			//get all deck name sorted by date created
			$decks_by_date = $this->Deck->find('all', [
				'order' => [
					'Deck.created' => 'DESC'
				]        
			]);

			//get all deck name sorted by view
			$decks_by_view = $this->Deck->find('all', [
				'order' => [
					'Deck.visited' => 'DESC'
				]        
			]);

			//set all attributes
			$this->set('categories', $categories); 
			$this->set('decks_by_date', $decks_by_date);
			$this->set('decks_by_view', $decks_by_view);
            $this->set('username', $this->Auth->user('username'));

		}


        public function admin(){

            //get all category
            $categories = $this->Category->find('all', [
                'order' => [
                    'Category.name' => 'ASC'             
                ]         
            ]); 

            //get all deck name sorted by date created
            $decks_by_date = $this->Deck->find('all', [
                'order' => [
                    'Deck.created' => 'DESC'
                ]        
            ]);

            //get all deck name sorted by view
            $decks_by_view = $this->Deck->find('all', [
                'order' => [
                    'Deck.visited' => 'DESC'
                ]        
            ]);

            //set all attributes
            $this->set('categories', $categories); 
            $this->set('decks_by_date', $decks_by_date);
            $this->set('decks_by_view', $decks_by_view);
            $this->set('username', $this->Auth->user('username'));

        }


		 public function beforeFilter() {
            parent::beforeFilter();
                 $this->Auth->allow('login','add','add_admin','edit','delete');
                 $this->_getCategories();
        //$this->Auth->allow('login','add');
         }
	

    public function login() {


        if ($this->request->is('post')) {
            if ($this->Auth->login()) {

                if($this->Auth->user('role') == 'admin')
                    $this->redirect(array('controller' => 'users', 'action' => 'admin'));
                else
                    $this->redirect(array('controller' => 'users', 'action' => 'newsfeed'));
            } else {
                $this->Session->setFlash(__('Invalid'));
            }
        }
    }

    public function add()
    {
        if ($this->request->is('post')) {

            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Success'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('Fail, Try again.'));
            }
        }
    }
	public function add_admin()
    {
        if ($this->request->is('post')) {

            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Success'));
                $this->redirect(array('action' => 'manage'));
            } else {
                $this->Session->setFlash(__('Fail, Try again.'));
            }
        }
    }
	
	 public function edit($id=null){
		 
        $user = $this->User->find('first', [
            'conditions' => [
                'User.id' => $id
            ],
            'recursive' => -1
        ]);

        if(empty($user)){
            $this->redirect(['action' => 'edit']);
        }
        if($this->request->is('POST')){
            $data = [
                'User' => [
                    'id' => $id,
                    'username' => trim($this->request->data['User']['username']),
					'firstname' => trim($this->request->data['User']['firstname']),
					'lastname' => trim($this->request->data['User']['lastname']),
					'password' => trim($this->request->data['User']['password']),
					'email' => trim($this->request->data['User']['email'])
                ]
            ];
            if($this->User->save($data)){
                $this->Session->setFlash('yes');
                $this->redirect(['action' => 'edit']);
            }else{
                $this->Session->setFlash("not");
            }
        }

        $this->set('user', $user);
        $this->set('user_id', $id);
    }
	
	public function delete($id=null){
        $users = $this->User->find('all', [
            'conditions' => [
                'User.id' => $id
            ]
        ]);
        $this->set('user', $users);
		
		 if($this->User->delete($id)){
                $this->Session->setFlash('yes');
                 $this->set('user_id', $id);
            }else{
                $this->Session->setFlash("not");
            }
        
            $this->redirect('/users/manage');

    }

        public function achievement(){
            // $userId = 1;

            $this->_getCountfavoriteByUserId();
            $this->_getCountUploadDeckByUserId();
            $this->_getTopScoreByUserId();
            $this->_getAchievementRule();

        }

        public function adminAchievement(){
            //    $userId = 1;

//        $this->_getCountfavoriteByUserId($userId);
//        $this->_getCountUploadDeckByUserId($userId);
//        $this->_getTopScoreByUserId($userId);
            $this->_getAchievementRule();

            // $this -> render(`/user/admin-acrhievment.ctp`);

        }

        private function _getCountfavoriteByUserId($userId = 1){

            $count = $this->Favorite->find('count', [
                'conditions' => [
                    'user.id' => $userId
                ]
            ]);

            $this->set('addict', $count);
        }

        private function _getCountUploadDeckByUserId($userId = 1){

            $count = $this->Deck->find('count', [
                'conditions' => [
                    'user.id' => $userId
                ],
                'recursive' => 1
            ]);

            $this->set('upload', $count);
        }

        private function _getTopScoreByUserId($userId = 1){

            $score = $this->Score->find('first', [
                'conditions' => [
                    'user.id' => $userId
                ],
                'order' => [
                    'Score.score' => 'DESC'
                ]
            ]);

            $this->set('top', $score);
        }

        private function _getAchievementRule(){
            $achievement = $this->Achievement->find('first', [
                'conditions' => [
                    'Achievement.id' => 1
                ]
            ]);

            $this->set('achievement', $achievement);
        }

        public function editAchievement(){
            if ($this->request->is('post')) {
                $data = [
                    'Achievement' => [
                        'id' => 1,
                        'favorite' => trim($this->request->data['Achievement']['favorite']),
                        'top_score' => trim($this->request->data['Achievement']['top_score']),
                        'upload' => trim($this->request->data['Achievement']['upload']),
                        'genius' => trim($this->request->data['Achievement']['genius']),
                        'share' => trim($this->request->data['Achievement']['share'])
                    ]
                ];

                if($this->Achievement->save($data)){
                    $this->Session->setFlash('แก้ไขบัญชีเรียบร้อยแล้ว');
                    $this->redirect(['action' => 'adminAchievement']);
                }else{
                    $this->Session->setFlash("เกิดข้อผิดพลาดในการแก้ไข้บัญชี");
                }

            };
        }

        private function _getCategories(){
            $categories = $this->Category->find('all', [
                'order' => [
                    'Category.name' => 'ASC'
                ]
            ]);
            $this->set('allCategories', $categories);

        }
		 
	}
?>