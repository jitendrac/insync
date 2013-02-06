
<?php //pr($product);  ?>
<script>
$(document).ready(function(){

  var clearMePrevious = "";


  $('.searchInput').focus(function()
  {
  if($(this).val()==$(this).attr('title'))
  {
  clearMePrevious = $(this).val();
  $(this).val("");
  }
  });

  // if field is empty afterward, add text again
  $('.searchInput').blur(function()
  {
  if($(this).val()=="")
  {
  $(this).val($(this).attr('title'));
  }
  });

  $('#searchTitle').change(function(){
      var searchTitle = $('#searchTitle').val();
      $.post("<?php echo Router::url('/', true); ?>ajaxs/search_product/title", {
             value:searchTitle
         },
            function(data){
                var div = '#category_content';
               $(div).html(data);
         });
  });

  $('#searchAuthor').change(function(){
      var searchAuthor = $('#searchAuthor').val();
      $.post("<?php echo Router::url('/', true); ?>ajaxs/search_product/author", {
             value:searchAuthor
         },
            function(data){
                var div = '#category_content';
               $(div).html(data);
         });
  });

  });

</script>


<div class="box">
<div class="heading">
    <h1>Products</h1>
    <div class="buttons">
     
<?php //pr($product);  ?>
            
    
      <?php echo $this->Html->link('Add Product', array('controller' => 'admin_products', 'action' => 'add')); ?>

</div>
</div>

<div class="content" id="category_content">
<table id="candidatetable"class="list">
    <thead>
        <tr>
            <td class="left"><?php echo $this->Paginator->sort('Title', 'title'); ?></td>
            <td class="left"><?php echo $this->Paginator->sort('Category', 'category'); ?></td>
            
            <td class="left"><?php echo $this->Paginator->sort('Brand', 'brand'); ?></td>
              <td class="left"><?php echo $this->Paginator->sort('Weight', 'weight'); ?></td>
             <td class="left"><?php echo $this->Paginator->sort('Application', 'application'); ?></td>
               <td class="left"><?php echo $this->Paginator->sort('Sector', 'sector'); ?></td>
           
            <td class="right">Edit</td>
            <td class="right">Delete</td>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($product as $id=>$value){

            $id=$value['Product']['id'];
            ?>
        
            <tr>
                <td class="left"><?php echo $value['Product']['title']; ?></td>
                 <td class="left"><?php echo $value['Product']['category']; ?></td>
                <td class="left"><?php echo $value['Product']['brand']; ?></td>
                <td class="left"><?php echo $value['Product']['weight']; ?></td>
                <td class="left"><?php echo $value['Product']['application']; ?></td>
                <td class="left"><?php echo $value['Product']['sector']; ?></td>
  
                    
                <td class="right"><?php echo $this->Html->link('Edit ', array('controller' => 'admin_products', 'action' => 'edit',$id));?></td>
                <td class="right"><?php echo $this->Html->link('Delete ', array('controller' => 'admin_products', 'action' => 'delete',$id)); ?> </td>
            </tr>

        <?php
        }
        ?>

             <table class="list">
                        <thead>
                            <tr>
                                <td class="left" width="120px">
                                    
                                </td>
                                <td class="center">



                        <?php
                        echo $paginator->first(' « First  ', null, null, array('class' => 'disabled'));
                        echo $paginator->prev('  Previous  ', null, null, array('class' => 'disabled'));
                        echo $paginator->counter();
                        //echo $paginator->numbers() ;
                        echo $paginator->next('  Next  ', null, null, array('class' => 'disabled'));
                        echo $paginator->last('  Last » ',null,null,array('class'=>'disabled'));
                        
                        ?>


                    </td>
                    <td class="center">
                                    <input type="text" id="searchTitle" name="searchTitle" class="searchInput" title="Search By Title" value="Search By Title" />
                                </td>
                                <td class="center">
                                    <!--
                                    <input type="text" id="searchAuthor" name="searchAuthor" class="searchInput" title="Search By Category" value="Search By Category" />
                                -->
                                    </td>
                    <td class="right" width="150px">
                        Total Products found:<?php echo $paginator->counter(array('format'=>'%count%')); ?>
                    </td>
                </tr>
            </thead>
        </table>

    </table>
</div>
</div>






