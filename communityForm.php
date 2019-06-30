<!-- Upload Image preview -->
  <form class="form center-block" enctype="multipart/form-data" id="newCommunity">

    <div class="form-group">
        <input class="form-control input-lg story-title" autofocus="" placeholder="New community name." id="postTitle" name="postTitle">
        <div class="" id="image_preview"> </div>
        <textarea 
                  id="postContent" 
                  name="postContent" 
                  class="form-control input-lg"  
                  placeholder="Write somthing about this community."
        ></textarea> 

    </div>
    <div class="modal-footer">
         <ul class="pull-left list-inline">
              <li class="fileContainer">   
                 <a href="#">
                  <i class="glyphicon glyphicon-picture" ></i>
                  <input type="file" id="uploadFile" name="uploadFile[]" multiple/>
                 </a>
              </li>
              <li> 
                  <a href="#"  data-toggle="collapse" data-target="#videoLink"  onclick="load_video();">
                      <i class="glyphicon  glyphicon-film"></i>   
                  </a>                                    
              </li>
              <li>
                  <a href="#"><i class="glyphicon glyphicon-map-marker" data-toggle="collapse" data-target="#location"></i></a>   
              </li>
              <li>
                   <input type="location" name="location" class="collapse form-control input" id="location" placeholder="Share location">
                   <input type="url" name="video" class="collapse form-control input" id="videoLink" placeholder="YouTube Video Link">
                  
              </li>
          </ul>
         <button type="submit" class="btn btn-success btn-md" name='submitImage' value="Upload Image">Post</button>
    </div>
  </form>
