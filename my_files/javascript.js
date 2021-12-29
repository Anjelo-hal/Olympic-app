function selected(selectObject) {
  var value = selectObject.value;
  var x = document.getElementsByClassName("Albanias");
  var y = document.getElementsByClassName("Algerias");
  var z = document.getElementsByClassName("Afganistans");

  if (value == "Albania") {
    for (var i = 0; i < 4 ; i++) {
      x[i].style.display = "block";  
   
      y[i].style.display = "none";
    
      z[i].style.display = "none";
    }    
  } else if (value == "Algeria") {
    for (var i = 0; i < 4 ; i++) {
      x[i].style.display = "none";  
    
      y[i].style.display = "block";
    
      z[i].style.display = "none";
    }  
  } else if (value == "Afghanistan") {
    for (var i = 0; i < 4 ; i++) {    
      x[i].style.display = "none";  
    
      y[i].style.display = "none";
    
      z[i].style.display = "block";
    }  
  }
}

function disnone() {
  var y = document.getElementsByClassName("Algerias");
  var x = document.getElementsByClassName("Albanias");
  var z = document.getElementsByClassName("Afganistans");
  for (var i = 0; i <4 ; i++) {
  y[i].style.display = "none";  
  x[i].style.display = "none";  
  z[i].style.display = "none";  
  }
  
}
