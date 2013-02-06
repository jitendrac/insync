<?php
class AjaxsController extends AppController {

    var $name = 'Ajaxs';
    var $helpers = array('Html', 'Form', 'Javascript', 'Ajax');
  var $uses = array('Product','Application','Category','Sector','Weight','Brand','ProductDetail');
    var $layout = 'empty';
    var $paginate = array('limit' => 25);


    function search_product($type=null)
    {

         if ($type != null) {
            if ($type == 'title') {
                $value = $_POST['value'];
                $this->set('product', $this->paginate('Product', array( ' title  like' =>'%'. $value . '%')));
            }
            if ($type == 'author') {
                $value = $_POST['value'];
                $this->set('book', $this->paginate('Book', array( 'author like' =>'%'. $value . '%')));
            }
        }

    }




    function searchuser($type=null) {
        //$this->redirect('https://'.$_SERVER['SERVER_NAME'].$this->here);
        if ($type != null) {
            if ($type == 'name') {
                $value = $_POST['value'];
                $this->set('user', $this->paginate('User', array('status !=' => 'deleted', ' fname  like' =>'%'. $value . '%')));
            }
            if ($type == 'email') {
                $value = $_POST['value'];
                $this->set('user', $this->paginate('User', array('status !=' => 'deleted', 'email like' => '%'.$value . '%')));
            }
        }
    }

    function searchdeal($type=null) {
        if ($type != null) {
            if ($type == 'name') {
                $value = $_POST['value'];
                $this->set('retailer',$this->Retailer->find('all',array('conditions'=>array('status'=>'active'))));
                $this->set('deal', $this->paginate('Deal', array('status !=' => 'deleted', ' name  like' =>'%'. $value . '%')));
            }
            if ($type == 'retailer') {
                $value = $_POST['value'];
                $retailer=$this->Retailer->find('all',array('conditions'=>array('name like'=>'%'.$value.'%')));
                $count =count( $retailer);
                if($count >0){
                    foreach($retailer as $retail){
                        $retId[] = $retail['Retailer']['id'];
                    }
                    
                }
                if(isset($retId)){
                $this->set('deal', $this->paginate('Deal', array('status !=' => 'deleted', 'retailer_id' => $retId)));}
                
                $this->set('retailer',$this->Retailer->find('all',array('conditions'=>array('status'=>'active'))));
                
            }
        }
    }
    function searchretailer($type=null) {
        if ($type != null) {
            if ($type == 'name') {
                $value = $_POST['value'];
                $this->set('retailer', $this->paginate('Retailer', array('status !=' => 'deleted', ' name  like' =>'%'. $value . '%')));
            }
            if ($type == 'email') {
                $value = $_POST['value'];
                $this->set('retailer', $this->paginate('Retailer', array('status !=' => 'deleted', 'email like' =>'%'. $value . '%')));
            }
        }
    }
    function searchclient($type=null) {
        if ($type != null) {
            if ($type == 'name') {
                $value = $_POST['value'];
                $this->set('client', $this->paginate('Client', array('status !=' => 'deleted', ' name  like' =>'%'. $value . '%')));
            }
            if ($type == 'email') {
                $value = $_POST['value'];
                $this->set('client', $this->paginate('Client', array('status !=' => 'deleted', 'email like' =>'%'. $value . '%')));
            }
        }
    }
}

?>
