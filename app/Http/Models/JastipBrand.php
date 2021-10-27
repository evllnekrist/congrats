<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class JastipBrand extends Model
{
    protected $table = 'ms_jastip_brand';
    protected $fillable = [];
}

// CREATE TABLE IF NOT EXISTS `ms_jastip_brand` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `code` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `catalog_url` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `image_logo` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `image_preview` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `image_product` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `categories` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//   `is_enabled` boolean DEFAULT 1,
//   `is_sale_available` boolean DEFAULT 0,
//   `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
//   `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//   PRIMARY KEY (`id`),
//   UNIQUE KEY `code` (`code`)
// ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
