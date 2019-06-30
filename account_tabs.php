 <ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link " id="new-account-tab" data-toggle="tab" href="#new-account" role="tab" aria-controls="new-account" aria-selected="true">CREATE A NEW ACCOUNT</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">LOGIN TO MY ACCOUNT </a>
	  </li> 
</ul>


<div class="tab-content" id="myTabContent">
  <p class="statusMsg"></p>

  <!--  Signup Tab -->
  <div class="tab-pane fade" id="new-account" role="tabpanel" aria-labelledby="new-account-tab">
	  
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

     <!-- Modal Footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success submitBtn" onclick="submitNewForm();">Create Account</button>
    </div>

  </div> <!-- End of Signup Tab -->

  <!-- Login Tab -->
  <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
      <form role="form" style="padding: 10px;">
	    <div class="form-group">
	        <label for="inputEmail">Email</label>
	        <input type="email" class="form-control" id="inputEmail" placeholder=" username@mail.com"/>
	    </div>
	    <div class="form-group">
	        <label for="inputMessage">Password</label>
	        <input type="password" class="form-control" id="inputPasword" placeholder=" Password"> 
	    </div>
	</form> 

	<!-- Modal Footer -->
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-success submitBtn" onclick="submitLoginForm();">LOGIN</button>
	</div>

  </div>
  
</div> <!-- End of Login Tab -->