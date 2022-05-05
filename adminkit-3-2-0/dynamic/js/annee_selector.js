
function myValidation() {
    var observateur = $('#Date').val();
   
    var xhr = new XMLHttpRequest();

    form = $("#myform");

    xhr.open("POST", "./db/annee_json.php");

    xhr.onload = function() {

        var jsvar = this.response;

        jsvar = JSON.parse(jsvar);
        console.log(jsvar[0].type);

        var d = 0;


        var type = $("#Date").val();

        type = type.toString();
       
        

        console.log(type)
        if (!confirm("Are you sure ?")) {
            return false;
        } else {
            for (i = 0; i < jsvar.length; i++) {
                if (jsvar[i].annee == type) {
                    d = 1;
                    alert('Erreur! Le plan est déja validé impossible de le modifier.')
                    return false;
                }
            }
            
            if (d == 0) {
                form.submit();
            }

        }


    }
    xhr.send();
    return false;
















}
  











