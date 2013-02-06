<?php

class IndexsController extends AppController {

    var $name = 'Index';
    var $helpers = array('Html', 'Form', 'Javascript', 'Ajax');
    var $uses = array('Product', 'Application', 'Category', 'Sector', 'Weight', 'Brand', 'ProductDetail', 'Project','News');

    function beforeFilter() {
        
    }

    function index() {

        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function projects($i = '1') {

        $sector = $this->Sector->find('all');
        $this->set('sector', $sector);
        $sector_name = $this->Sector->find('all', array('conditions' => array('Sector.id' => $i)));
        $sec_name = $sector_name[0]['Sector']['name'];
        
        $projects = $this->Project->find('all', array('conditions' => array('Project.sector' => $sec_name)));
        $this->set('projects', $projects);
        $this->set('sector_name', $sector_name);
        $this->set('sec_name', $sec_name);
        $this->set('i', $i);


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function company() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    
	function touchpoints() {
            
              $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
	}
    
    function evolution() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function why_insync() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function team() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function facility() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function showrooms() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function history() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }
    
    function group() {


        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);



        $bra = $this->Brand->get_brand();

        foreach ($bra as $brand) {
            $bras[$brand['Brand']['name']] = $brand['Brand']['name'];
        }
        $this->set('bras', $bras);




        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
    }

    function contact() {
        
    }

    function careers($i =null) {


        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);

        $category = $this->Category->find('all', array('order' => 'id'));
        $this->set('category', $category);

        if ($i != null) {
            $category_name = $this->Category->find('all', array('conditions' => array('Category.id' => $i)));


            $cat_name = $category_name[0]['Category']['category'];

            $products = $this->Product->find('all', array('conditions' => array( 'Product.category' => $cat_name),'order'=>array('Product.title')));
            if (!empty($products)) {
                $this->set('products', $products);
            } else {
                $error = "No products in this category. Please choose another category";
                $this->set('error', $error);
            }
            $this->set('category_name', $category_name);
            $this->set('i', $i);

            $this->set('cat_name', $cat_name);
        } else {
            $error = " Please choose a category from sidebar";
                $this->set('error', $error);
            //$products = $this->Product->find('all', array('order'=>'Product.title', 'limit' => 15));
            //$this->set('products', $products);
        }


    }
    
    function news ($i=null){
    


        $sec = $this->Sector->get_sector();

        foreach ($sec as $sector) {
            $secs[$sector['Sector']['name']] = $sector['Sector']['name'];
        }
        $this->set('secs', $secs);


        $wei = $this->Weight->get_weight();

        foreach ($wei as $weight) {
            $weis[$weight['Weight']['name']] = $weight['Weight']['name'];
        }
        $this->set('weis', $weis);
        $app = $this->Application->get_application();

        foreach ($app as $application) {
            $apps[$application['Application']['name']] = $application['Application']['name'];
        }
        $this->set('apps', $apps);

        $category = $this->Category->find('all', array('order' => 'category'));
        $this->set('category', $category);

        if ($i != null) {
            $category_name = $this->Category->find('all', array('conditions' => array('Category.id' => $i)));


            $cat_name = $category_name[0]['Category']['category'];

            $products = $this->Product->find('all', array('conditions' => array( 'Product.category' => $cat_name),'order'=>array('Product.title')));
            if (!empty($products)) {
                $this->set('products', $products);
            } else {
                $error = "No products in this category. Please choose another category";
                $this->set('error', $error);
            }
            $this->set('category_name', $category_name);
            $this->set('i', $i);

            $this->set('cat_name', $cat_name);
        } else {
            $error = " Please choose a category from sidebar";
                $this->set('error', $error);
            //$products = $this->Product->find('all', array('order'=>'Product.title', 'limit' => 15));
            //$this->set('products', $products);
        }

            $news=$this->News->find('all');
            $this->set('news',$news);
        
    }
}

?>
