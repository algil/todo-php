<?php

class PagesController
{
  public function home()
  {
    $tasks = App::get('database')->selectAll('tasks');

    return view('index', compact('tasks'));
  }

  public function about()
  {
    return view('about');
  }

  public function contact()
  {
    return view('contact');
  }
}