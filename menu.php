<?php

?><ul>
<?php
    foreach($headMenu as $value){
        if(check_level($value) && check_auth($value)){
            if(preg_match('/'.$value['link'].'/',$_SERVER['PHP_SELF'],$matches)){
               echo '<li><a class="current" href="'.$value['link'].'">'.$value['title'].'</a></li>';
            }else{
               echo '<li><a href="'.$value['link'].'">'.$value['title'].'</a></li>';
            }    
        }
        
    }
   
?>
</ul>