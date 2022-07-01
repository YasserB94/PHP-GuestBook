<?php
        declare(strict_types=1);

Class Post implements JsonSerializable{
    private string $name,$jobtitle,$message;
    function __construct(string $name,string $title,string $message){
        $this->name = $name;
        $this->jobtitle = $title;
        $this->message = $message;
    }
    public function getName():string{
        return $this->name;
    }
    public function getTitle():string{
        return $this->jobtitle;
    }
    public function getMessage():string{
        return $this->message;
    }
    public function jsonSerialize():array{
        return [
            'name' => $this->getName(),
            'jobtitle'=> $this->getTitle(),
            'message'=>$this->getMessage()
        ];
    }
}
?>
