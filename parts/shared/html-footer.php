
<!-- File Calls -->
<?php wp_footer(); ?>

<!-- Custom JavaScript -->
<script type="text/javascript">
	jQuery(function($){
        $('#camera_wrap_1').camera({
            transPeriod: 500,
            time: 3000,
            height: '490px',
            thumbnails: false,
            pagination: true,
            playPause: false,
            loader: false,
            navigation: false,
            hover: false
        });
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 750, // Integer. How fast to complete the scroll in milliseconds
            offset: 0, // Integer or Function returning an integer. How far to offset the scrolling anchor location in pixels
            easing: 'easeInOutCubic', // Easing pattern to use
        });
	});
</script>

<!-- Google Tag Manager -->
<script type="text/javascript">
    (function(w,d,s,l,i){
        w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N92N8G5');
</script>
<!-- End Google Tag Manager -->

<script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-9137591-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>

<script type="text/javascript">
    jQuery(document).ready(function($){
        $(".bhide").click(function(){
            $(".hideObj").slideDown();
            $(this).hide(); //.attr()
            return false;
        });
        $(".bhide2").click(function(){
            $(".container.hideObj2").slideDown();
            $(this).hide(); // .attr()
            return false;
        });
            
        $('.heart').mouseover(function(){
            $(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
        }).mouseout(function(){
            $(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
        });
            
        function sdf_FTS(_number,_decimal,_separator) {
            var decimal=(typeof(_decimal)!='undefined')?_decimal:2;
            var separator=(typeof(_separator)!='undefined')?_separator:'';
            var r=parseFloat(_number)
            var exp10=Math.pow(10,decimal);
            r=Math.round(r*exp10)/exp10;
            rr=Number(r).toFixed(decimal).toString().split('.');
            b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);
            r=(rr[1]?b+'.'+rr[1]:b);
            return r;
        }
            
        setTimeout(function(){
            $('#counter').text('0');
            $('#counter1').text('0');
            $('#counter2').text('0');
            setInterval(function(){
                var curval=parseInt($('#counter').text());
                var curval1=parseInt($('#counter1').text().replace(' ',''));
                var curval2=parseInt($('#counter2').text());
                if(curval<=707){
                    $('#counter').text(curval+1);
                }
                if(curval1<=12280){
                    $('#counter1').text(sdf_FTS((curval1+20),0,' '));
                }
                if(curval2<=245){
                    $('#counter2').text(curval2+1);
                }
            }, 2);
        }, 500);
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#menu').slicknav();
    });
</script>

<script type="text/javascript">
    jQuery(document).ready(function($){
        var $menu = $("#menuF");
        $(window).scroll(function(){
            if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("default")
                    .addClass("fixed transbg")
                    .fadeIn('fast');
                });
            } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {
                $menu.fadeOut('fast',function(){
                    $(this).removeClass("fixed transbg")
                    .addClass("default")
                    .fadeIn('fast');
                });
            }
        });
    });
    //jQuery
</script>

<script type="text/javascript">
    /*menu*/
    function calculateScroll() {
        var contentTop      =   [];
        var contentBottom   =   [];
        var winTop      =   $(window).scrollTop();
        var rangeTop    =   200;
        var rangeBottom =   500;
        $('.navmenu').find('a').each(function(){
            contentTop.push( $( $(this).attr('href') ).offset().top );
            contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );
        })
        $.each( contentTop, function(i){
            if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
                $('.navmenu li')
                .removeClass('active')
                .eq(i).addClass('active');				
            }
        })
    };
    
    jQuery(document).ready(function($){
        calculateScroll();
        $(window).scroll(function(event) {
            calculateScroll();
        });
        $('.navmenu ul li a').click(function() {  
            $('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);
            return false;
        });
    });		
</script>	
<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function($){
        $(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
    });
</script>
	
	
<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    /* <![CDATA[ */
        /*var google_conversion_id = 1049069378;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;*/
    /* ]]> */
</script>
<!-- <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1049069378/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
</noscript> -->


</body>

<!-- End of Site -->
</html>