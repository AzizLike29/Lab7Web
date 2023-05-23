<?php

namespace App\Controllers;

class Page extends BaseController
{
  public function artikel()
  {
    return view('artikel', [
      'title' => 'Halaman artikel',
      'content' => 'Ini adalah halaman artikel memanggil saya'
    ]);
  }
  public function about()
  {
    return view('about', [
      'title' => 'Halaman About',
      'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
    ]);
  }
  public function contact()
  {
    return view('contact', [
      'title' => 'Halaman contact',
      'content' => 'Ini adalah halaman kontak memanggil saya'
    ]);
  }
  public function article()
  {
    return view('article', [
      'title' => 'Halaman article',
      'content' => 'Ini adalah halaman artikel memanggil saya'
    ]);
  }
  public function faqs()
  {
    echo "Ini halaman FAQ";
  }
  public function tos()
  {
    echo "Ini halaman Term of Service";
  }
}
