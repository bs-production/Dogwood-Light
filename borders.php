<?php

//Update these links for your site
$favicon = '<link rel="icon" href="/core/images/universal/favicon/des-favicon.ico">';

$logo = '<a href="/"><img src="http://placehold.it/350x150" alt="[company]" title="[company]" border="0"></a>';

?>

<!doctype html>
<html>
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>[[title]]</title>
    	<meta name="description" content="[[description]]">
    	<meta name="keywords" content="[[keywords]]">
    	<?php echo $favicon; ?>
    	[[custom_core_v3]]
    </head>
    
    <body>
        <div id="template-wrap">
            <div class="container" id="header">
                <div class="row medium-uncollapse large-collapse" data-equalizer>
                    <div class="large-5 columns" id="logo" data-equalizer-watch>
                    <!-- Show this Logo for tablet and desktop only -->
                        <div class="row hide-for-small " data-equalizer>
                            <div class="medium-7 medium-centered large-12 large-uncentered columns" data-equalizer-watch>
                                <?php echo $logo; ?>
                            </div>
                        </div>
                    <!-- Show this Logo and service area text on mobile only -->
                        <div class="row show-for-small">
                            <div class="small-5 columns">
                                <?php echo $logo; ?>
                            </div>
                            <div class="small-7 columns" id="header-service-area">
                                <p onclick="location.href='/service-area.html';" style="cursor:pointer;">Serving [territory], [major cities 3]</p>
                            </div>
                        </div>   
                    </div><!-- end #logo -->
                    <div class="large-7 columns" id="contact" data-equalizer-watch>
                        <div class="row collapse hide-for-small" id="header-service-wrap"><!-- Hide this Service Area text on mobile -->
                            <div class="medium-9 medium-offset-3 columns" id="header-service-area">
                                <p onclick="location.href='/service-area.html';" style="cursor:pointer;">Serving [territory], [major cities 3]</p>   
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="columns" id="phone">
                                    
                                    <?php 
                                        $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
                                        $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
                                        if($iphone || $android  == true) 
                                        { 
                                        ?>
                                        <a href="tel:<?php echo $phonenumber; ?>" class="phone_link"> 
                                        
                                        <?
                                        }
                                        else 
                                        { ?>
                                        
                                        <a href="/contact-us.html" class="phone_link">
                                    <?php 
                                    }
                                    ?>
                                    
                                    <?php
                                    $times = get_open_time();
                                    if($times or isset($_GET['open']))
                                    {
                                    ?>
                                    
                                    <div class="open-hours">
                                        <p class="today"><?php echo $times['language']; ?></p>
                                    </div>
                                    
                                    <?php
                                    }
                                    ?>
                                    
                                    [phone]
                                </a>
                            </div>
                        </div>
                        <div class="row collapse">
                            <div class="columns" id="header-btn">
                                <a class="button" href="/contact-us.html">or <span>Contact Us Online</span></a>
                            </div>
                        </div>

                    </div><!-- end #contact -->
                </div>
            </div><!-- end #header -->        
            
            <?php
                $superNav = new nav();
                $superNav->superTemplateId = 3;
                $superNav->superMode = 'top';
                $superNav->superItems = array(
                	'Services' => array(
                        'target' => 'services'
                    ),
                    'Our Work' => array(
                        'target' => 'about',
                        'show_about_link' => true
                    ),
                    //Replace With Page ID of Financing Page
                    54980 => array(
                        'grandchildren' => false
                    ),
                    //Replace with Page ID of Reviews Page
                    54983 => array(
                        'grandchildren' => false
                    ),
                    'Service Area' => array(
                        'target' => 'map',
                    ),
                    //Replace with Page ID of Abou Us Page
                    54983 => array(
                        'grandchildren' => false
                    )
                );
                
                echo $superNav->generateSuperMarkup();
                ?>
                        
                        
                        <?php if ($thePage == "index") { ?>
                        
                                <div class="container" id="mm-wrap">
                                    <div class="main-text">
                                        <div class="row">
                                            <div class="columns">
                                                <p class="head">Headline Goes Here<span>Subtext goes here</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container" id="main-slider">
                                        <div class="main-slider-item slide1"></div>
                                        <div class="main-slider-item slide2"></div>
                                        <div class="main-slider-item slide3"></div>
                                    </div><!-- end #main-message -->
                                </div><!-- end #mm-wrap -->
                                
                                <div class="container hide-for-small" id="usp-wrap">
                                    <div class="row">
                                        <div class="columns medium-7 medium-offset-1">
                                            <div class="usp-item">
                                                <p><i class="fa fa-clock-o" aria-hidden="true"></i>We offer 24 Hour Emergency Service</p>
                                            </div>
                                        </div>
                                        <div class="columns medium-4 main-cta">
                                            <a class="button">Contact Us Today!</a>
                                        </div>
                                    </div>
                                </div><!-- end USP section -->

           
                                <div class="container" id="home-content-wrap">

                                                        
                                <?php
                                }
                                elseif ((stristr($thePage,"free-estimate")) || ($isCityPage == true) || (stristr($thePage,"service-area")))
                                {
                                ?>
                                <div class="container" id="page-wrap">
                                    <div class="row">
                                        <div class="columns full-width" id="content-wrap">
                                            
                                <?php
                                }
                                else
                                {
                                ?>
                                <?php
                                if (stristr($thePage,"about-us"))
                                {
                                ?>
                                    <div id="about" class="silo-page-wrap">
                                    
                                <?php
                                }
                                elseif (stristr($thePage,"spray-foam-insulation"))
                                {
                                ?>
                                    <div id="spray-foam" class="silo-page-wrap">
                                <?php
                                }
                                elseif (stristr($thePage,"attic-insulation"))
                                {
                                ?>
                                    <div id="attic-insulation" class="silo-page-wrap">
                                <?php
                                }
                                elseif (stristr($thePage,"ice-damming"))
                                {
                                ?>
                                    <div id="ice-damming" class="silo-page-wrap">
                                <?php
                                }
                                elseif (stristr($thePage,"crawl-space-insulation"))
                                {
                                ?>
                                    <div id="crawl-space-insulation" class="silo-page-wrap">
                                <?php
                                }
                                elseif (stristr($thePage,"home-insulation"))
                                {
                                ?>
                                    <div id="home-insulation" class="silo-page-wrap">
                                            
                                <?php
                                }
                                elseif (stristr($thePage,"windows-doors"))
                                {
                                ?>
                                    <div id="windows-doors" class="silo-page-wrap">
                                <?php
                                }
                                elseif (stristr($thePage,"indoor-air-quality"))
                                {
                                ?>
                                    <div id="indoor-air-quality" class="silo-page-wrap">
                                <?php
                                }
                                elseif (stristr($thePage,"home-energy-evaluation"))
                                {
                                ?>
                                    <div id="home-energy-evaluation" class="silo-page-wrap">
                                                        
                                <?php
                                }
                                elseif (stristr($thePage,"service-area"))
                                {
                                ?>
                                    <div id="territory" class="silo-page-wrap">
                                                            
                                <?php
                                }
                                else
                                {
                                ?>
                                    <div id="about" class="silo-page-wrap">
                                                                
                                <?php
                                }
                                ?>
                                <div class="container" id="silo-header">
                                    <div class="row">
                                        <div class="columns">
                                            <span class="page-title"><?php echo $cmsPageData['page.name']; ?></span>
                                        </div>
                                    </div>
                                </div><!-- end #silo-header -->
                                <div class="container" id="page-wrap">
                                    <div class="row">
                                        <div class="medium-9 medium-push-3 columns body" id="content-wrap">
                                            <?php
                                            }
                                            ?>
                                            [[content]]    
                                        </div>
                                        <?php if (($thePage != "index") && ($thePage != "service-area") && ($isCityPage == 0) && ($thePage != "free-estimate"))
                                        { ?>
                                        <div class="medium-3 medium-pull-9 columns" id="subnav-left">
                                            [[single_silo_nav]]
                                        </div>
                                        <?php
                                        }
                                        ?>
                                                      
                                        <?php if ($thePage != "index") { ?>
                                                    </div>
                                                </div>
                                        <?php
                                        }
                                        ?>
                                    
                                        <?php if (($thePage != "index") && ($thePage != "service-area") && ($isCityPage == 0) && ($thePage != "free-estimate"))
                                        {
                                        ?>
                                                </div><!-- end #silo-page-wrap -->
                                        <?php
                                        }
                                        ?>
        
                                        <?php if (($thePage != "service-area") && ($isCityPage == 0) && ($thePage != "free-estimate") && ($thePage != "index")) { ?>
                                                
                                                    <div class="container home" id="service-area">
                                                        <div class="row">
                                                            <div class="large-5 columns">
                                                                <div id="home-city-list">
                                                                    <h2>our service area</h2>
                                                                    [[city_scroll:50]]
                                                                </div>
                                                            </div>
                                                            <div class="large-7 columns service-map">
                                                                <div id="gmap-wrap" onclick="location.href='/service-area.html';" style="cursor:pointer;">[[service_area_google_map]]</div>
                                                            </div>
                                                        </div>
                                                    </div><!-- end #service-area -->
                                                    
                                                    <?php
                                                    }
                                                    ?>
                                                            
                                                            <div class="container home" id="footer">
                                                                <div class="row" data-equalizer>
                                                                    <div class="large-7 large-push-5 columns" data-equalizer-watch>
                                                                        <div id="footer-links">
                                                                            <?php
                                                                            $superNav = new nav();
                                                                            $superNav->superMode = 'bottom';
                                                                            echo $superNav->generateSuperMarkup();
                                                                            ?>
                                                                            [[social_footer]]
                                                                        </div>
                                                                    </div>
                                                                    <div class="large-5 large-pull-7 columns" data-equalizer-watch>
                                                                        <div id="footer-contact">
                                                                            <a href="/free-estimate.html" id="footer-btn">get a free quote</a>
                                                                            <p class="footer-phone">Or call us at
                                                                                <span><a href="tel:<?php echo $phonenumber; ?>" class="phone_link">[phone]</a></span>
                                                                            </p>
                                                                            <p class="footer-address">
                                                                                &copy; <?php echo(date('Y')); ?> [[display_addresses]]
                                                                            </p>
                                                                            <p>
                                                                                Contractor ID: [license number]
                                                                            </p>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <a id="scrollToTop"><i class="fa fa-arrow-up" aria-hidden="true"></i>Top</a>
                                                        </div>
                                                        
[[custom_core_v3_js]]

<script>
    //For Main Message
     $('#main-slider').slick({
                                autoplay: true,
                                arrows: false,
                                infinite: true,
                                speed: 3000,
                                fade: true,
                                cssEase: 'ease',
                                responsive: [
                                    {
                                      breakpoint: 640,
                                      settings: {
                                        arrows: false
                                      }
                                    }
                                ]
                            });
                            
     //For Before/After Slider
     $('#widget-slider').slick({
                                autoplay: false,
                                dots: true,
                                infinite: true,
                                speed: 500,
                                fade: false,
                                cssEase: 'ease',
                                responsive: [
                                    {
                                      breakpoint: 640,
                                      settings: {
                                        arrows: false
                                      }
                                    }
                                ]
                            });
</script>   
                                                        
                                                    </body>
                                                </html>
