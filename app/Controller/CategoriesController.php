<?php
	class CategoriesController extends AppController{
		
		public function index(){

			$this->redirect('/categories/manage');
		}

		public function create(){

			 if($this->request->is('POST')){ 

			 	$data = [
			 	        'Category' => [
			 	                  'name' => trim($this->request->data['Category']['name'])      
			 	        ]    
          		];

          		 if($this->Category->save($data)){
          		 	$name = $this->request->data['Category']['name'];
			 	$this->Session->setFlash("Category \"$name\" has been created"); 
			 }
			 }


			
			//get all category
		
		}

		public function manage(){
			//get all category
			$categories = $this->Category->find('all', [
			 	'order' => [
			   		'Category.name' => 'ASC'             
			   	]         
			]); 

			//set all attributes
			$this->set('categories', $categories); 

		}

		public function delete($id = null){
			if($this->Category->delete($id))
			{
				$this->redirect('/categories/manage');
				$this->Session->setFlash("A category has been deleted"); 
			}

		}

		public function edit($id = null){

			$category = $this->Category->find('first', [
				'conditions' => [
					'Category.id' => $id 
					],
					'recursive' => -1
				]);
			$old = $category['Category']['name'];
			if(empty($category)){
				$this->Session->setFlash("Empty category"); 
				$this->redirect('/categories/manage');
			}
			 if($this->request->is('POST')){ 
			 	 $data = [           'Category' => [
			 	               'id' => $id,
			 	               'name' => trim($this->request->data['Category']['name'])
			 	                          ]      
			 	                ];

			 	if($this->Category->save($data)){
			 		$name = trim($this->request->data['Category']['name']);
			 	          $this->Session->setFlash("A catagory \"$old\" has been edited to \"$name\""); 
         				$this->redirect('/categories/manage');   
         				}
         		else{         
         		 $this->Session->setFlash("Error ! Something went wrong."); 
     			 }   
			 	}
			$this->set('category', $category);
			$this->set('category_id', $id); 
				


		}

		 
	}
?>