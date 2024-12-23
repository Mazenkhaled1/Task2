<?php

namespace App\Http\Controllers\Web\Local;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class LocalizationController extends Controller
{
    public function changeLanguage($lang)
{
    if (in_array($lang, ['en', 'ar'])) {
        App::setLocale($lang);  // تغيير اللغة
    }

    return redirect()->back();  // العودة إلى الصفحة السابقة
}
}
