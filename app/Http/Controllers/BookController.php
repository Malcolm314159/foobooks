<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
  /**
  * get
  * /books
  */
    public function index() {
				return 'View all the books...';
		}
    public function view($title = null) {
      /** GET
      * /books/{title?}
      */
      return 'You want to view the book '.$title;
    }
}
