<?php

class systeme extends DatabaseObject {

  static protected $table_name = 'systeme';
  static protected $db_columns = ['id', 'name', 'descriptif'];

  public $id;
  public $name;
  public $descriptif;
  
  public function __construct($args=[]) {
    $this->systeme = $args['nom'] ?? '';
    $this->systeme = $args['descriptif'] ?? '';


     }

  public function name() {
    return "{$this->name}";
  }

  public function descriptif() {
    return "{$this->descriptif}";
  }
  
  protected function validate() {
    $this->errors = [];

    if(is_blank($this->name)) {
      $this->errors[] = "name cannot be blank.";
    }
    
    return $this->errors;
  }


}

?>