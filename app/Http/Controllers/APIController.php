<?php

namespace App\Http\Controllers;

use HelperData;
use App\Models\User;
use App\Models\Employees;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\LanguageMobileController as Locale;
use App\Traits\ApiResponser;
use App\Http\Controllers\Controller;

class APIController extends Controller
{
    use ApiResponser;
    
    public function prosesLogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $locale = "id";

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => Locale::languages("form", "email.required", $locale),
            'email.email' => Locale::languages("form", "email.email", $locale),
            'password.required' => Locale::languages("form", "password.required", $locale),
        ]);

        if ($email != null && $password != null) {
            $token = $email . $password;

            $checkAcc = User::where('email', $credentials['email'])->first();
            if (!$checkAcc) {
                $responseData = [
                    "success" => false,
                    "error" => "account",
                    "title" => Locale::$languages["universal"]["failed"][$locale],
                    "message" => Locale::$languages["prosesLogin"]["account"][$locale],
                ];
            } else {
                if (!$checkAcc->password) {
                    $responseData = [
                        "success" => false,
                        "error" => "account_google",
                        "title" => Locale::$languages["universal"]["failed"][$locale],
                        "message" => Locale::$languages["prosesLogin"]["account_google"][$locale],
                    ];
                } else {
                    if (!Hash::check($credentials['password'], $checkAcc->password)) {
                        $responseData = [
                            "success" => false,
                            "error" => "password",
                            "title" => Locale::$languages["universal"]["failed"][$locale],
                            "message" => Locale::$languages["prosesLogin"]["password"][$locale],
                        ];
                    }
                }
            }
        } else {
            $responseData = [
                "success" => false,
                "error" => "paramater",
                "title" => Locale::$languages["universal"]["failed"][$locale],
                "message" => Locale::$languages["universal"]["paramater"][$locale],
            ];
        }

        return Response::json($responseData);
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }
}