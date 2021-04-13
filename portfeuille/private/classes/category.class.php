<?php

class Category extends DatabaseObject {

  static protected $table_name = 'category';
  static protected $db_columns = ['id', 'name'];

  public $id;
  public $name;
  
  public function __construct($args=[]) {
    $this->category = $args['nom'] ?? '';


   
  }

  public function name() {
    return "{$this->name}";
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