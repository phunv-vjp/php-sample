<?php

  class Book {
  var $id;
  var $title;
  var $price;
// or 
// public $title;
// public $price;

  function __construct($id, $title, $price) {
    $this->id = $id;
    $this->title = $title;
    $this->price = $price;
  }

  function setId($id) {
    $this->id = $id;
  }

  function getId() {
    return this->Id;
  }

  function setTitle($title) {
    $this->title = $title;
  }
  function  getTitle() {
    return $this->title; 
  }
  function setPrice($price) {
    $this->price = $price;
  }
  function getPrice() {
    return $this->price;
  }

 }

?>
