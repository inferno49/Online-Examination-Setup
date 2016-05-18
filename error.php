<?php

?><?php if(!empty($_SESSION['ERROR'])) { ?>
<div class="pqSub<?php echo $_SESSION['ERROR']['type']; ?>">
    <ul>
    <?php
        $error_arr = explode('|',trim($_SESSION['ERROR']['reason'],'|'));
        foreach($error_arr as $value){
            echo  '<li>'.$value.'</li>';
        }
    ?>
    </ul>
</div>
<?php } ?>