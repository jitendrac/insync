<?php
class InsertsController extends AppController {

    var $name = 'Insert';
    var $helpers = array('Html', 'Form', 'Javascript', 'Ajax');
    var $uses = array('Application','Category','Sector','Weight','Brand','Product');

    function beforeFilter() {
        
     }
     
     
     function query() {
          if (isset($_POST['data']))
          {
              $this->set('sector_selected',$sector_selected);
              $this->set('application_selected',$application_selected);
              $this->set('weight_selected',$weight_selected);



          }
         
     }
     
     function index(){
     	
        
        
        $app = $this->Application->get_application();
     	
     	foreach($app as $application){
     		$apps[$application['Application']['id']] = $application['Application']['name'];
     	}
     	$this->set('apps',$apps);
        
        
        
        $bra = $this->Brand->get_brand();
     	
     	foreach($bra as $brand){
     		$bras[$brand['Brand']['id']] = $brand['Brand']['name'];
     	}
     	$this->set('bras',$bras);
        
        
        
        
        $sec = $this->Sector->get_sector();
     	
     	foreach($sec as $sector){
     		$secs[$sector['Sector']['id']] = $sector['Sector']['name'];
     	}
     	$this->set('secs',$secs);
        
        
        $wei = $this->Weight->get_weight();
     	
     	foreach($wei as $weight){
     		$weis[$weight['Weight']['id']] = $weight['Weight']['name'];
     	}
     	$this->set('weis',$weis);
        
        
        
        
        
     	
     	if (isset($_POST['data'])) {
            
            
            
     	
     		 
                    
                        foreach($this->data['Insert'] as $key=>$value)
     			
                            {
                             $application_selected=$this->data['Insert']['application'];
                              $this->set('application_selected',$application_selected);
                             
                            $products['application']=$this->data['Insert']['application'];
                            
                            }    
                        
                        
                            foreach($this->data['Insert'] as $key=>$value)
     			
                             { 
                                $weight_selected=$this->data['Insert']['weight'];
                                 $this->set('weight_selected',$weight_selected);
                                $products['weight']=$this->data['Insert']['weight'];
                                
                             }
                             
                              foreach($this->data['Insert'] as $key=>$value)
     			
                             { 
                                  $sector_selected=$this->data['Insert']['sector'];
                                  $this->set('sector_selected',$sector_selected);
                                  $products['sector']=$this->data['Insert']['sector'];
                                
                             }
                             
                             
                             
                              $sector_name = $this->Sector->find('all',array('conditions' => array('Sector.id' => $sector_selected)));
                              $sec_name=$sector_name[0]['Sector']['name'];
                               $this->set('sec_name',$sec_name);
                             $application_name = $this->Application->find('all',array('conditions' => array('Application.id' => $application_selected)));
                             $app_name=$application_name[0]['Application']['name']; 
                             $weight_name = $this->Weight->find('all',array('conditions' => array('Weight.id' => $weight_selected)));  
                             $wei_name=$weight_name[0]['Weight']['name'];
                             $products = $this->Product->find('all',array('conditions' => array('Product.application LIKE' =>'%'. $app_name . '%'),'AND' =>array('Product.weight LIKE' => '%'. $wei_name . '%'),'AND' =>array('Product.sector LIKE' => '%'. $sec_name . '%' )));
                $this->set('products',$products);
                        
     		//$this->Product->save($products);
                //die(pr($this->data));
     		
     	}
     }
}
?>