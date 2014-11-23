<?php
namespace Home\Controller;
use Think\Controller;
class DrugController extends Controller {
    public function index(){
    	$count = M('drug')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->drug = M('drug')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Drug/index');
    }
}
?>