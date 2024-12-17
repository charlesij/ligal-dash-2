<?php

namespace App\Helpers;

class RouteHelper
{
  public static function getEcommerceRouteLists():array
  {
    return array_merge(
      [
      'ecommerce',
      'cart',
      'order-details',
      'orders',
      'wishlist',
      ],
      self::getProductRouteLists(),
    );
  }
  public static function getProductRouteLists():array
  {
    return [
      'products',
      'add-product',
      'add-category',
      'edit-product',
      'product-list',
      'product-details',
    ];
  }
  public static function getUsersRouteLists():array
  {
    return [
      'profile',
      'mail',
      'task-manager',
      'user-settings',
      'user-support',
    ];
  }

  public static function getOfficeRouteLists():array
  {
    return [
      'employee',
      'employee-list',
      'employee-attendance',
      'employee-events',
    ];
  }
}