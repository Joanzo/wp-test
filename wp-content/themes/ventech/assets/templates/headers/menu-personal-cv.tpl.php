
<nav class="mega-menu mega-responsive primary-menu">
    <ul class="mega-ul">
        <li id="menu-home" class="mega-li">
            <a href="#" class="mega-link" data-scroll-to="body" >
                <span class="mega-text">
                    Home
                </span>
            </a>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-about" class="mega-li">
            <a href="#" class="mega-link" data-scroll-to="#section-about">
                <span class="mega-text">
                    About
                </span>
            </a>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-services" class="mega-li">
            <a href="#" class="mega-link"  data-scroll-to="#section-services" data-offset="-60">
                <span class="mega-text">
                    Services
                </span>
            </a>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-portfolio" class="mega-li">
            <a href="#" class="mega-link"  data-scroll-to="#section-portfolio"  data-offset="-60">
                <span class="mega-text">
                    Portfolio
                </span>
            </a>
        </li>
        <?php
        if(!$menu_vertical){
            ?>
            <li class="mega-li visible-lg">
                <span class="mega-link">
                    &middot;
                </span>
            </li>
            <?php
        }?>
        <li id="menu-contact" class="mega-li">
            <a href="#" class="mega-link" data-scroll-to="#section-contact"  data-offset="-60">
                <span class="mega-text">
                    Contact
                </span>
            </a>
        </li>
        <li class="mega-li">
            <a href="index.php" class="mega-link" data-rel="translink" >
                <span class="mega-text">
                    <i class="fa fa-level-up mgl-5 mgr-5">
                    </i>
                </span>
            </a>
        </li>  
    </ul>
</nav>

<!-- mega-menu -->