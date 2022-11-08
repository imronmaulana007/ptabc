<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageMobileController extends Controller
{

  /**
   * Parameter of language
   * 1. -> The Function Name
   * 3. -> The Text / Code
   * 2. -> The Language Choose
   **/

  public static function languages($function, $text, $language)
  {
    $language = strtolower($language);
    if (($language != "en" && $language != "id") || !isset($language)) {
      $language = "en";
    }
    $language = (!empty($language)) ? $language : "en";

    return LanguageMobileController::$languages[$function][$text][$language];
  }

  public static $languages = [
    "universal" => [
      "paramater" => [
        "id" => "Maaf, Parameter tidak valid.",
        "en" => "Sorry, Invalid parameter.",
      ],
      "permission" => [
        "id" => "Maaf, Anda tidak memiliki akses ke menu ini.",
        "en" => "Sorry, You don't have access to this menu.",
      ],
      "success" => [
        "id" => "Berhasil",
        "en" => "Succes",
      ],
      "failed" => [
        "id" => "Gagal",
        "en" => "Failed",
      ],
      "failedInsert" => [
        "id" => "Galal menginput data",
        "en" => "Failed to submit data",
      ],
      "failedUpdate" => [
        "id" => "Galal mengubah data",
        "en" => "Failed to update data",
      ],
      "failedDelete" => [
        "id" => "Galal menghapus data",
        "en" => "Failed to delete data",
      ],
      "failedSendEmail" => [
        "id" => "Galal mengirim email, hubungi teknisi terkait",
        "en" => "Failed to send the email, contact the developer",
      ],
      "dataNotFound" => [
        "id" => "Data tidak ditemukan",
        "en" => "Data not found",
      ],
      "passwordConfirm" => [
        "id" => "Password tidak sama",
        "en" => "Password is not the same",
      ],
    ],
    /* ================================================================================== */
    "prosesLogin" => [
      "success" => [
        "id" => "Selamat Datang, ",
        "en" => "Welcome, ",
      ],
      "password" => [
        "id" => "Maaf, kata sandi Anda salah. Harap periksa ulang kata sandi Anda.",
        "en" => "Sorry, Your password was incorrect. Please double-check Your password.",
      ],
      "account" => [
        "id" => "Maaf, Email yang Anda masukkan belum terdaftar. Silakan periksa Email Anda dan coba lagi.",
        "en" => "Sorry, The Email Your entered doesn't registered. Please check Your Email and try again.",
      ],
      "account_number" => [
        "id" => "Maaf, Nomor yang Anda masukkan belum terdaftar. Silakan periksa Nomor Anda dan coba lagi.",
        "en" => "Sorry, The Number Your entered doesn't registered. Please check Your Number and try again.",
      ],
      "account_google" => [
        "id" => "Maaf, Email yang Anda masukkan terdaftar login menggunakan google. Silakan masuk dengan google.",
        "en" => "Sorry, Your Email registered by google. Please login with google.",
      ],
      "active" => [
        "id" => "Maaf, akun Anda masih belum aktif sampai sekarang.",
        "en" => "Sorry, Your account hasn't been active until now.",
      ],
    ],
    /* ================================================================================== */
    "prosesRegister" => [
      "success" => [
        "id" => "Berhasil mendaftar, segara cek email untuk konfirmasi ",
        "en" => "Welcome, please check your email to confirmation",
      ],
    ],
    /* ================================================================================== */
    "prosesForgotPassword" => [
      "successSendRequest" => [
        "id" => "Berhasil mengajukan reset password, silahkan cek email anda",
        "en" => "Success request reset password, check your email",
      ],
      "failedSendRequest" => [
        "id" => "Galal, mengajukan reset password",
        "en" => "Failed request reset password",
      ],
      "successResetPassword" => [
        "id" => "Berhasil merubah  password",
        "en" => "Success change password",
      ],
      "failedResetPassword" => [
        "id" => "Galal merubah password, silahkan coba beberapa saat lagi",
        "en" => "Failed request reset password, please try again in a few minutes",
      ],
      "failedResetPasswordSame" => [
        "id" => "Pastikan password berbeda dengan sebelumnya",
        "en" => "Make sure the password is different from before",
      ],
    ],
    
    "form" => [
      "nik.required" => [
        "id" => "NIK tidak boleh kosong",
        "en" => "ID Number is required",
      ],
      "nik.min" => [
        "id" => "NIK tidak boleh kurang dari 16",
        "en" => "ID Number must be at least 16 characters",
      ],
      "nik.max" => [
        "id" => "NIK tidak boleh lebih dari 16",
        "en" => "ID Number must not be greater than 16 characters",
      ],
      "fullname.required" => [
        "id" => "Name tidak boleh kosong",
        "en" => "Name is required",
      ],
      'email.required' => [
        "id" => 'Email tidak boleh kosong',
        "en" => 'Email is required',
      ],
      'email.email' => [
        "id" => 'Format email tidak valid',
        "en" => 'Format email invalid',
      ],
      'email.unique' => [
        "id" => 'Email sudah terdaftar',
        "en" => 'Email has already been taken',
      ],
      'phone_number.required' => [
        "id" => 'Nomor HP tidak boleh kosong',
        "en" => 'Phone Number is required',
      ],
      'phone_number.unique' => [
        "id" => 'Nomor HP sudah terdaftar',
        "en" => 'Phone Number has already been taken',
      ],
      'phone_number.integer' => [
        "id" => 'Nomor HP tidak valid',
        "en" => 'Phone Number invalid',
      ],
      'address.required' => [
        "id" => 'Alamat tidak boleh kosong',
        "en" => 'address is required',
      ],
      "photo.required" => [
        "id" => "photo ID tidak boleh kosong",
        "en" => "photo ID is required",
      ],
      "photo.image" => [
        "id" => "photo ID harus berupa gambar",
        "en" => "photo ID must be an image",
      ],
      "photo.max" => [
        "id" => "Ukuran file photo ID tidak boleh lebih dari 1 mb",
        "en" => "photo ID must not be greater than 1 megabytes",
      ],

      'password.required' => [
        "id" => 'Kata sandi tidak boleh kosong',
        "en" => 'Password Field is required',
      ],
      'password.same' => [
        "id" => 'Konfirmasi Kata sandi harus sama',
        "en" => 'Password confirmation must match',
      ],
      "password.min" => [
        "id" => "Kata sandi tidak boleh kurang dari 8",
        "en" => "Password must be at least 8 characters",
      ],
      'password_CONFIRM.required' => [
        "id" => 'Konfimasi Kata sandi tidak boleh kosong',
        "en" => 'Password confirmation Field is required',
      ],

      "CODE.required" => [
        "id" => "Kode tidak boleh kosong",
        "en" => "Code is required",
      ],
      "CODE.integer" => [
        "id" => "Kode tidak valid",
        "en" => "Code invalid",
      ],
    ],

    /* ================================================================================== */
  ];
}
