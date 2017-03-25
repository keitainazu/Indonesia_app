<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
       $this->set('posts', $this->Posts->find('all'));
    }
}
?>