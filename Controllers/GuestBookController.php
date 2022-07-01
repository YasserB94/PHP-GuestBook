<?php
declare(strict_types=1);
//Helpers
// require '../Helpers/PostLoader.php';
// require '../Helpers/PostSaver.php';
// require '../Helpers/sanitize.php';
// //Models
// require '../Models/Post.php';
//Views
// require '../Views/guestbookView.php';
// require '../Views/Components/postFormView.php';
// require '../Views/Components/postView.php';
class GuestBookController
{
    public function __construct(array $POST){
        // init($POST);
        var_dump($POST);
    }
    private function init(array $POST){
        //Check Post Data for $POST_SUBMIT ? 
        //Filter Post Data from $POST
        //Sanitize Post data from $POST
        //Load Posts from JSON
        //Render View
    }
    public function render(){
        if(isset($_POST['newPost'])){
            $this->renderNewPostForm();
        }else{
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
        require './Views/Components/postView.php';
    }
}



?>