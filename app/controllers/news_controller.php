<?php
App::import('Core', 'Sanitize');
class NewsController extends AppController {

    var $name = "News";
//     var $scaffold;
    var $layout = 'admin';

    function index() {
     $news=$this->News->find('all');
     $this->set('news',$news);
    }

    function add() {

        if (!empty($this->data)) {
//If the form data can be validated and saved...
            
            $t = $this->data['News']['title'];
                $title = str_replace(' ', '-', $t);
                $newsUrl = Sanitize::paranoid($title, array('-'));
                




                $newdir = "/img/news/" . $newsUrl;
                mkdir(WWW_ROOT . $newdir);
                move_uploaded_file($this->data['News']['image1']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['News']['image1']['name']);
                move_uploaded_file($this->data['News']['image2']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['News']['image2']['name']);
                move_uploaded_file($this->data['News']['image3']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['News']['image3']['name']);
                //move_uploaded_file($this->data['Book']['image4']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Book']['image4']['name']);
                //move_uploaded_file($this->data['Book']['image5']['tmp_name'], WWW_ROOT . $newdir . "/" . $this->data['Book']['image5']['name']);

                $image1 = $this->data['News']['image1']['name'];
                $image2 = $this->data['News']['image2']['name'];
                $image3 = $this->data['News']['image3']['name'];
                //$image4 = $this->data['News']['image4']['name'];
                //$image5 = $this->data['News']['image5']['name'];

                $images = $image1 . ',' . $image2 . ',' . $image3 ;

                $this->data['News']['images'] = $images;
            if ($this->News->save($this->data)) {
//Set a session flash message and redirect.
                $this->Session->setFlash("News Saved!");
                //$this->redirect('/admin_products');
            }
        }
    }

}

?>
