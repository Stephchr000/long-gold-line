<!DOCTYPE html>
<html>
    <header>
        <title>The Long Gold Line</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
<link rel = "stylesheet"
   type = "text/css"
   href = "records/records.css" />
   <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>   
   <script src=" http://requirejs.org/docs/release/2.2.0/minified/require.js"></script>
   <script type="text/javascript" src="records/records.js"></script>
  
</header>
 
<body id="background">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <div id="FA"><img height="200" src="images/2014_regional_win.jpg" width="14%" /> <img height="200" src="images/state_win.jpg" width="14%" /> <img height="200" src="images/shaneBrown_2014_sectional.jpg" width="14%" /> <a href="index.html"> <img align="middle" height="200" src="images/winged-w-v1.jpg" width="14%" /> </a> <img height="200" src="images/kyle_mic.jpg" width="14%" /> <img height="200" src="images/1997_Team.jpg" width="14%" /> <img height="200" src="images/centerGrove_2014.jpg"  /></div>
     <div id="NB">
         <div class="row">
             
            
            <div class = "col-xs-1 tL"><button id="logBtn"><a href="logIn.html" style="color: white">LOG-IN</a></button></div>
            <div class = "col-xs-2 tL"><button id="signBtn"><a href="" style="color: white">SIGN-UP</a></button></div>
                    
         </div>
     </div>
     
     <div class="center">
        <div class="row">
        <div class="col-xs-3 rc"><h3  class="menu1" onclick="show()">Top Ten By Grade</h3></div> 
        <div class="col-xs-5 rcc">
            <div class="Dd">
                <!--<form  method="post" action="php-form.php">
                   <input name="cat" id="cat" type="text" value="hi" placeholder="Search">
        <input type="submit">
                </form>-->
              <select class="menu" oninput="show(value)">
                  <option value="bb"></option>
                  <option value="ath">Athlete</option>
                  <option value="cch">Coach</option>
              </select>
        
        </div>
        
        </div> 
       
        <div class="col-xs-3 rc"><h3 class="menu1">Top Ten Overall</h3></div>
        </div>
        </div>
        
        <div class="" id="">
        <div class="row">
        <div class="pd col-xs-3 rc" >
            <div class="row">
                <div class="fp col-xs-2 ">
        <h1 id="fnt">Freshman <ol class="cent" >
                <li>NAME1</li>
                <li>NAME2</li>
                <li>NAME3</li>
                <li>NAME4</li>
                <li>NAME5</li>
                <li>NAME6</li>
                <li>NAME7</li>
                <li>NAME8</li>
                <li>NAME9</li>
                <li>NAME10</li>
            </ol></h1>
        </div>
        <div class="sp col-xs-2 ">
        <h1 id="fnt">Sophomore <ol class="cent" >
                <li>NAME1</li>
                <li>NAME2</li>
                <li>NAME3</li>
                <li>NAME4</li>
                <li>NAME5</li>
                <li>NAME6</li>
                <li>NAME7</li>
                <li>NAME8</li>
                <li>NAME9</li>
                <li>NAME10</li>
                </ol></h1>
        </div>
        </div>
        <div class="row">
                <div class="fp col-xs-2 ">
        <h1 id="fnt">Junior <ol class="cent" >
                <li>NAME1</li>
                <li>NAME2</li>
                <li>NAME3</li>
                <li>NAME4</li>
                <li>NAME5</li>
                <li>NAME6</li>
                <li>NAME7</li>
                <li>NAME8</li>
                <li>NAME9</li>
                <li>NAME10</li>
            </ol></h1>
        </div>
        <div class="sp col-xs-2 ">
        <h1 id="fnt"> Senior <ol class="cent" >
                <li>NAME1</li>
                <li>NAME2</li>
                <li>NAME3</li>
                <li>NAME4</li>
                <li>NAME5</li>
                <li>NAME6</li>
                <li>NAME7</li>
                <li>NAME8</li>
                <li>NAME9</li>
                <li>NAME10</li>
                </ol></h1>
        </div>
        </div>
        </div> 
        <div class="col-xs-5 rcc">
            <div class="Dd center">
        
        <h2 id="ath" class="dis">  
  
