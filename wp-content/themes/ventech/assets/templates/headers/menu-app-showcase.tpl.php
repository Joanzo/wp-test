
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
        <li id="menu-overview" class="mega-li">
            <a href="#" class="mega-link" data-scroll-to="#section-overview">
                <span class="mega-text">
                    Overview
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
        <li id="menu-features" class="mega-li">
            <a href="#" class="mega-link"  data-scroll-to="#section-features" data-offset="-60">
                <span class="mega-text">
                    Features
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
        <li id="menu-testimonial" class="mega-li">
            <a href="#" class="mega-link"  data-scroll-to="#section-testimonial"  data-offset="-60">
                <span class="mega-text">
                    Testimonial
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
        <li id="menu-offer" class="mega-li">
            <a href="#" class="mega-link" data-scroll-to="#section-download"  data-offset="-60">
                <span class="mega-text">
                    Download
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