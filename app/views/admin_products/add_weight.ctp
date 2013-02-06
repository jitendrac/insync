<script type="text/javascript"><!--
$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$('#add-weight').colorbox({inline:true,href:"#category-box"});

});
//--></script>

<div class="box">
    <div class="heading">
        <h1>Weight</h1>
        <div class="buttons">

            <a href="#" id="add-weight"> add </a>
    </div></div>

    <div class="content">
        <table id="candidatetable"class="list">
            <thead>
                <tr>
                    <td class="left">Weight</td>
                    <td class="right">Edit</td>
                    <td class="right">Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($weis as $id => $wei) {
                ?>
                    <tr>
                        <td class="left"> <?php echo $wei ?></td>
                        <td class="right"><?php echo $this->Html->link('Edit', array('controller' => 'admin_products', 'action' => 'edit_weight', $id)); ?></td>
                        <td class="right"><?php echo $this->Html->link('Delete', array('controller' => 'admin_products', 'action' => 'delete_weight', $id)); ?> </td>
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
                echo $this->Form->create(null, array('url' => array('controller' => 'admin_products', 'action' => 'add_weight',), 'enctype' => 'multipart/form-data'));
?>
                <table class="form">
                    <tr>
                        <td>New Weight </td>
                        <td> <?php
                echo $this->Form->input('newweight', array('label' => false, 'div' => false));
                echo $this->Form->end(array('label' => 'Add', 'value' => 'add', 'div' => false));
?> </td>
    </tr>
</table>
</div>
</div>
 

