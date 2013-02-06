<?php

class ProductsController extends AppController {

    var $name = "Products";
    //var $scaffold;
    var $helpers = array('Html', 'Form', 'Javascript');
    var $uses = array('Product', 'Category', 'Sector', 'Brand', 'Application', 'Weight', 'Project');
    //var $components = array('Session', 'Auth');
    var $layout = 'default';
    

     // var $paginate = array('limit' => 15,'fields' =>array('Product.brand','Product.title'));
      
      
    function beforeFilter() {
        // $this->Auth->userModel = 'Admin';
        //  $this->Auth->allow('index');
    }

    function index($i =null) {


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
            //$products = $this->Product->find('all', array('order'=>'Product.title', 'limit' => 20));
            //$this->set('products', $products);
        }


    }

    function sytrack($i = null) {


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

            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Syntrack', 'Product.category' => $cat_name),'order'=>array('Product.title')));
            //pr($products);
            $this->paginate = array(
            'conditions' => array('Product.brand' => 'Syntrack','Product.category' => $cat_name),
            'limit' => 6,'order'=>array('Product.title DESC')
        );
        $products = $this->paginate('Product');
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
           $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Syntrack'),'order'=>array('Product.title')));
            $this->paginate = array(
            'conditions' => array('Product.brand' => 'Syntrack'),
            'limit' => 9,'order'=>array('Product.title DESC')
        );
        $products = $this->paginate('Product');
        
            $this->set('products', $products);
        }
    }

    function rail($i = null) {
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

            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Rail', 'Product.category' => $cat_name)));
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
            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Rail'), 'limit' => 10));
            $this->set('products', $products);
        }
    }

    function t40($i = null) {
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

            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'T 40', 'Product.category' => $cat_name)));
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
            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'T 40'), 'limit' => 10));
            $this->set('products', $products);
        }
    }

    function post40($i = null) {
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

            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Post 40', 'Product.category' => $cat_name)));
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
            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Post 40'), 'limit' => 10));
            $this->set('products', $products);
        }
    }

    function saferetail($i = null) {
    	  
        $this->Product->recursive = 0;
        
    	  
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

            //$products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Safe Retail', 'Product.category' => $cat_name)));
            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Safe Retail','Product.category' => $cat_name),'order'=>array('Product.title')));
            $this->paginate = array(
            'conditions' => array('Product.brand' => 'Safe Retail','Product.category' => $cat_name),
            'limit' => 6,'order'=>array('Product.title DESC')
        );
        $products = $this->paginate('Product');
            $this->set('products', $products);
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
            $products = $this->Product->find('all', array('conditions' => array('Product.brand' => 'Safe Retail'),'order'=>array('Product.title')));
            $this->paginate = array(
            'conditions' => array('Product.brand' => 'Safe Retail'),
            'limit' => 9,'order'=>array('Product.title DESC')
        );
        $products = $this->paginate('Product');
            $this->set('products', $products);
        }
    }

    function add() {
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
    }

    function chain_select() {
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
    }

    function query($i = 'NULL') {

        $category = $this->Category->find('all');
        $this->set('category', $category);
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



        if (isset($_POST['data'])) {


            // pr($this->data);

            $application_selected = $this->data['Product']['application'];
            $weight_selected = $this->data['Product']['weight'];
            $sector_selected = $this->data['Product']['sector'];


            if (!$application_selected == NULL && !$weight_selected == NULL && !$sector_selected == NULL) {



                $query_products = $this->Product->find('all', array('conditions' => array('AND' => array('Product.weight LIKE' => '%' . $weight_selected . '%', 'Product.application LIKE' => '%' . $application_selected . '%', 'Product.sector LIKE' => '%' . $sector_selected . '%'))));












                $this->set('products', $query_products);
                $this->set('application_selected', $application_selected);

                $app_id = $this->Application->findByName($application_selected);
                $ap = $app_id['Application']['id'];
                $this->set('app_id', $ap);



                $this->set('sector_selected', $sector_selected);
                $sec_id = $this->Sector->findByName($sector_selected);
                $se = $sec_id['Sector']['id'];
                $this->set('sec_id', $se);


                $this->set('weight_selected', $weight_selected);
                $wei_id = $this->Weight->findByName($weight_selected);
                $we = $wei_id['Weight']['id'];
                $this->set('wei_id', $we);







                $this->set('i', $i);
            } else {
                $query_products = NULL;
                $this->set('products', $query_products);
            }
        }
    }

    function query_category($category_selected, $sector_selected, $application_selected, $weight_selected) {
        $this->set('category_selected', $category_selected);
        $this->set('sector_selected', $sector_selected);
        $this->set('application_selected', $application_selected);

        $this->set('weight_selected', $weight_selected);




        $app_name = $this->Application->findById($application_selected);
        $ap = $app_name['Application']['name'];
        $this->set('app_name', $ap);

        $sec_name = $this->Sector->findById($sector_selected);
        $se = $sec_name['Sector']['name'];
        $this->set('sec_name', $se);


        $wei_name = $this->Weight->findById($weight_selected);
        $we = $wei_name['Weight']['name'];
        $this->set('wei_name', $we);

        //  $query_products = $this->Product->find('all',array('conditions'=> array('AND' => array('Product.weight LIKE' =>'%'. $weight_selected . '%', 'Product.application LIKE' =>'%'. $application_selected . '%','Product.sector LIKE' =>'%'. $sector_selected . '%'))));           
        $query_products = $this->Product->find('all', array('conditions' => array('AND' => array('Product.weight LIKE' => '%' . $we . '%', 'Product.application LIKE' => '%' . $ap . '%', 'Product.sector LIKE' => '%' . $se . '%', 'Product.category LIKE' => '%' . $category_selected . '%'))));


        $this->set('products', $query_products);








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
        $category = $this->Category->find('all');
        $this->set('category', $category);
    }

    function view_image($i) {
        $this->set('i', $i);
        $products = $this->Product->find('all', array('conditions' => array('Product.id' => $i)));
        $this->set('products', $products);
    }

}

