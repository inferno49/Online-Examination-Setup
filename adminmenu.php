<?php

?><ul id="nav" class="dropdown dropdown-horizontal">
            	<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">MainMenu</a></li>
            	<li><span class="dir">Activate</span>
            		<ul>
            			<li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=getpage&page=activate&type=cat'; ?>">Category &amp; Sub-Category</a></li>
                        <li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=getpage&page=activate&type=qstn'; ?>">Quiz Questions</a></li>
            		</ul>
            	</li>
            	<li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=getpage&page=manage_users'; ?>" >Manage Users</a></li>
            	<li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=getpage&page=cnt_mng'; ?>" >Content Manegment</a></li>
            	<li><a href="<?php echo $_SERVER['PHP_SELF'].'?action=getpage&page=settings'; ?>" id="contact_admin">Settings</a></li>
            	
            </ul>