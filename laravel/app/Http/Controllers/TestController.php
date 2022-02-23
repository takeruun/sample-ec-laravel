<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
  public function test1()
  {
    $message = 'This is a test';
    return view('tests.test1', compact('message'));
  }

  public function test2()
  {
    $message = 'This is a test';
    return view('tests.test2', compact('message'));
  }
}
