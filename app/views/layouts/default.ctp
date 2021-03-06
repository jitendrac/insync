<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>Insync
            <?php echo $title_for_layout; ?></title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('main');
        echo $this->Html->css('reset');
        echo $this->Html->css('superfish');
        echo $this->Html->script('http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js');
        echo $this->Html->script('jquery-1.4.2.min.js');
        echo $this->Html->script('superfish.js');
        echo $this->Html->script('jquery.bxSlider.min.js');

        echo $this->Html->script('jquery.colorbox-min.js');
        echo $this->Html->script('jquery.colorbox.js');
        echo $this->Html->css('colorbox');
        echo $this->Html->css('tab.css');
        echo $this->Html->script('http://code.jquery.com/ui/1.9.1/jquery-ui.js');

        ?>
   
   
   
   <script>
   $(document).ready(function() {

	$(".tab_content").hide();
	$(".tab_content:first").show(); 

	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active");
		$(this).addClass("active");
		$(".tab_content").hide();
		var activeTab = $(this).attr("rel"); 
		$("#"+activeTab).fadeIn(); 
	});
});
  
  
    </script>



        <script>

            $(document).ready(function(){
                $("ul.sf-menu").superfish();
                $('#slider1').bxSlider({auto:true});
            });


        </script>
    </head>
    <body>
        <div id="container" class="grad" >

            <div id=header>
                <div id=logo>
                    <?php echo $this->Html->link($this->Html->image('logo.png', array('alt' => 'logo')),array('controller' => 'indexs', 'action' => 'index'),array('escape' => false)); ?>

                </div>
                <div id="logo-bg">
                    <?php echo $this->Html->image('triangle.png', array('alt' => 'logo-bg')); ?>
                </div>
                <div id="nav">
                    <div id="top-links">
                        <ul>
                            <li><?php echo $this->Html->link('Home', array('controller' => 'indexs', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('News', array('controller' => 'indexs', 'action' => 'news'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('Blog', array('controller' => 'indexs', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('Careers', array('controller' => 'indexs', 'action' => 'careers'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('Contact', array('controller' => 'indexs', 'action' => 'contact'), array('escape' => false)); ?></li>

                        </ul>
                    </div>
                    <div id="main-links">
                        <ul class="sf-menu">
                            <li> <?php echo $this->Html->link('Shop Fitting Systems', array('escape' => false,'controller' => 'products', 'action' => 'index'), array("class" => "current")); ?>

                                <ul>
                                    <li><?php echo $this->Html->link('Syntrack', array('controller' => 'products', 'action' => 'sytrack'), array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('Rail', array('controller' => 'products', 'action' => 'rail'), array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('T 40', array('controller' => 'products', 'action' => 't40'), array('escape' => false)); ?></li>
                                    <li><?php echo $this->Html->link('P 40', array('controller' => 'products', 'action' => 'post40'), array('escape' => false)); ?></a></li>
                                    <li><?php echo $this->Html->link('Safe Retail', array('controller' => 'products', 'action' => 'saferetail'), array('escape' => false)); ?></a></li>
                                </ul>
                            </li>
                            <li><?php echo $this->Html->link('Projects', array('controller' => 'indexs', 'action' => 'projects'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('Virtual Showroom', array('controller' => 'indexs', 'action' => 'index'), array('escape' => false)); ?></li>
                            <li><?php echo $this->Html->link('Safe Group', array('controller' => 'indexs', 'action' => 'company'), array('escape' => false)); ?></li>


                            <li>
                                <?php echo $this->Html->image('partner-pink.png', array('alt' => 'partner with us', 'url' => array('controller' => 'indexs', 'action' => 'company'))); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="safe-logo">
                    <?php echo $this->Html->image('safe-logo.png', array('alt' => 'safe group')); ?>
                </div>
            </div>

            <div id=wrapper >

                <?php echo $this->Session->flash(); ?>

                <?php echo $content_for_layout; ?>



                <div id="footer">
                        
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </body>
</html>