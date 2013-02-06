<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php __('Insync'); ?>
            <?php echo $title_for_layout; ?>
        </title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <?php
        echo $scripts_for_layout;
        echo $this->Html->meta('icon');
        echo $this->Html->css('admin');
        echo $this->Html->css('colorbox');
        echo $this->Html->css('ui-lightness/jquery-ui-1.8.6.custom.css');
        echo $this->Html->script('jquery-1.4.2.min');
        echo $this->Html->script('jquery-ui-1.8.6.custom.min');
        echo $this->Html->script('countdown');
        echo $this->Html->script('tab');
        echo $this->Html->script('jquery.colorbox.js');
        echo $this->Html->script('superfish');
        
        
        
         
        ?>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="div1">
                    <?php echo '<h5> Insync Admin Panel</h5>'; ?>
                </div>

                <?php if ($session->read('Auth.Admin.name')) {
                    ?>
                    <div class="div2">
                        <?php echo $this->Html->image('lock.png', array('style' => 'position: relative; top: 3px;'));
                        echo "  " . $session->read('Auth.Admin.name') . ',You have logged in as Admin'; ?>
                    </div>
                    <?php
                }
                ?>
            </div>

            <?php if ($session->read('Auth.Admin.name')) {
                ?>





                <div id="menu">
                    <ul class="nav left sf-js-enabled" id = 'nav'>
                        <li><?php echo $this->Html->link('Products', array('controller' => 'admin_products', 'action' => 'index'), array('escape' => false, 'class' => 'top')); ?>
                        </li>
                        
                        <li><?php echo $this->Html->link('Categories', array('controller' => 'admin_products', 'action' => 'add_category'), array('escape' => false, 'class' => 'top')); ?>
                        </li>
                        <li><?php echo $this->Html->link('Brands', array('controller' => 'admin_products', 'action' => 'add_brand'), array('escape' => false, 'class' => 'top')); ?>
                        </li>
                        <li><?php echo $this->Html->link('Weights', array('controller' => 'admin_products', 'action' => 'add_weight'), array('escape' => false, 'class' => 'top')); ?>
                        </li>
                        <li><?php echo $this->Html->link('Applications', array('controller' => 'admin_products', 'action' => 'add_application'), array('escape' => false, 'class' => 'top')); ?>
                        </li>
                        <li><?php echo $this->Html->link('Sectors', array('controller' => 'admin_products', 'action' => 'add_sector'), array('escape' => false, 'class' => 'top')); ?>
                        </li>
                        <!--
                        <li><?php echo $this->Html->link('Clients', array('controller' => 'clients', 'action' => 'index'), array('escape' => false, 'class' => 'top')); ?>
                        </li>
                        <li> <?php echo $this->Html->link('Offers', array('controller' => 'admin_books', 'action' => 'offer'), array('escape' => false, 'class' => 'top')); ?> 
                        </li>
                        <li> <?php echo $this->Html->link('Free Stuff', array('controller' => 'free_books', 'action' => 'free'), array('escape' => false, 'class' => 'top')); ?> 
                        </li>
                        -->
                        <li id="catalog" class=""><a class="top" style="cursor:pointer">Settings</a> <?php //echo $this->Html->link('Settings', array('controller' => 'admins', 'action' => 'settings'), array('escape' => false, 'class' => 'top'));      ?>
                            <ul>
                                <li><?php echo $this->Html->link('Change password', array('controller' => 'admins', 'action' => 'resetpassword'), array('escape' => false)); ?></li>
                                <li><?php echo $this->Html->link('Add new admin', array('controller' => 'admins', 'action' => 'addadmin'), array('escape' => false)); ?></li>
                            </ul>
                        </li>


                        <li><?php echo $this->Html->link('Logout', array('controller' => 'admins', 'action' => 'logout'), array('escape' => false, 'class' => 'top')); ?></li>
                    </ul>
                </div>
                <script type="text/javascript"><!--
                    $(document).ready(function() {


                        $('#nav').superfish({
                            hoverClass	 : 'sfHover',
                            pathClass	 : 'overideThisToUse',
                            delay		 : 0,
                            animation	 : {height: 'show'},
                            speed		 : 'normal',
                            autoArrows   : false,
                            dropShadows  : false,
                            disableHI	 : false, /* set to true to disable hoverIntent detection */
                            onInit		 : function(){},
                            onBeforeShow : function(){},
                            onShow		 : function(){},
                            onHide		 : function(){}
                        });

                        $('.nav').css('display', 'block');
                    });
                    //--></script>
            <?php } ?>
            <div id="content">
                <div id="error">
                    <?php echo $this->Session->flash(); ?>
                </div>
                <?php echo $content_for_layout; ?>
            </div>
            <div id = "footer">
                <a href = 'http://www.pyxis.co.in'>Pyxis</a>
                © 2012 All Rights Reserved.<br/>
                Version 3.0.0
            </div>
        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>


