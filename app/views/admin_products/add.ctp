<div id="category_main" class="box">
    <div id="category_header" class="heading">
        <h1>Add New Product</h1>
        <div class="buttons">
            <a onclick="BookAddForm.submit()">Save</a>
            <?php echo $this->Html->link('Cancel', array('controller' => 'admin_products', 'action' => 'index')); ?>
        </div>
    </div>

    <div class="content">
        <div class="htabs" id="tabs">
            <a tab="#tab_book" class="selected">Product</a>
           
           
        </div>
        <?php //pr($secs);
        echo $this->Form->create(null, array('name' => 'BookAddForm', 'url' => array('controller' => 'admin_products', 'action' => 'add',), 'enctype' => 'multipart/form-data')); ?>
            <div id="tab_book" style="display: block">
                <table class=form >
                    <tr>
                        <td>Product Name</td>
                        <td>
                       <?php echo $this->Form->input('title', array('label' => false)); ?>
                    </td>
                </tr>
                
                
                <tr>
                    <td>Category</td>
                    <td>
                          <?php echo $this->Form->select('category', $cats, '1', array('div' => 'formfield', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
                      ?>  
                      
                    </td>
                </tr>
               
                <tr>
                    <td>Brand</td>
                    <td>
                        <?php echo $this->Form->select('brand', $bras, '1', array('div' => 'formfield', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
                      ?>  
                      
                    </td>
                </tr>
                
                 <tr>
                    <td>Application</td>
                    <td>
                        <?php echo $this->Form->select('application', $apps, '1', array('div' => 'formfield','multiple'=>'multiple','size' => 7, 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
                      ?>  
                      
                    </td>
                </tr>
                
                 <tr>
                    <td>Weight</td>
                    <td>
                        <?php  echo $this->Form->select('weight', $weis, $weis['for light items'], array('div' => 'formfield', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
                      ?>  
                      
                    </td>
                </tr>
                
                
                
                    <td>Sector</td>
                    <td>
                        <?php echo $this->Form->select('sector', $secs, '1', array( 'div' => 'formfield','multiple'=>'multiple','size' => 10, 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
                      ?>  
                      
                    </td>
                
                
               
               
               
                
                
            </table>
        </div>


       

        <div id="tab_images">
            <table>
                <tr>
                    <td> <?php echo $this->Form->label('product Photo'); ?> </td>
                    <td> <?php echo $this->Form->file('Product.image1'); ?> </td>
                </tr>
          

                <tr>
                    
                     <td> <?php echo $this->Form->label('Thumbnail Photo'); ?> </td>
                     <td><?php echo $this->Form->file('Product.image2'); ?> </td>
                </tr>
                    
                 <div style="display:none">   
                    
                     <?php echo $this->Form->file('Product.image3'); ?> 
               
                
                    
                     <?php echo $this->Form->file('Product.image4'); ?> 
                
               
                    
                    <<?php echo $this->Form->file('Product.image5'); ?> 
                
              
                </div>
            </table>
        </div>
        <script type="text/javascript"><!--
            $.tabs('#tabs a');
            //--></script>




        <?php echo $this->Form->end(); ?>
    </div>
</div>

