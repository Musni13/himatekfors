<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class CKEditorTokenController extends Controller
{
    public function generate(Request $request)
    {
        $key = env('CKEDITOR_PRIVATE_KEY'); // taruh private key di .env
        $clientId = env('CKEDITOR_ENVIRONMENT_ID'); // ID dari CKEditor cloud

        $payload = [
            "aud" => "ckeditor.com",
            "iss" => $clientId,
            "iat" => time(),
            "exp" => time() + 3600,
            "sub" => "user-123", // bisa user ID atau email
        ];

        $jwt = JWT::encode($payload, $key, 'HS256');

        return response()->json([
            "token" => $jwt
        ]);
    }
}
