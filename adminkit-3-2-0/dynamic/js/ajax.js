


var requete = null;

function creerRequete() {
    try {

        requete = new XMLHttpRequest();
    } catch (microsoft) {
   
        try {
            requete = new ActiveXObject('Msxml2.XMLHTTP');
        } catch (autremicrosoft) {
       
            try {
                requete = new ActiveXObject('Microsoft.XMLHTTP');
            } catch (echec) {
                
                requete = null;
            }
        }
    }
    if (requete == null) {
        alert(
            'Impossible de cr�er l\'objet requ�te,\nVotre navigateur ne semble pas supporter les object XMLHttpRequest.');
    }
}

function actualiserDepartements() {
    var listeDept = requete.responseText;
    var blocListe = document.getElementById('blocDepartements');
    blocListe.innerHTML = listeDept;
    console.log(listeDept)
}
function getDepartements(idr) {

    if (idr == 'vide') {
        document.getElementById('blocDepartements').innerHTML = '';
       
    } else {
         
       
        var blocListe = document.getElementById('blocDepartements');
        blocListe.innerHTML = "Traitement en cours, veuillez patienter...";

        creerRequete();
    
        var url = './js/sservice.php?idr=' + idr;

        requete.open('GET', url, true);
   
        requete.onreadystatechange = function() {

            if (requete.readyState == 4) {

                if (requete.status == 200) {

                    actualiserDepartements();
                }
            }
        };
       
        requete.send(null);
        
    }
}