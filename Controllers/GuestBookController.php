<?php
declare(strict_types=1);
//Helpers
// require '../Helpers/PostLoader.php';
// require '../Helpers/PostSaver.php';
// require '../Helpers/sanitize.php';
// //Models
require './Models/PostHandlers.php';
//Views
// require '../Views/guestbookView.php';
// require '../Views/Components/postFormView.php';
// require '../Views/Components/postView.php';
class GuestBookController
{
    public function __construct(array $POST){
        $this->init($POST);
    }
    private function init(array $POST){
        $this->POST = $POST;
    }
    public function render(){
        if(isset($_POST['newPost'])){
            $this->renderNewPostForm();
        }elseif(isset($_POST['submitPost'])){
            $saver = new PostSaver($this->POST);
            $this->renderGuestBook();
        }
        else{
            $this->renderGuestBook();
        }
    }
    private function renderGuestBook(){
        require './Views/guestbookView.php';
        $this->renderPosts();
    }
    private function renderNewPostForm(){
        require './Views/Components/postFormView.php';
    }
    private function renderPosts(){
        $loader = new PostLoader();
        if($loader->getPosts()){
            $posts = $loader->getPosts();
            foreach($posts as $post){
                require './Views/Components/postView.php';
            }
        }else{
            $post = new Post('Dummy','DummyTitle','No Posts have been made yet');
        }
    }
}



?>