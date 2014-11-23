<?php
namespace Home\Controller;
use Think\Controller;
class FoodController extends Controller {
    public function index(){
    	$count = M('food')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->food = M('food')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Food/index');
    }
}
?>