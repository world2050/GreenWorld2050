<!-- Button to trigger modal - 
<button class="btn btn-success btn-lg hide" data-toggle="modal" data-target="#loginModalForm">
   Login
</button>

 -->

<!-- Modal -->
<div class="modal fade modal-success" id="loginModalForm" role="dialog">
    <div class="modal-dialog">
        
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel"> 
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#">LOGIN INTO YOUR ACCOUNT</a></li> 
                      <li ><a href="#">CREATE A NEW ACCOUNT</a></li>
                    </ul>
                </h4>
         
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form">
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder=" username@mail.com"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Password</label>
                        <input type="password" class="form-control" id="inputPasword" placeholder=" Password"> 
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success submitBtn" onclick="submitLoginForm();">LOGIN</button>
            </div>
        </div>
    </div>
</div>




<script>
    function submitLoginForm(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var name = $('#inputName').val();
        var email = $('#inputEmail').val(); 
        var password = $('#inputPasword').val(); 
        
        if(email.trim() == '' ){
            alert('Please enter your email.');
            $('#inputEmail').focus();
            return false;
        }else if(email.trim() != '' && !reg.test(email)){
            alert('Please enter valid email.');
            $('#inputEmail').focus();
            return false;
        } 
        else if(password.trim() == '' ){
            alert('Please enter your current town.');
            $('#inputMessage').focus();
            return false;
        }else{
            $.ajax({
                type:'POST',
                url:'submit_form.php',
                data:'loginFrmSubmit=1&email='+email+'&password='+password,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled","disabled");
                    $('.modal-body').css('opacity', '.5');
                },
                success:function(msg){
                    if(msg == 'ok'){
                        $('#inputName').val('');
                        $('#inputEmail').val('');
                        $('#inputMessage').val('');
                        $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                    }else{
                        $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.<br>'+msg+'</span>');
                    }
                    $('.submitBtn').removeAttr("disabled");
                    $('.modal-body').css('opacity', '');
                }
            });
        }
    }
    </script>