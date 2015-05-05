<?php
	class CategoriesController extends AppController{
		 public function index(){         
		 	$categories = $this->Category->find('all', [
		 	            	'order' => [                 
		 	            		'Category.name' => 'ASC'             
		 	            	]         
		 	        ]);         
		 	$this->set('categories', $categories);

             return $categories;
		 	}

		  
	}
?>