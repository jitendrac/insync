<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ProductDetail extends AppModel{
    var $name='ProductDetail';


     var $validate = array(
        'pages' => array(
            'rule' => 'notEmpty',
            'message' => 'This field cannot be left blank'
        ));

     
}

?>