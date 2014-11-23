<?php
namespace Home\Controller;
use Think\Controller;
class FunctionController extends Controller {
    public function index(){
    	$count = M('function')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->function = M('function')->order('id asc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Function/index');
    }
}
?>
