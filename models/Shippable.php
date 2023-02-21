<?php
trait Shippable {
    protected $shipping_cost;
    
    public function setShippingCost($cost) {
      $this->shipping_cost = $cost;
    }

    public function getShippingCost() {
      return $this->shipping_cost;
    }
  
  }