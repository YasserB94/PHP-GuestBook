<?php
declare(strict_types=1);
require 'Models/Post.php';
define('PATH_TO_POSTS_JSON','posts.json');
class PostSaver{
    private array $postData;
    private Post $post;
    function __construct(array $POST){
        $this->init($POST);
    }
    private function init($POST):void{
        $this->getMessageData($POST);
        $this->createPostFromData();
        $this->savePostToFile();
    }
    private function getMessageData($POST):void{
        //Loop over $_POST and save the data needed to make a post
        $requiredData = ["name","jobtitle","message"];
        foreach($POST as $key =>$value){
            foreach($requiredData as $requiredField){
                if($key===$requiredField){
                    $this->postData[$key]=htmlspecialchars($value);
                }
            }
        }
        
    }
    
    private function createPostFromData(){
        $date = date("Y/m/d");
        $this->post = new Post($this->postData['name'],$this->postData['jobtitle'],$this->postData['message'],$date);
    }
    private function savePostToFile(){
        $jsonData = file_get_contents(PATH_TO_POSTS_JSON);
        $data = json_decode($jsonData,true);
        if(!$data){
            $data = [];
            array_push($data,$this->post);
        }else{
          array_push($data,$this->post);
        }
        file_put_contents(PATH_TO_POSTS_JSON,json_encode($data));
    }
}
class PostLoader{
    private array $posts = [];
    function __construct(){
        $this->init();
    }
    private function init(){
        $postsData=$this->getData();
        $this->createPosts($postsData);
    }
    private function getData():array{
        $jsonData = file_get_contents(PATH_TO_POSTS_JSON);

        $data = json_decode($jsonData);
        //Do not complain about the next 3 lines or I will find you
        if(!$data){
            return [];
        }
        return $data;
    }
    private function createPosts($data){
        foreach($data as $key=>$value){
            $name = $value->name;
            $title = $value->jobtitle;
            $message = $value->message;
            $date = $value->date;
            $tempPost = new Post($name,$title,$message,$date);
            array_push($this->posts,$tempPost);
        }
    }
    public function getPosts(){
        return $this->posts;
    }
}
?>