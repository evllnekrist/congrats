<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'ms_faq';
    protected $fillable = [];
}

// CREATE TABLE IF NOT EXISTS `ms_faq` (
//     `id` int(11) NOT NULL AUTO_INCREMENT,
//     `type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//     `order` int(11) NOT NULL,
//     `ask` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//     `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
//     `is_enabled` boolean DEFAULT 1,
//     `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
//     `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
//     PRIMARY KEY (`id`)
//   ) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
