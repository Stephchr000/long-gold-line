 function myAlertFunction() {
        alert("You selected some text!");
    }
    
    

   
function show(value) {
    
      var x;
 x = document.getElementById(value);
if(value === "ath"){
    document.getElementById("cch").style.display = "none";
}
if(value === "cch"){
    document.getElementById("ath").style.display = "none";
}
if(x.style.display === "block"){
        x.style.display = "none";
    }else{
        x.style.display = "block";
    }
    };
        

