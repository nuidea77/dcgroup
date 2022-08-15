<?php

namespace App\Http\Controllers;
use App\Partner;
use Illuminate\Http\Request;

class PagesController extends Controller
{
 public function contact(){
    return view ('pages.contact');
 }
 public function about(){
    $partners = Partner::orderBy('order', 'asc')->limit(8)
    ->get();
    return view ('pages.about')
    ->with('partners', $partners);
 }
}
