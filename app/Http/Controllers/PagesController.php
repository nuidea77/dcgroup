<?php

namespace App\Http\Controllers;
use App\Partner;
use App\Company;
use Illuminate\Http\Request;

class PagesController extends Controller
{

 public function about(){
    $partners = Partner::orderBy('order', 'asc')->get();
    $company = Company::withTranslations()->orderBy('order', 'asc')->limit(8)->get();
    return view ('pages.about')
    ->with('partners', $partners)
    ->with('company', $company);
 }
}
