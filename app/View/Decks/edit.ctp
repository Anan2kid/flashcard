<div class="page-container">
  
	<!-- top navbar -->
   <!-- top navbar -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <!-- div header start -->
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <i class="glyphicon glyphicon-flash"></i>
        </a>
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">THE FLASH CARD</a>
      </div>
      <!-- div header finish -->
      <!-- div collapse start -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><i class="glyphicon glyphicon-star"></i> Bookmarks</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Decks</a></li>
          <li><a href="#"><i class="glyphicon glyphicon-education"></i> Achievements</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Nutchalum <span class="caret"></span></a>
            <ul id="g-account-menu" class="dropdown-menu" role="menu">
              <li><a href="#">My Profile</a></li>
              <li><a href="#">Edit Profile</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
        </ul>
      </div>
    </div>
    <!-- div collapse finish -->
  </nav>
      
    <div class="container-fluid" >
      <div class="row row-offcanvas row-offcanvas-left">
        
       
  	
        <!--/main-->
        <div class="col-sm-12" style="color:black">

		 
            <div class="panel panel-default">
                   <div class="panel-heading"><h4>Edit Deck</h4></div>
                    <div class="panel-body">
                     
					<form class="form-horizontal">
                      <div class="form-group text-left">
                    	<label for="Username" class="col-sm-2 control-label">Deck Name: </label>
                    		<div class="col-sm-5">
                      				<input name="deckname" type="text" class="form-control" id="deckname" placeholder="deckname" required>
                   			</div>
						</div>
					<div class="form-group text-left">
						<label for="Achievements" class="col-sm-2 control-label">Categories: </label>
                    		<div class="col-sm-5">
                      				<select>
									  <option value="math">Math</option>
									  <option value="animal">Animal</option>
									  <option value="car">Car</option>
									  <option value="food">Food</option>
									</select>
                   			</div>
							 </div>
				  <div class="form-group text-left">
                    				<label for="Tag" class="col-sm-2 control-label"> Tag</label>
                    				<div class="col-sm-5">
                      					<input name="tag" type="text" class="form-control" id="tagPicture" placeholder="* ?????? " required>
                                       </div>
                                 
                  				</div>
								
					<div class="form-group text-left">
						<label for="Achievements" class="col-sm-2 control-label">Description: </label>
                    		<div class="col-sm-5">
                      					<textarea name="description_video" class="form-control" rows="5" id="descriptionVideo" placeholder="Description..." required="required"></textarea>
                    				</div>
							 </div>
							 

                                <div class="form-group text-left" style="margin-left:70%"><!-- Input File-->
                    				<input type="file" id="pictureInputFile" required>
                  				</div>
								
								
								<!-- upload-->
				<hr>
				<div class="panel-heading"><h4>Upload</h4></div>
                    <div class="panel-body">
					      
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#A" data-toggle="tab">Picture</a></li>
                        <li><a href="#B" data-toggle="tab">Text</a></li>
                        
                      </ul>
                      <div class="tabbable">
                        <div class="tab-content">
                          <div class="tab-pane active" id="A">
						  
						  <br>
								<br>
								<br>
								
								<label for="Width" class="col-sm-2 control-label">Font</label>
                    				<div class="col-sm-2">
                      					<input type="file" id="pictureInputFile" required>
                   					</div>
                    				<label for="Height" class="col-sm-3 control-label">Back</label>
                    				<div class="col-sm-2">
                      					<input type="file" id="pictureInputFile" required>
                    				</div>
								
								
                      			
								<br>
								<input type="submit"  style="margin-left:40%" value="Add Card">

                          </div>
                          <div class="tab-pane" id="B">
						  <br>
								  <br>
								<br>
								<br>
								
							 <div class="form-group text-left">
                    				<label for="Tag" class="col-sm-2 control-label"> Font</label>
                    				<div class="col-sm-5">
                      					<input name="tag" type="text" class="form-control" id="tagPicture" placeholder="Font " required>
                                       </div>
                                 
                  				</div>
								
							<div class="form-group text-left">
                    				<label for="Tag" class="col-sm-2 control-label"> Back</label>
                    				<div class="col-sm-5">
                      					<input name="tag" type="text" class="form-control" id="tagPicture" placeholder="Back " required>
                                       </div>
                                 
                  				</div>
								
								
                      			
								<br>
								<input type="submit"  style="margin-left:40%" value="Add Card">
                          </div>
                        
                        </div>
                      </div> <!-- /tabbable -->
                 
    
				
				   <!--card list-->
				   <hr>
				   <div class="panel-heading"><h4>Card List</h4></div>
                    <div class="panel-body">
                     
					<form class="form-horizontal">
                      <div class="form-group text-left">
					
									<button type="button" onclick="alert('name of card!')">Delete</button>
									
							</div>	
								
					<hr>
					
					<td>
					    
                                <button class="btn btn-info" style="margin-left:20%" type="submit"><!-- Summit Button-->
                    <span><img src="https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/plus-20.png" ></span> Submit</button>
					   
                                <button class="btn btn-info" style="margin-left:20%" type="submit"><!-- Summit Button-->
                    <span><img src="https://cdn1.iconfinder.com/data/icons/round-black-icons-2/78/plus-20.png" ></span> Cancel</button>
					 
					</td>
						
					
                                
                   </form>
				   </div>
				   
     
        </div><!--/.col-xs-12-->
      </div><!--/.row-->
    </div>
  </div><!--/.container-->
</div><!--/.page-container-->
          
         