function validation() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var password= document.getElementById("password").value;
    var password1 = document.getElementById("password1").value;

  if (nom == "" || prenom =="" || email =="" || password =="" || password1 =="" ) {
    alert("tu doit remplir tous les champs possible");
  }
  else
      if(validname(nom) && validepre(prenom) && validEmail(email)&& (password==password1)){
       return true;

      }else
      if(!validEmail(email)){
        alert('Le mail nest pas valide');
      }else
          if(password != password1){
              alert('la forme du mot de passe est incorect');
          }
      
    }
function validname(nom){
    var letters =/^[A-Za-z ]+$/;
    if(letters.test(nom)==true){
           return true;
       }
   else{
        return false;  
       }
   }
   function validepre(prenom){
    var letters =/^[A-Za-z ]+$/;
    if(letters.test(prenom)==true){
           return true;
       }
   else{
        return false;  
       }
    }
       function validEmail(email){
        var exp =  new RegExp(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);
        if(exp.test(email)==true){
            return true; 
            }
            else{
            return false;  
            }  
             }
            