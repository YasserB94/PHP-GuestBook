<?php
        declare(strict_types=1);

Class Post implements JsonSerializable{
    private string $name,$jobtitle,$message,$date;
    function __construct(string $name,string $title,string $message,string $date){
        $this->name = $name;
        $this->jobtitle = $title;
        $this->message = $message;
        $this->date = $date;
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
    public function getDate():string{
        return $this->date;
    }
    public function jsonSerialize():array{
        return [
            'name' => $this->getName(),
            'jobtitle'=> $this->getTitle(),
            'message'=>$this->getMessage(),
            'date' => $this->getDate()
        ];
    }

}
?>
