<script type="text/javascript"><!--
$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$('#add-sector').colorbox({inline:true,href:"#category-box"});

});
//--></script>

<div class="box">
    <div class="heading">
        <h1>Sectors</h1>
        <div class="buttons">

            <a href="#" id="add-sector"> add </a>
    </div></div>

    <div class="content">
        <table id="candidatetable"class="list">
            <thead>
                <tr>
                    <td class="left">Sector</td>
                    <td class="right">Edit</td>
                    <td class="right">Delete</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($secs as $id => $sec) {
                ?>
                    <tr>
                        <td class="left"> <?php echo $sec ?></td>
                        <td class="right"><?php echo $this->Html->link('Edit', array('controller' => 'admin_products', 'action' => 'edit_sector', $id)); ?></td>
                        <td class="right"><?php echo $this->Html->link('Delete', array('controller' => 'admin_products', 'action' => 'delete_sector', $id)); ?> </td>
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
                echo $this->Form->create(null, array('url' => array('controller' => 'admin_products', 'action' => 'add_sector',), 'enctype' => 'multipart/form-data'));
?>
                <table class="form">
                    <tr>
                        <td>New Sector </td>
                        <td> <?php
                echo $this->Form->input('newsector', array('label' => false, 'div' => false));
                echo $this->Form->end(array('label' => 'Add', 'value' => 'add', 'div' => false));
?> </td>
    </tr>
</table>
</div>
</div>
 

