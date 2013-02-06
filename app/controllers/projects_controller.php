<?php
class ProjectsController extends AppController {

	var $name = 'Projects';
       var $helpers = array('Html', 'Form', 'Javascript');
    var $uses = array('Product','Category','Sector','Brand','Application','Weight','Project');
    //var $components = array('Session', 'Auth');
    var $layout = 'default';
    //var $paginate = array('limit' => 10);
        
        
        function get_project()
    {
       return $this->find('all');
    }
    
function index($i)
{
    
    $sec = $this->Sector->get_sector();
     	
     	foreach($sec as $sector){
     		$secs[$sector['Sector']['name']] = $sector['Sector']['name'];
     	}
     	$this->set('secs',$secs);
        
        $sector = $this->Sector->find('all');
        $this->set('sector', $sector);
        
        $wei =$this->Weight->get_weight();
     	
     	foreach($wei as $weight){
     		$weis[$weight['Weight']['name']] = $weight['Weight']['name'];
     	}
     	$this->set('weis',$weis);
        $app = $this->Application->get_application();
     	
     	foreach($app as $application){
     		$apps[$application['Application']['name']] = $application['Application']['name'];
     	}
     	$this->set('apps',$apps);
        
        $category = $this->Category->find('all');
        $this->set('category', $category);
        
        
        
        $projects = $this->Project->findById($i);
        $this->set('projects', $projects);

}


}
?>