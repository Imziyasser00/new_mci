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
</script>