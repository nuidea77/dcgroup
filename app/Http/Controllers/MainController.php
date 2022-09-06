<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Models\Post;
use App\Slider;
use TCG\Voyager\Models\Category;
use App\Company;
class MainController extends Controller
{
    public function index(){
        $mobilesliders = Slider::where([
            ['type', '=', 'mobile'],
        ])
            ->orderBy('order', 'asc')
            ->limit(3)
            ->get();

            $websliders = Slider::where([
            ['type', '=', 'web'],
        ])
            ->orderBy('order', 'asc')
            ->limit(3)
            ->get();
        $partners = Partner::orderBy('order', 'asc')->get();
        $featurenews = Post::with('category')->withTranslations()
                ->where([
                    ['status', '=', 'PUBLISHED'],
                    ['featured', '=', 1]
                ])
                    ->orderBy('created_at', 'desc')
                    ->limit(2)
                    ->get();
        $company = Company::withTranslations()
        ->orderBy('order', 'asc')
        ->limit(8)
        ->get();


    return view('welcome')
    ->with('featurenews', $featurenews)
    ->with('mobilesliders', $mobilesliders)
    ->with('websliders', $websliders)
    ->with('company', $company)
    ->with('partners', $partners);

}
}



