<script type="text/javascript"><!--
$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$('#add-brand').colorbox({inline:true,href:"#category-box"});

});
//--></script>

<div class="box">
    <div class="heading">
        <h1>Brands</h1>
        <div class="buttons">

            <a href="#" id="add-brand"> add </a>
    </div></div>

    <div class="content">
        <table id="candidatetable"class="list">
            <thead>
                <tr>
                    <td class="left">Brand</td>
                    <td class="right">Edit</td>
                    <td class="right">Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($bras as $id => $bra) {
                ?>
                    <tr>
                        <td class="left"> <?php echo $bra ?></td>
                        <td class="right"><?php echo $this->Html->link('Edit', array('controller' => 'admin_products', 'action' => 'edit_brand', $id)); ?></td>
                        <td class="right"><?php echo $this->Html->link('Delete', array('controller' => 'admin_products', 'action' => 'delete_brand', $id)); ?> </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<div style="display:none">
<div id="category-box">
<?php
                echo $this->Form->create(null, array('url' => array('controller' => 'admin_products', 'action' => 'add_brand',), 'enctype' => 'multipart/form-data'));
?>
                <table class="form">
                    <tr>
                        <td>New Brand </td>
                        <td> <?php
                echo $this->Form->input('newbrand', array('label' => false, 'div' => false));
                echo $this->Form->end(array('label' => 'Add', 'value' => 'add', 'div' => false));
?> </td>
    </tr>
</table>
</div>
</div>
 


