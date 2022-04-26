var form2 = document.getElementById("desactive_form");

document.getElementById("des").addEventListener("click", function(e) {
    if(jQuery('#desactive_form input[type=checkbox]:checked').length) {
        if(!confirm("Are you sure that you want to desactivate those files")){
            e.preventDefault();
        }
        else{
            form2.submit();
        }
    }
    else{
        form2.submit();
    }
});
