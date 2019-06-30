<!-- Button to trigger modal  
<button class="btn btn-success btn-lg hide" data-toggle="modal" data-target="#signupModalForm">
   Signup
</button>

 -->

<!-- Modal -->
<div class="modal fade" id="signupModalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">CREATE NEW ACCOUNT</h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form role="form" action="POST" style="padding: 10px;">
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="newInputName" placeholder="Enter your name"/>
                    </div>
                    <div class="form-group">
                        <label for="inputName">Phone</label>
                        <input type="tel" class="form-control" id="newInputPhone" placeholder=" eg. 0712345678"/>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="newInputEmail" placeholder=" username@mail.com"/>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Town/City</label>
                        <input type="text" class="form-control" id="newInputTown" placeholder=" eg. Kilifi"> 
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Password</label>
                        <input type="password" class="form-control" id="newInputPasword" placeholder=" Password"> 
                    </div>
                </form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success submitBtn" onclick="submitNewForm();">Create Account</button>
            </div>
        </div>
    </div>
</div>




<script>
    function submitNewForm(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var name = $('#newInputName').val();
        var phone = $('#newInputPhone').val();
        var email = $('#newInputEmail').val();
        var town = $('#newInputTown').val();
        var password = $('#newInputPasword').val(); 
        if(name.trim() == '' ){
            alert('Please enter your name.');
            $('#newInputName').focus();
            return false;
        }else if(phone.trim() == '' ){
            alert('Please enter your phone number.');
            $('#newInputPhone').focus();
            return false;
        }else if(email.trim() != '' && !reg.test(email)){
            alert('Please enter valid email.');
            $('#newInputEmail').focus();
            return false;
        }else if(town.trim() == '' ){
            alert('Please enter your current town.');
            $('#newInputTown').focus();
            return false;
        }
        else if(password.trim() == '' ){
            alert('Please enter your current town.');
            $('#newInputPasword').focus();
            return false;
        }else{
            $.ajax({
                type:'POST',
                url:'signup.php',
                data:'signupFrmSubmit=1&name='+name+'&phone='+phone+'&email='+email+'&town='+town+'&password='+password,
                beforeSend: function () {
                    $('.submitBtn').attr("disabled","disabled");
                    $('.modal-body').css('opacity', '.5');
                },
                success:function(msg){
                    if(msg == 'ok'){
                        $('#newInputName').val('');
                        $('#newInputEmail').val('');
                        $('#newInputTown').val();
                        $('#newInputPasword').val();
                        $('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
                    }else{
                        $('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again. </span>');
                    }
                    $('.submitBtn').removeAttr("disabled");
                    $('.modal-body').css('opacity', '');
                }
            });
        }
    }
    </script>