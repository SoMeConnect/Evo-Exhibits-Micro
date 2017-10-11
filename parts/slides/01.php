<!--home start-->

<div id="home">
    <?php if(is_page('home')) : ?>
        <div class="headerLine">
            <div id="menuF" class="default">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-4">
                            <div>
                                <a href="#home">
                                    <img src="/wp-content/themes/evo-microsite/assets/images/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="navmenu" style="text-align: center;">
                                <ul id="menu">
                                    <li><a data-scroll href="#exhibits">Exhibits</a></li>
                                    <!--<li><a href="#about">About</a></li>-->
                                    <li><a data-scroll href="#news">Videos</a></li>
                                    <li><a data-scroll href="#contact">Contact</a></li>
                                    <li><a href="https://www.exhibitforce.com/v2/backendv3/welcome_.asp" target="new" id="welcome_">Manage your exhibits</a></li>
                                    <li class="last"><a href="https://www.hightail.com/u/EvoExhibitsCreativeDepartment" target="new">Graphics Upload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row wrap">
                    <div class="col-md-12 gallery"> 
                        <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
                            <div data-thumb="" data-src="/wp-content/themes/evo-microsite/assets/images/slides/blank.gif">
                                <div class="img-responsive camera_caption fadeFromBottom">
                                    <h2 style="font-size: 60px;">Evo Exhibits<br>Discover. Create. <span style="color:#94d60a;">Connect.</span></h2>
                                </div>
                            </div>
                            <div data-thumb="" data-src="/wp-content/themes/evo-microsite/assets/images/slides/blank.gif">
                                <div class="img-responsive camera_caption fadeFromBottom">
                                    <h2 style="font-size: 60px;">The Destination for <span style="color:#94d60a;">Exhibits.</span></h2>
                                </div>
                            </div>
                            <div data-thumb="" data-src="/wp-content/themes/evo-microsite/assets/images/slides/blank.gif">
                                <div class="img-responsive camera_caption fadeFromBottom">
                                    <h2 style="font-size: 60px;">Custom &amp; Rental <span style="color:#94d60a;">Trade Show Solutions.</span></h2>
                                </div>
                            </div>
                        </div><!-- #camera_wrap_1 -->
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="headerLine" style="min-height:200px;">
            <div id="menuF" class="default">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-4">
                            <div>
                                <a href="#home">
                                    <img src="/wp-content/themes/evo-microsite/assets/images/logo.png">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="navmenu" style="text-align: center;">
                                <ul id="menu">
                                    <li><a data-scroll href="/#exhibits">Exhibits</a></li>
                                    <!--<li><a href="/#about">About</a></li>-->
                                    <li><a data-scroll href="/#news">Videos</a></li>
                                    <li><a data-scroll href="/#contact">Contact</a></li>
                                    <li><a href="https://www.exhibitforce.com/v2/backendv3/welcome_.asp" target="new" id="welcome_">Manage your exhibits</a></li>
                                    <li class="last"><a href="https://www.hightail.com/u/EvoExhibitsCreativeDepartment" target="new">Graphics Upload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(is_page('home')) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 cBusiness">
                    <h3><strong>Picture a partner</strong> who helps you build stronger,<br>
                    more meaningful relationships with your customers.</h3>
                    <h4>When you partner with Evo Exhibits, you can exhibit on brand, on time, and on budget.  <strong>It’s that simple.</strong></h4>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 centPic">
                    <img class="img-responsive"  src="/wp-content/themes/evo-microsite/assets/images/bizPic_Evo.png"/>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 cBusiness text-center">
                    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>    
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>
