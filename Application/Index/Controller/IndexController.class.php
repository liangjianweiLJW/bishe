<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$this -> show('Index.Index page!', 'utf-8');
    }
}