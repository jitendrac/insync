
<div class="side-nav">

            <h1> Product Category </h1>
             <?php
        echo "<ul>";



             //pr($products);
            // $resultCount = count($products);


           foreach ($category as $cat) {
               
              // pr($cat);
               if($cat['Category']['subcategory']==null){
            echo "<li>";
            echo $this->Html->link($cat['Category']['category'], array('controller' => 'products', 'action' => 'index', $cat['Category']['id']), array('update' => 'content'));
            echo "</li>";
               }
               else
               {
                   echo "<li>";
            echo $this->Html->link($cat['Category']['subcategory'], array('controller' => 'products', 'action' => 'index', $cat['Category']['id']), array('update' => 'content'));
            echo "</li>";
               }

        }
        echo "</ul>";
        ?>




        </div>
<div class="content">
   
      
<div class="content-header">
        <h1>Careers</h1>
    </div>
     <div id="career-image">
            <?php echo $this->Html->image('careers.jpg',array('alt'=>'careers')); ?>
        </div>
    <div class="content-text">
       
       <p>
            We are always looking for keen and motivated people at all stages of their careers to join our team. We would be happy to hear from you. Please either respond specifically to one of our job vacancies or mail your CV at <b>info[at]insyncrpm.com</b> for future opportunities.
        </p>
    </div>





     
</div>
     <div class="sidebar">

        <?php echo $this->element('fixture'); ?>





</div>


<div class="clear"></div> 