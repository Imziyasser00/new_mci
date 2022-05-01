var form = document.getElementById("active_form");

document.getElementById("activeSubmit").addEventListener("click", function(e) {
    if(jQuery('#active_form input[type=checkbox]:checked').length) {
        if(!confirm("Are you sure that you want to activate those files")){
            e.preventDefault();
        }
        else{
            form.submit();
        }
    }else{
        alert("Please choose one");
    }

    
});