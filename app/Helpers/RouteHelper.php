<?php

namespace App\Helpers;

class RouteHelper
{
  public static function getEcommerceRouteLists():array
  {
    return [
      'ecommerce',
      'add-product',
      'cart',
      'edit-product',
      'order-details',
      'orders',
      'products',
      'product-details',
      'product-list',
      'wishlist',
    ];
  }
  public static function getProductRouteLists():array
  {
    return [
      'products',
      'add-product',
      'edit-product',
      'product-list',
      'product-details',
    ];
  }
}