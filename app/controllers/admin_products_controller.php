<?php

App::import('Core', 'Sanitize');

class AdminProductsController extends AppController {

    var $name = "AdminProducts";
    var $helpers = array('Html', 'Form', 'Javascript');
    var $uses = array('Product', 'Application', 'Category', 'Sector', 'Weight', 'Brand', 'ProductDetail');
    var $components = array('Session', 'Auth');
    var $layout = 'admin';
    var $paginate = array('limit' => 10, 'fields' => array('id', 'title', 'category', 'brand', 'weight', 'application', 'sector'), 'order' => array('id' => 'asc'));

    function beforeFilter() {
        $this->Auth->userModel = 'Admin';
    }

    function index() {


        $products = $this->Product->find('all', array('fields' => array('id', 'title', 'category', 'brand', 'weight', 'application', 'sector')));
        $products = $this->paginate('Product');
        $this->set('product', $products);
    }

    function add() {                                //add book to database
        //pr($this->data);
        $cat = $this->Category->get_category();

        foreach ($cat as $category) {
            $cats[$category['Category']['category']] = $category['Category']['category'];
        }
        $this->set('cats', $cats);

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









        if (!empty($this->data)) {

            // pr($this->data);
            $this->Product->set($this->data);
            if ($this->Product->validates()) {
                // We can save the Product data:
                // it should be in $this->data['Product']


                $sector_selected = $this->data['Product']['sector'];
                //pr($sector_selected);
                $resultCount = count($sector_selected);

                // pr($resultCount);
                $sector_string = 0;
                for ($count = 0; $count < $resultCount; $count++) {

                    $sector_string = $sector_string . ',' . $sector_selected[$count];
                }

                // pr($sector_string);

                $sector_final = substr($sector_string, 2);
                //pr($sector_final);

                $this->data['Product']['sector'] = $sector_final;

                $apps_selected = $this->data['Product']['application'];
                //pr($sector_selected);
                $resultCount = count($apps_selected);

                // pr($resultCount);
                $apps_string = 0;
                for ($count = 0; $count < $resultCount; $count++) {

                    $apps_string = $apps_string . ',' . $apps_selected[$count];
                }

                // pr($sector_string);

                $apps_final = substr($apps_string, 2);
                //pr($sector_final);

                $this->data['Product']['application'] = $apps_final;




                $t = $this->data['Product']['title'];
                $title = str_replace(' ', '-', $t);
                $producturl = Sanitize::paranoid($title, array('-'));

                $this->data['Product']['product_url'] = $producturl;          //encoded url




                $newdir = "img/products/" . $producturl;
                $newdir2 = $newdir . "/small";
                if (!file_exists($newdir)) {
                    mkdir(WWW_ROOT . $newdir);
                    mkdir(WWW_ROOT . $newdir2);
                }
                move_uploaded_file($this->data['Product']['image1']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image1']['name']);

                move_uploaded_file($this->data['Product']['image2']['tmp_name'], WWW_ROOT . $newdir2 . "/" . $this->data['Product']['image2']['name']);
                move_uploaded_file($this->data['Product']['image3']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image3']['name']);
                move_uploaded_file($this->data['Product']['image4']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image4']['name']);
                move_uploaded_file($this->data['Product']['image5']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image5']['name']);

                $image1 = $this->data['Product']['image1']['name'];
                $image2 = $this->data['Product']['image2']['name'];
                $image3 = $this->data['Product']['image3']['name'];
                $image4 = $this->data['Product']['image4']['name'];
                $image5 = $this->data['Product']['image5']['name'];

                $images = $image1 . ',' . $image2 . ',' . $image3 . ',' . $image4 . ',' . $image5;

                $this->data['Product']['image'] = $images;

                //pr($this->data);
                $product = $this->Product->save($this->data);              //saved
                $this->Session->setFlash('Your Product has been saved.');
                $this->redirect(array('action' => 'index'));
                // If the book was saved, Now we add this information to the data
                // and save the BookDetail.

                if (!empty($product)) {
                    // The ID of the newly created book has been set
                    // as $this->Book->id.
                    // $this->data['ProductDetail']['product_id'] = $this->Product->id;
                    //pr($this->data);
                    // Because our book hasOne bookDetail, we can access
                    // the BookDetail model through the Book model:
                    //  $this->ProductDetail->save($this->data);         //details saved
                }
            } else {

                $this->Session->setFlash('Please correct the errors below');
            }
        }
    }

    function edit($id = null) {
        //pr($product);
        //edit book in database
        if (empty($this->data)) {

            $cats = $this->Category->find('list', array('fields' => array('Category.category', 'Category.category')));
            //pr($categories);

            $this->set('cats', $cats);



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








            //logic : get id from index view  den display data to edit
            $product = $this->Product->find('first', array('conditions' => array('id' => $id)));
            //pr($product);

            $this->set('product', $product);
        } else {

            pr($this->data);
            $this->Product->id = $this->data['Product']['id'];
            $id = $this->data['Product']['id'];
            $product = $this->Product->find('first', array('conditions' => array('id' => $id)));
            $producturl = $product['Product']['product_url'];
            $this->Product->product_url = $producturl;            //encoded url
            //pr($book);
            //$array = array($this->data['Book']['UK'], $this->data['Book']['US'], $this->data['Book']['EU'], $this->data['Book']['IN']);
            //$price = implode(',', $array);
            //$this->data['Book']['price'] = $price;
            $newdir = "/img/products/" . $producturl;



            $b = $product['Product']['image'];
            $image = explode(',', $b);

            move_uploaded_file($this->data['Product']['image1']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image1']['name']);

            move_uploaded_file($this->data['Product']['image2']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image2']['name']);
            move_uploaded_file($this->data['Product']['image3']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image3']['name']);
            move_uploaded_file($this->data['Product']['image4']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image4']['name']);
            move_uploaded_file($this->data['Product']['image5']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Product']['image5']['name']);


            if (!empty($this->data['Product']['image1']['tmp_name'])) {
                $image1 = $this->data['Product']['image1']['name'];
            } else {

                $image1 = $image[0];
            }
            if (!empty($this->data['Product']['image2']['tmp_name'])) {
                $image2 = $this->data['Product']['image2']['name'];
            } else {

                $image2 = $image[1];
            }
            if (!empty($this->data['Product']['image3']['tmp_name'])) {
                $image3 = $this->data['Product']['image3']['name'];
            } else {

                    $image3 = $image[2];
            }
            if (!empty($this->data['Product']['image4']['tmp_name'])) {
                $image4 = $this->data['Product']['image4']['name'];
            } else {

                $image4 = $image[3];
            }
            if (!empty($this->data['Product']['image5']['tmp_name'])) {
                $image5 = $this->data['Product']['image5']['name'];
            } else {

                $image5 = $image[4];
            }

            $images = $image1 . ',' . $image2 . ',' . $image3 . ',' . $image4 . ',' . $image5;



            $this->data['Product']['image'] = $images;
            $sector_selected = $this->data['Product']['sector'];
            $this->Product->sector = $sector_selected;

            //pr($sector_selected);
            $resultCount = count($sector_selected);

            // pr($resultCount);
            $sector_string = 0;
            for ($count = 0; $count < $resultCount; $count++) {

                $sector_string = $sector_string . ',' . $sector_selected[$count];
            }

            pr($sector_string);

            $sector_final = substr($sector_string, 2);
            pr($sector_final);

            $this->data['Product']['sector'] = $sector_final;

            $apps_selected = $this->data['Product']['application'];
            $this->Product->application = $apps_selected;

            //pr($sector_selected);
            $resultCount = count($apps_selected);

            // pr($resultCount);
            $apps_string = 0;
            for ($count = 0; $count < $resultCount; $count++) {

                $apps_string = $apps_string . ',' . $apps_selected[$count];
            }

            pr($apps_string);

            $apps_final = substr($apps_string, 2);
            pr($apps_final);

            $this->data['Product']['application'] = $apps_final;


            $product = $this->Product->save($this->data);              //saved
            // If the book was saved, Now we add this information to the Detail
            // and save the BookDetail.

            if (!empty($product)) {
                // The ID of the newly created book has been set
                // as $this->Book->id.
                // $this->data['BookDetail']['book_id'] = $this->Book->id;
                //pr($this->data);
                // Because our book hasOne bookDetail, we can access
                // the BookDetail model through the Book model:
                // $this->BookDetail->save($this->data);         //details saved
                $this->Session->setFlash('Your Product has been updated.');
                $this->redirect(array('action' => 'index'));
                //logic for saving edited data
            }
        }
    }

    function delete($id = null) {
        $this->Product->delete($id);
        $this->ProductDetail->delete($id, array('conditions' => array('Product_id')));
    }

    function category($category) {
        $catBooks = $this->paginate('Product');
        $catBooks = $this->Product->find('all', array('conditions' => array('category' => $category)));
        //pr($catBooks);
        $this->set('categoryTitle', $category);
        $this->set('catBooks', $catBooks);
    }

    function add_category() {


        $cats = $this->Category->find('list', array('fields' => array('Category.id', 'Category.category')));
        $this->set('cats', $cats);


        if (!empty($this->data)) {
            $this->Category->create();
            $this->Category->saveField('category', $this->data['Product']['newcategory']);
            $this->Session->setFlash('Category Added');
            $this->redirect(array('action' => 'add_category'));
        }
    }

    function edit_category($id = null) {

        if (empty($this->data)) {
            $this->set('category', $this->Category->find('first', array('conditions' => array('id' => $id))));
        } else {


            $this->Category->id = $id;
            $this->Category->saveField('category', $this->data['Category']['Cnewcategory']);
            $this->Category->saveField('unique_name', $this->data['Category']['Cnewcategory_unique']);
            $this->set('category', $this->Category->find('first', array('conditions' => array('id' => $id))));
            $this->Session->setFlash('Category Updated');
            $this->redirect(array('action' => 'add_category'));
        }
    }

    function delete_category($id = null) {
        $this->Category->delete($id);
    }

    function add_weight() {
        $weis = $this->Weight->find('list', array('fields' => array('Weight.id', 'Weight.name')));
        $this->set('weis', $weis);





        if (!empty($this->data)) {
            $this->Weight->create();
            $this->Weight->saveField('name', $this->data['Product']['newweight']);
            $this->Session->setFlash('Weight Added');
            $this->redirect(array('action' => 'add_weight'));
        }
    }

    function edit_weight($id = null) {

        if (empty($this->data)) {
            $this->set('weight', $this->Weight->find('first', array('conditions' => array('id' => $id))));
        } else {


            $this->Weight->id = $id;
            $this->Weight->saveField('name', $this->data['Weight']['Cnewweight']);
            $this->set('weight', $this->Weight->find('first', array('conditions' => array('id' => $id))));
            $this->Session->setFlash('Weight Updated');
            $this->redirect(array('action' => 'add_weight'));
        }
    }

    function delete_weight($id = null) {
        $this->Weight->delete($id);
    }

    function add_brand() {

        $bras = $this->Brand->find('list', array('fields' => array('Brand.id', 'Brand.name')));
        $this->set('bras', $bras);



        if (!empty($this->data)) {
            $this->Brand->create();
            $this->Brand->saveField('name', $this->data['Product']['newbrand']);
            $this->Session->setFlash('Brand Added');
            $this->redirect(array('action' => 'add_brand'));
        }
    }

    function edit_brand($id = null) {

        if (empty($this->data)) {
            $this->set('brand', $this->Brand->find('first', array('conditions' => array('id' => $id))));
        } else {


            $this->Brand->id = $id;
            $this->Brand->saveField('name', $this->data['Brand']['Cnewbrand']);
            $this->set('brand', $this->Brand->find('first', array('conditions' => array('id' => $id))));
            $this->Session->setFlash('Brand Updated');
            $this->redirect(array('action' => 'add_brand'));
        }
    }

    function delete_brand($id = null) {
        $this->Brand->delete($id);
    }

    function add_application() {

        $apps = $this->Application->find('list', array('fields' => array('Application.id', 'Application.name')));
        $this->set('apps', $apps);



        if (!empty($this->data)) {
            $this->Application->create();
            $this->Application->saveField('name', $this->data['Product']['newapplication']);
            $this->Session->setFlash('Application Added');
            $this->redirect(array('action' => 'add_application'));
        }
    }

    function edit_application($id = null) {

        if (empty($this->data)) {
            $this->set('application', $this->Application->find('first', array('conditions' => array('id' => $id))));
        } else {


            $this->Application->id = $id;
            $this->Application->saveField('name', $this->data['Application']['Cnewapplication']);
            $this->set('application', $this->Application->find('first', array('conditions' => array('id' => $id))));
            $this->Session->setFlash('Application Updated');
            $this->redirect(array('action' => 'add_application'));
        }
    }

    function delete_application($id = null) {
        $this->Application->delete($id);
    }

    function add_sector() {

        $secs = $this->Sector->find('list', array('fields' => array('Sector.id', 'Sector.name')));
        $this->set('secs', $secs);



        if (!empty($this->data)) {
            $this->Sector->create();
            $this->Sector->saveField('name', $this->data['Product']['newsector']);
            $this->Session->setFlash('Sector Added');
            $this->redirect(array('action' => 'add_sector'));
        }
    }

    function edit_sector($id = null) {

        if (empty($this->data)) {
            $this->set('sector', $this->Sector->find('first', array('conditions' => array('id' => $id))));
        } else {


            $this->Sector->id = $id;
            $this->Sector->saveField('name', $this->data['Sector']['Cnewsector']);
            $this->set('sector', $this->Sector->find('first', array('conditions' => array('id' => $id))));
            $this->Session->setFlash('Sector Updated');
            $this->redirect(array('action' => 'add_sector'));
        }
    }

    function delete_sector($id = null) {
        $this->Sector->delete($id);
    }

    function display_products($id = null) {
        //
        if ($id == null) {

            $this->paginate = array('order' => array('created DESC'), 'conditions' => array('display_home' => 1));
            $displayProducts = $this->paginate('Product');

            $this->set('displayProducts', $displayProducts);
        } else {

            $display = $this->Product->find('count', array('conditions' => array('display_home' => 1)));
            if ($display >= 3) {
                $this->Session->setFlash('Please remove other Product before adding new');
                $displayProducts = $this->paginate('Product');
                $displayProducts = $this->Product->find('all', array('order' => array('created DESC'), 'conditions' => array('display_home' => 1)));
                $this->set('displayProducts', $displayProducts);
            } else {
                $this->Product->id = $id;
                $this->Product->saveField('display_home', 1);
                $this->Product->saveField('priority', 1);


                $displayProducts = $this->Product->find('all', array('order' => array('created DESC'), 'conditions' => array('display_home' => 1)));
                $displayProducts = $this->paginate('Product');
                $this->set('displayProducts', $displayProducts);
            }
        }
    }

    function remove_display($id) {
        $this->Book->id = $id;
        $this->Book->saveField('display_home', 0);
        $this->Book->saveField('priority', NULL);
        $this->Session->setFlash('Removed');
        $this->redirect(array('action' => 'display_books'));
    }

}

?>