<form action="q.php" method="post" target="frame">
<div id="srch">
Name: <input type="text" name="name" class="menu">
<input type="submit" class="btn1">
</div>
</form>
<iframe name="frame" class="IF" id="frame"></iframe>
      </h2>
        <h2 id="cch" class="dis" >This is a Coach</h2>
            </div>
        </div>
        <div class="col-xs-3 rc"><h3 id="fnt">Fastest Bois </h3>
            <div class="col-xs-2 sp1">
           <h3> <ol class="cent2" >
            <li>NAME1</li>
            <li>NAME2</li>
            <li>NAME3</li>
            <li>NAME4</li>
            <li>NAME5</li>
            <li>NAME6</li>
            <li>NAME7</li>
            <li>NAME8</li>
            <li>NAME9</li>
            <li>NAME10</li>
            </ol>
        </div>
        </div>
        





      
        
    </h3>
        </div>
    
        </div>
        </div>
        









     <div>
        <div id="bh" class ="SMT">
           <div class="row">
                  <div class = "col-xs-3 ">
                          <div class ="row SP">
                                  <div class = "col-xs-3 "><button id = "homeBtn"><a href="index.html" style="color:white">HOME</a></button></div>

                                  <div class = "col-xs-3 "><button id = "forumBtn"><a href="gh.html" style="color:white">FORUM</a></button></div>
                                  <div class = "col-xs-1 "><button id = "recordsBtn"><a href="db.php" style="color:white">RECORDS</a></button></div>
                          </div>
                  
                  <div class ="row SP">
                    <div class = "col-xs-3 "><button id = "scheduleBtn"><a href="schedule.html" style="color:white"> SCHEDULE</a></button></div>
                    <div class = "col-xs-3 "><button id = "aboutBtn"><a href="" style="color:white">ABOUT US</a></button></div>
                    <div class = "col-xs-3 "><button id = "galleryBtn"><a href="gallery.html" style="color:white"> GALLERY</a></button></div>
                     </div>
                     <div class ="row SP"> 
                          <div class = "col-xs-3 "><button id ="contactBtn">CONTACT US</button></div>
                          <!--a href="contactUs.html">CONTACT US</a--><!---->
                           <div class = "col-xs-1 "><button id = "staffBtn"><a href="" style="color:white">STAFF</a></button></div>
                           
                       </div>
            </div>
            
                  <div class=" col-xs-6">
                  <h2 id="lowerP">This website was created to help the Warren Central Cross-country team keep track of their records. The website is also for people who are alumni or anyone who wants to follow the team and their accomplishments.</h2>
                  </div>
                  <div class="col-xs-3 ">
                          <div class ="row SMT">
                          <div class = "col-s-6 "><h5 class ="TL">Website Created By:</h5></div>
                          </div>   
                 
          
          <div class ="row ">
                  <div class = "col-s-6 "><h6 class ="TL">Christopher Stephens</h6></div>
               
             </div>
             <div class ="row "> 
                  <div class = "col-s-6"><h6 class ="TL">Kevin King Jr.</h6></div>
                   
                   
               </div>
               <div class ="row "> 
                      <div class = "col-s-6 "><h6 class ="TL">Mark Hudgins</h6></div>
                       
                       
                   </div>
                  </div>
                  </div>
              </div>
        </div>














        <div id="myModal" class="modal">
            
              <!-- Modal content -->
              
              <div class="modal-content">
                <span class="close">&times;</span>
                
                  <form action = "form_process.php" method="post" name = "contact_form">
                     <p>First Name:
                         <input name="first_name" type="text" />
                     </p>
          
                     <p>Last Name:
                         <input name="last_name" type="text" />
                     </p>
          
                     <p>Email:
                         <input name="email" type="text" />
                     </p>
          
                     <p>Your Message:
                         <textarea name="message"> </textarea>&nbsp;
                     </p>
                     <p>
                         <input type = "submit" name = "submit" id ="submit" value = "Submit"/>
                         <input type = "reset" name = "reset" id ="reset" value = "Reset" />
                     </p>
          
                 </form>   </h1></div> 
              
              
          </div>
              </div>
            
            </div>
          
            <script>
              // Get the modal
              var modal = document.getElementById('myModal');
              
              // Get the button that opens the modal
              var btn = document.getElementById("contactBtn");
              
              // Get the <span> element that closes the modal
              var span = document.getElementsByClassName("close")[0];
              
              // When the user clicks the button, open the modal 
              btn.onclick = function() {
                  modal.style.display = "block";
              }
              
              // When the user clicks on <span> (x), close the modal
              span.onclick = function() {
                  modal.style.display = "none";
              }
              
              // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                  if (event.target == modal) {
                      modal.style.display = "none";
                  }
              }
              </script>

</body>
</html>