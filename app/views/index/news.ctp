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
            <h1>News</h1>
    </div>
        <div class='series-product'>
        
            <?php
            
            //pr($news);
            foreach ($news as $n)
                {
               echo "<div class='news'>";
               echo "<div class='news-date'>";
               echo $n['News']['date'];
               echo "</div>";
               echo "<div class='news-title'>";
               
               echo $n['News']['title'];
               echo "</div>";
               echo "<div class='news-text'>";
              echo $n['News']['content'];
              
              echo $this->Html->image('logo.png');
               echo "</div>";
               echo "</div>";
            }
            
            ?>

     </div>
</div>
     <div class="sidebar">

        <?php echo $this->element('fixture'); ?>





</div>


<div class="clear"></div>
