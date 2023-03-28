<?php

require_once 'recherche_model.php';
Class recherche_control{
private $myModel;
    public function __construct() {
        $this->myModel = new MyModel();
      }

public function getdat($word){
$data = $this->myModel->getData($word);
return $data;
}
}



?>