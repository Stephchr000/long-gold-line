onload = function()
{
 document.frame.document.body.style.fontsize = "32px";
}
   
   
   
function show(value) {
    
      var x;
 x = document.getElementById(value);
if(value === "ath"){
    document.getElementById("cch").style.display = "none";
}else if(value === "cch"){
    document.getElementById("ath").style.display = "none";
  
}else{
document.getElementById("ath").style.display = "none";
document.getElementById("cch").style.display = "none";
}

if(x.style.display === "block"){
        x.style.display = "none";
    }else{
        x.style.display = "block";
    }
    };
        

