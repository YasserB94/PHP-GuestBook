<?php
declare(strict_types=1);
require './Models/PostHandlers.php';
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
        require 'Views/guestbookView.php';
        $this->renderPosts();
    }
    private function renderNewPostForm(){
        require 'Views/Components/postFormView.php';
    }
    private function renderPosts(){
        $loader = new PostLoader();
        if($loader->getPosts()){
            $posts = $loader->getPosts();
            foreach($posts as $post){
                require 'Views/Components/postView.php';
            }
        }else{
            $date = date("h:i:sa"). " " . date("Y/m/d");
            $post = new Post('Dummy','DummyTitle','No Posts have been made yet',$date);
            require 'Views/Components/postView.php';
        }
    }
}
?>