<?php 

class lampada{
    public $status;

    public function ligar(){
        $status = "ligada";
        echo "A lâmpada está " . $status ."";
}
   public function desligar(){
    $status = "desligada";
    echo "A lâmpada está ". $status ."";
   }
}

?>