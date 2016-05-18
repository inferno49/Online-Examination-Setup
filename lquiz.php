<?php

?><?php include_once('functions.php'); ?>
<?php
if(empty($_SESSION['UA_DETAILS'])){
    header('Location:login.php?error=take_quiz');
}elseif(getSettings($db,'lquiz')!='1'){
    if(getSettParam($db,'lquiz')!='installed'){
        header('Location:quiz_menu.php?error=quiz_notinstalled');    
    }else{
        header('Location:quiz_menu.php?error=quiz_disabled');
    }
    
}elseif(getSettParam($db,'lquiz')!='installed'){
        header('Location:quiz_menu.php?error=quiz_notinstalled');    
}

?>