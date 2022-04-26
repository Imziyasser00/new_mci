var xhr = new XMLHttpRequest();
 document.getElementById("sub").addEventListener("click", function(e) {
    
xhr.open("POST","./db/json_types.php");

xhr.onload = function(){

    var jsvar = this.response;
    console.log(jsvar);
    jsvar = JSON.parse(jsvar);
    console.log(jsvar[0].type);
    
    var d = 0;
    var form2 = document.getElementById("type");

    var type = $("#_type").val();
    type = type.replace(/\s+/g, '');
    type = type.toUpperCase();
    console.log(type)
    if(!confirm("Are you sure ?")){
        e.preventDefault();
    }else{
        for (i=0; i < jsvar.length; i++) {

            if(jsvar[i].type.toUpperCase().replace(/\s+/g, '') == type){
                d = 1;
            }       
        }
        if(d==1){
            alert("OOPS this type is already exist");
            e.preventDefault()
        }
        else{
            form2.submit();
        }
    }
    
}
xhr.send();
});











