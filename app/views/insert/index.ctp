

<?php
 echo $this->Form->create('Insert', array('url' => array('controller' => 'inserts', 'action' => 'index',), 'enctype' => 'multipart/form-data'));
?>
<div>
    <h2>Add new Product</h2>
    <ul>
        
        </li>
        <li>
            
            <label>sector</label>
            
            <?php
            pr($sector_selected);
            pr($sec_name);
            pr($products);
            
            //echo "$sector_selected";
            echo $this->Form->select('sector', $secs, '1', array('div' => 'formfield', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
            ?>
        </li>
        <li>
            <label>Application</label>
            <?php
            echo $this->Form->select('application', $apps, '1', array('div' => 'formfield', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
            ?>
        </li>
        
        
         <li>
            <label>Weight</label>
            <?php
            echo $this->Form->select('weight', $weis, '1', array('div' => 'formfield', 'error' => array(
                    'wrap' => 'div',
                    'class' => 'formerror'
                    )));
            ?>
        </li>
        
       
     
        
            <?php
            echo $this->Form->end('submit');
            ?>


        
    </ul>
</div>

