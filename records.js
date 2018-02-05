 function myAlertFunction() {
        alert("You selected some text!");
    }
    
    

   
function show(value) {
      alert(value);
      var x;
 x = document.getElementById(value);
   /*if(vlaue = "ath"){
     
}else{
    x = "";
}*/
 if(x.style.display === "none"){
        x.style.display = "block";
    }else{
        x.style.display = "none";
    }
    };
        

