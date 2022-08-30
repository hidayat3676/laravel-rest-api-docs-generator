<?php

namespace Hidayat\ApiDocs;

use Illuminate\Support\Facades\Route;

class ApiDocsRoute
{
    public static function generateRoute($route = null)
    {
        $route = $route ?? 'api_docs';
        require_once __DIR__ . '/../routes/api_docs.php';
    }
}
