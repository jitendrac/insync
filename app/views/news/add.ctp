
<?php echo $this->Html->script('ckedit/ckeditor'); ?>
<div id="category_main" class="box">
    <div id="category_header" class="heading">
        <h1>Add New News</h1>
        <div class="buttons">
            <a onclick="NewsAddForm.submit()">Save</a>
            <?php echo $this->Html->link('Cancel', array('controller' => 'admin_products', 'action' => 'index')); ?>
        </div>
    </div>

    <div class="content">
        <div class="htabs" id="tabs">
            <a tab="#tab_book" class="selected">Product</a>
           
           
        </div>
        <?php //pr($secs);
        echo $this->Form->create(null, array('name' => 'NewsAddForm', 'url' => array('controller' => 'news', 'action' => 'add',), 'enctype' => 'multipart/form-data')); ?>
            <div id="tab_book" style="display: block">
                <table class=form >
                    <tr>
                        <td>News Title</td>
                        <td>
                       <?php echo $this->Form->input('title', array('label' => false)); ?>
                    </td>
                </tr>
                
                
                <tr>
                    <td>Content</td>
                    <td>
                  <?php echo $this->Form->textarea('content', array('id'=>"editor1",'label' => false)); ?>
                      
                    </td>
                </tr>
             
                
                 
                
                
               
               
               
                
                
            </table>
        </div>


       

        <div id="tab_images">
            <table>
                <tr>
                    <td> <?php echo $this->Form->label('News Image'); ?> </td>
                    <td> <?php echo $this->Form->file('News.image1'); ?> </td>
                </tr>
          

                <tr>
                    
                     <td> <?php echo $this->Form->label('News Image 2'); ?> </td>
                     <td><?php echo $this->Form->file('News.image2'); ?> </td>
                </tr>
                <tr>
                    
                     <td> <?php echo $this->Form->label('News Image 3'); ?> </td>
                     <td><?php echo $this->Form->file('News.image3'); ?> </td>
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

<script type="text/javascript">
    CKEDITOR.replace( 'editor1');
    
</script>