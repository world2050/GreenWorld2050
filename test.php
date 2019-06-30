<!DOCTYPE html>
<html>
  <head>
    <title>www.W3docs.com</title>
    <style>
      input {
        height: 30px;
        padding-left: 10px;
        border-radius: 4px;
        border: 1px solid rgb(186, 178, 178);
        box-shadow: 0px 0px 12px #EFEFEF;
      }
    </style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3XfuMJJGzaU8TUItQM7XWD4esZdbpgtA&libraries=places"></script>>
  </head>
  <body>
    <input type="text" id="autocomplete" /> 

    <script>
      var input = document.getElementById('autocomplete');
      var autocomplete = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
      google.maps.event.addListener(autocomplete, 'place_changed', function(){
         var place = autocomplete.getPlace();
      })
    </script>
  </body>
</html>

<div class="messages" style="max-height: 77vh;">
                  <ul class="inbox">
                    <li class="sent">
                      <p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
                    </li>
                    <li class="replies">
                      <p>When you're backed against the wall, break the god damn thing down.</p>
                    </li>
                    <li class="replies">
                      <p>Excuses don't win championships.</p>
                    </li>
                    <li class="sent">
                      <p>Oh yeah, did Michael Jordan tell you that?</p>
                    </li>
                    <li class="replies">
                      <p>No, I told him that.</p>
                    </li>
                    <li class="replies">
                      <img src="media/arafat.jpg" alt="">
                      <p>What are your choices when someone puts a gun to your head?</p>
                    </li>
                    <li class="sent">
                      <img src="media/arafat.jpg" alt="">
                      <p>What are you talking about? You do what they say or they shoot you.</p>
                    </li>
                    <li class="replies">
                      <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                    </li>
                  </ul>
                </div>