<?php $this_users = $_SESSION['SEE_USER']; ?>

<!--post modal-->
<div class="modal  fade " id="profileModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header bg-success">
               <button type="button" class="close" data-dismiss="modal" class="btn btn-danger">
                    <span aria-hidden="true" class="btn btn-danger">&times;</span>
                    <span class="sr-only">Close</span>
                </button> 
                <h4 class="h4 text-center ">MAKE A COMMUNIY GREEN CALL</h4>
            </div>
            <!-- Modal Body -->
            <div class="modal-body"> 
                <p class="statusMsg"></p> 
                <form role="form"  style="padding: 3%; padding-top: 0px;" class="row">
                    <table class="table table-responsive" border="0" >
                        <tbody>
                            <tr>
                                <td>
                                    <img src="assets/img/user-avatar-640x640.png"  class="img-responsive img-thumbnail prof" style="height: 25vh;"> 
                                    <input type="file" name="proile-pic" id="upload-avatar" >
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="inputName">Name: <?php echo($this_users['username']);?> 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedName"> Edit</span>
                                    </label>
                                    <input type="text" class="form-control collapse" id="updatedName" placeholder="Enter your name"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="inputName">Phone: <?php echo($this_users['phone']);?> 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedName"> Edit</span>
                                    </label>
                                    <input type="text" class="form-control collapse" id="updatedPhone" placeholder="Enter your new phone number"/>
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <label for="inputEmail">Email:  <?php echo($this_users['email']);?> 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedEmail"> Edit</span>
                                    </label>
                                    <input type="email" class="form-control collapse" id="updatedEmail" placeholder=" username@mail.com"/>
                                </td> 
                            </tr>
                            <tr>
                                <td> 
                                    <label for="inputMessage">Town/City: <?php echo($this_users['location']);?> 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedTown"> Edit</span>
                                    </label>
                                    <input type="text" class="form-control collapse" id="updatedTown" placeholder=" eg. Kilifi">
                                </td>
                            </tr>
                            <tr>
                                <td> 
                                    <label for="inputMessage">Password: ********** 
                                        <span class="fa fa-edit" data-toggle="collapse" data-target="#updatedPasword"> Edit</span>
                                    </label>
                                    <input type="password" class="form-control collapse" id="updatedPasword" placeholder=" Password"> 
                                </td> 
                            </tr> 
                            
                        </tbody>
                        
                    </table>
                </form>
            </div> 
        </div>
    </div>
</div>


<script type="text/javascript">
    /* File upload */
$("#upload-avatar").change(function(){ 

     var  file=document.getElementById("upload-avatar").file;
     anert(file);


     for(var i=0;i<total_file;i++)
     {
      $('.prof').src=URL.createObjectURL(event.target.file);
     }

      $('form').ajaxForm(function() 
       {
        alert("Uploaded SuccessFully");
       }); 


});
</script>