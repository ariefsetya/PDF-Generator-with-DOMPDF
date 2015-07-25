<nav class="navigation-bar">
    <nav class="navigation-bar-content">
        <div class="element">
            <a class="dropdown-toggle" href="#"><i class="icon-cloud"></i> CloudSheet</a>
            <ul class="dropdown-menu" data-role="dropdown">
                <li><a class="dropdown-toggle" href="#">Create New</a>
                <ul class="dropdown-menu" data-role="dropdown">
                        <li><a href="<?php echo base_url("Sheet/Custom");?>">Custom Sheet</a></li>
                        <li><a href="<?php echo base_url("Sheet/Present");?>">Present Sheet</a></li>
                        <li><a href="<?php echo base_url("Sheet/Webforms");?>">Web Forms</a></li>
                        <li><a href="<?php echo base_url("Sheet/Calendar");?>">Calendar Sheet</a></li>
                        <li><a href="<?php echo base_url("Sheet/Todolist");?>">To Do List</a></li>
                        <li><a href="<?php echo base_url("Sheet/Tasklist");?>">Task List</a></li>
                        <li><a href="<?php echo base_url("Sheet/Notes");?>">Notes</a></li>
                        <li><a href="<?php echo base_url("Sheet/Blog");?>">Blog</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url("Home");?>">My Sheet</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url("Settings");?>">Settings</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url("Signout");?>">Sign Out</a></li>
            </ul>
        </div>
 
        <span class="element-divider"></span>
        <a class="element brand" href="#"><span class="icon-spin"></span></a>
        <a class="element brand" href="#"><span class="icon-printer"></span></a>
        <span class="element-divider"></span>
 
        <div class="element input-element">
            <form>
                <div class="input-control text">
                    <input type="text" placeholder="Search...">
                    <button class="btn-search"></button>
                </div>
            </form>
        </div>

        <span class="element-divider place-right"></span>
        <div class="place-right element">
            <a class="dropdown-toggle" href="#"><i class="icon-cog"></i></a>
            <ul class="dropdown-menu place-right" data-role="dropdown">
                <li><a href="#">Feedback</a></li>
                <li><a href="<?php echo base_url("Home");?>">Support</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url("Settings");?>">Settings</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo base_url("Signout");?>">Sign Out</a></li>
            </ul>
        </div>
        <button class="element image-button image-left place-right">
            Sergey Pimenov
            <img src=""/>
        </button> 
    </nav>
</nav>