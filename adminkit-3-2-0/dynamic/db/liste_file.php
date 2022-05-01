<?php 




$query = mysqli_query($conn,"SELECT * FROM TYPE");
echo '<div id="files_down" style="display:none;" class="file_down">';
while($obj = $query->fetch_assoc()){
    echo '
    <li class="sidebar-link"><a class="sidebar-link" href="diffServ.php"><i class="align-middle"
                data-feather="file-text"></i><span class="align-middle">'.$obj["type"].'</span></a>
    </li>
';
}
echo '</div>';







?>