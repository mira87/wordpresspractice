<DOCTYPE html>
    <html>
        <head></head>
        <body>
            <?php wp_head(); ?>

           
            <div class="headerBg2">

                <div class="headerBg">



                    
                    <div class="hamburger"> 
                     <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div> 
                    </div> 


                    <div class="logo"><h1><?php bloginfo('title'); ?></h1>
                        <p><?php bloginfo('description'); ?></p>
                </div>

                    <!-- <div class="face"></div> -->
                </div>
            
            </div>

             <div class="nav-popup">
                
                <div class="close">Close</div>
                <script>
                    var hamburger=document.querySelector('.hamburger');

                    function open(){
                        // alert('hi')
                        popUp.style.display="block"
                    }
                    function close(){
                        // alert('hi')
                        popUp.style.display="none"
                    }
                    var closeButton=document.querySelector('.close');
                    var popUp=document.querySelector('.nav-popup');
hamburger.addEventListener('click', open)
                    closeButton.addEventListener('click',close)
                </script>
                <div class="nav-links"> 
                    <?php
                         $args=array(
                             'theme_location'=>'primary'
                         );

                         wp_nav_menu($args);

                    ?>



                </div>
            </div> 