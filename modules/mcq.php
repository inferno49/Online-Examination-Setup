<?php

?><?php 
function getMCQ($value,$key){

        $qstn_opt = explode("|",$value['options']);
        $tot_opt = count($qstn_opt);


?>
<div id="qstn<?php echo $key; ?>" class="pq_container">
<div class="pq_qno">Q.<?php echo $key; ?></div>
<div class="pq_cat"><?php echo $value['category']; ?></div>
<div class="pq_question_hld">
                               
       <div class="pq_qtn"><?php echo $value['questions']; ?></div>
       <div class="pq_opt_hld">
        <div class="pq_opt_col1"> 
        <?php for($i=0;$i<$tot_opt;$i=$i+2){ ?>
            <div id="<?php echo ($key).'_'.$i; ?>" class="pq_opt">
                <input  type="radio" name="<?php echo $value['qid']; ?>" value="<?php echo $qstn_opt[$i]; ?>" />
                <?php echo $qstn_opt[$i]; ?>
            </div>
        <?php } ?>
        </div>
        <div class="pq_opt_col2"> 
        <?php for($i=1;$i<$tot_opt;$i=$i+2){ ?>
            <div id="<?php echo ($key).'_'.$i; ?>" class="pq_opt">
                <input  type="radio" name="<?php echo $value['qid']; ?>" value="<?php echo $qstn_opt[$i]; ?>" />
                <?php echo $qstn_opt[$i]; ?>
            </div>
        <?php } ?>
        </div>
           
       </div>
       
    </div>
</div>
<div style="clear: both;"></div>
<?php
}
?>