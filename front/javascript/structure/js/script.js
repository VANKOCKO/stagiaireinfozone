
$(function(){

/**
 *   console.log() : depuis un fichier script
 */
console.log("je suis executer depuis un fichier js");

/**
 *   Les variables 
 * 
 *  une variable permet de stocker une information que nous pouvons plus 
 *  tard l'utiliser dans le programme ! 
 */

 var chiffre = 5000 
 console.log("Varibale initiale est : " + chiffre);
 console.log("Variable initiale ajouter de 400:")
 res = chiffre + 400
 console.log("resultat : "+res);

 // modifier la variable dans le programme 

 chiffre = 200 

 console.log("Variable modifier est : " + chiffre) 


/**
 *   Variable string 
 */

 // variable avec des simples quotes
 var variableStringSimpleQuote = 'je suis une variable string sur des simples quotes';
 console.log("variable sur des simples quotes :" + variableStringSimpleQuote );
// varibale sur des doubles quotes 
 var variableStringDoubleQuote = 'je suis une variable string sur des doubles quotes';
 console.log("variable sur des doubles quotees :" + variableStringDoubleQuote);



/**
 *   Les instruction pour afficher des variables sur
 *   
 *      alert()  : une boite de dialogue sur la page 
 *      console.info() : comme console.log() mais juste avec une petite icon info
 *      console.warn() : comme console.log() mais juste avec une petite icon 
 *      console.error : comme console.log() mais juste avec une petite icon erreur
*/

  console.info("affichage de : console.info()");
  console.warn("affichage de : console.warn()");
  console.error("affichage de : console.error()");

  /**
   *   Utiliser prompt()
   * pour introduire du text
   */

  // entreeNom = prompt("Veuillez saisir votre nom");
  // console.log(entreeNom);

/**
 *   Boolean   
 */

 var vrai = true;
 var faux = false;

/**
 *   Tableau  
 */


var listeDesFruit=[
                     "Banane",
                     "tomates",
                     "comcombre",
                     "courgette"]
                    
    var listeDesPrenom = []
    var ul = document.getElementById("ul");

    $("#prenom").val("");
    // creation tableau de donnees 
    var nom = []; 
    // keyup():  evenement clavier
    $("#prenom").keyup(function(e) {  
        // push insertion dans le tableau nom
        nom.push($(this).val())
        // verification de la taille dans le tableau : limite le nombre a 5 caractere
        if(nom.length >= 5 ){
            // mettre en rouge le text d'erreur
            $("#messageErreurNom").css("color","red");
            // message du nombre du caractere 
            $("#messageErreurNom").text("maximum 5 caracteres")
        } 
        // recuperation evenement clavier          
        if(e.which == 8  ) {
                nom.pop();
                if(nom.length >= 4 ){
                    $("#messageErreurNom").css("color","green");
                    $("#messageErreurNom").text("ok")
                }
        }
    })
    /** 
    btnEnvoyer.click(function(){
        prenom = $("#prenom").val();
        
        $.ajax({
            method: "POST",
            url: "get_data.php",
            data: {
                prenom: prenom
            }
        }).done(function (response) {
            console.log(response);
        });
    });
    */

});
    
  
  
