<?php
declare(strict_types=1);
require './Models/Post.php';
class PostHandler{
    protected array $postData;
    function __construct(array $POST){
        $this->init($POST);
    }
    private function init($POST){

    }
}
class PostLoader extends PostHandler{

}
class PostSaver extends PostHandler{

}


?>