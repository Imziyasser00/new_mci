<footer class="footer">
    <div class="container-fluid">
        <div class="row text-muted">
            <div class="col-6 text-start">
                <p class="mb-0">
                    <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>M C I </strong></a>
                    &copy;
                </p>
            </div>
        </div>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slidetoggle@3.3.2/dist/slidetoggle.min.js">
</script>

<script>
$(document).ready(function() {
    $("#admin").click(function() {
        $("#test").slideToggle(500);
    });
});
$(document).ready(function() {
    $("#ad_down").click(function() {
        $("#admin_down").slideToggle(500);
    });
});
$(document).ready(function() {
    $("#service_down").click(function() {
        $("#serv_down").slideToggle(500);
    });
});
$(document).ready(function() {
    $("#document_down").click(function() {
        $("#doc_down").slideToggle(500);
    });
});
$(document).ready(function() {
    $("#diff_down").click(function() {
        $("#dif_down").slideToggle(500);
    });
});
</script>

<script>
$(document).ready(function() {
    $("#doc_top").click(function() {
        $("#Doc").slideToggle(500);
    });
});
</script>


<script>
var elems = document.getElementsByClassName('confirmation');
var confirmIt = function(e) {
    if (!confirm('Are you sure?')) e.preventDefault();
};
for (var i = 0, l = elems.length; i < l; i++) {
    elems[i].addEventListener('click', confirmIt, false);
}


var files = document.getElementsByClassName('file_not');
var file_It = function(e) {
    alert("File doesn't exists")
    e.preventDefault();
};
for (var i = 0, l = files.length; i < l; i++) {
    files[i].addEventListener('click', file_It);
}
</script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>