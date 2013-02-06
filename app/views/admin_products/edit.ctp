<?php
//pr($book);
//pr($bookDetail);

$id = $product['Product']['id'];
$title = $product['Product']['title'];
$brand = $product['Product']['brand'];
$weight = $product['Product']['weight'];
$category = $product['Product']['category'];
$application = $product['Product']['application'];
$applications = explode(',',$application);
$sector = $product['Product']['sector'];
//$prices = $book['Book']['price'];
$sectors=explode(',',$sector);
//$bookBuyLink = $book['Book']['book_buy_link'];
$producturl = $product['Product']['product_url'];
//$tags = $book['Book']['tags'];
$images = $product['Product']['image'];
//$display = $book['Book']['display_home'];


//$detailId = $bookDetail['BookDetail']['id'];
//$dimension = $bookDetail['BookDetail']['dimensions'];
//$pages = $bookDetail['BookDetail']['pages'];
//$bookbound = $bookDetail['BookDetail']['bookbound'];
//$illustrations = $bookDetail['BookDetail']['illustrations'];
//$highlight = $bookDetail['BookDetail']['highlight'];
//$description = $bookDetail['BookDetail']['description'];
//$content = $bookDetail['BookDetail']['content'];
//$authorDetail=$bookDetail['BookDetail']['author_detail'];
$image = explode(',', $images);
//pr($image);
?>

<div id="category_main" class="box">
    <div id="category_header" class="heading">
        <h1>Edit Product</h1>
         <div class="buttons">
                    <a onclick="BookEditForm.submit()">Save</a>
            <?php echo $this->Html->link('Cancel', array('controller' => 'admin_products', 'action' => 'index')); ?>
        </div>
    </div>

    <div class="content">
        <?php echo $this->Form->create(null, array('name'=>'BookEditForm','url' => array('controller' => 'admin_products', 'action' => 'edit',), 'enctype' => 'multipart/form-data')); ?>
        <?php
        echo $this->Form->input('id', array('value' => $id, 'type' => 'hidden'));
       // echo $this->Form->input('BookDetail.id', array('value' => $detailId, 'type' => 'hidden'));
        ?>
           <div class="htabs" id="tabs">
    <a tab="#tab_book" class="selected">Product</a>
    
    <a tab="#tab_images" class="">Image</a>
</div>
        <div id="tab_book">
        <table class=form >
            <tr>
                <td>Title</td>
                <td>
                    <?php echo $this->Form->input('title', array('label' => false, 'value' => $title)); ?>
                </td>
            </tr>
           
             
          
            <tr>
                <td>Category</td>
                <td>
                    <?php echo $this->Form->input('category', array('options' => $cats, 'label' => false, 'value' => $category)); ?>
                </td>
            </tr>
            <tr>
                <td>Brand</td>
                <td>
                    <?php echo $this->Form->input('brand', array('options' => $bras, 'label' => false, 'value' => $brand)); ?>
                </td>
            </tr>
            <tr>
                <td>Weight</td>
                <td>
                    <?php echo $this->Form->input('weight', array('options' => $weis, 'label' => false, 'value' => $weight)); ?>
                </td>
            </tr>
            <tr>
                <td>Application</td>
                <td>
                    <?php echo $this->Form->input('application', array('options' => $apps,'multiple'=>'multiple', 'size' => 10, 'label' => false, 'value' => $applications)); ?>
                </td>
            </tr>
            
            
            
                   <tr>
                <td>sector</td>
                <td> 
                    <?php echo $this->Form->input('sector', array('options' => $secs,'multiple'=>'multiple', 'size' => 10,'label' => false, 'value' => $sectors)); ?>
                  
                    
                     </td>
            </tr>
           
           <!--
                        UK  £<?php echo $this->Form->input('UK', array( 'value' => $price[0],'class'=>'price','div'=>false,'label' => false)); ?> <br/>
                        US  $<?php echo $this->Form->input('US', array( 'value' => $price[1],'class'=>'price','div'=>false,'label' => false)); ?><br/>
                        EU  €<?php echo $this->Form->input('EU', array( 'value' => $price[2],'class'=>'price','div'=>false,'label' => false)); ?><br/>
                        IN Rs<?php echo $this->Form->input('IN', array( 'value' => $price[3],'class'=>'price','div'=>false,'label' => false)); ?>
                        
             -->     
          
            

        
            
            
           
            
            

        </table>
        </div>
    

        <div id="tab_images">
            <table>
            <tr>
                <td> <?php echo $this->Form->label('Product Photo'); ?> </td>
                <td><?php
                    echo $this->Html->image('products/' . $producturl . "/" . $image[0]);
                    if (!empty($images)) {
                        echo "<br />";
                        echo "<br />";
                        echo "<br />";
                        echo "<br />";
                        echo "<br />";
                        
                        echo $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image1');
                    ?> </td>
            </tr>
           
             <tr>
                <td> <?php echo $this->Form->label('Thumbnail Phpto'); ?></td>
                <td>  <?php
                    echo $this->Html->image('products/' . $producturl . "/" . $image[1]);
                    if (!empty($image[1])) {
                        echo $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image2'); ?> </td>
            </tr>
            
            
            
            
             <div style="display:none">  
          
              <?php  $this->Form->label('Photo 1'); ?>              
 <?php
                   $this->Html->image('products/' . $producturl . "/" . $image[1]);
                    if (!empty($image[1])) {
                      $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image2'); ?> 
        
               <?php $this->Form->label('Photo 2'); ?>
                 <?php
                    $this->Html->image('products/' . $producturl . "/" . $image[2]);
                    if (!empty($image[2])) {
                         $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image3'); ?> 
            
            
                 <?php $this->Form->label('Photo 3'); ?> 
                 <?php
                     $this->Html->image('products/' . $producturl . "/" . $image[3]);
                    if (!empty($image[3])) {
                         $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image4'); ?> 
            
            
                 <?php  $this->Form->label('Photo 4'); ?> 
                <?php
                    $this->Html->image('products/' . $producturl . "/" . $image[4]);
                    if (!empty($image[4])) {
                         $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image5'); ?> 
            
</div>

            </table>
            </div>
  <script type="text/javascript"><!--
$.tabs('#tabs a');
//--></script>
<?php echo $this->Form->end();?>
</div>
</div>








<!--



 <tr>
                <td> <?php echo $this->Form->label('Photo 1'); ?></td>
                <td>  <?php
                    echo $this->Html->image('products/' . $producturl . "/" . $image[1]);
                    if (!empty($image[1])) {
                        echo $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image2'); ?> </td>
            </tr>
            <tr>
                <td> <?php echo $this->Form->label('Photo 2'); ?> </td>
                <td> <?php
                    echo $this->Html->image('products/' . $producturl . "/" . $image[2]);
                    if (!empty($image[2])) {
                        echo $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image3'); ?> </td>
            </tr>
            <tr>
                <td> <?php echo $this->Form->label('Photo 3'); ?> </td>
                <td> <?php
                    echo $this->Html->image('products/' . $producturl . "/" . $image[3]);
                    if (!empty($image[3])) {
                        echo $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image4'); ?> </td>
            </tr>
            <tr>
                <td> <?php echo $this->Form->label('Photo 4'); ?> </td>
                <td> <?php
                    echo $this->Html->image('products/' . $producturl . "/" . $image[4]);
                    if (!empty($image[4])) {
                        echo $this->Form->label('Replace');
                    }
                    echo $this->Form->file('Product.image5'); ?> </td>
            </tr>
-->