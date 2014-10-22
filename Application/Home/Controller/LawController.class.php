<?php
namespace Home\Controller;
use Think\Controller;
class LawController extends Controller {
    public function index(){
    	$count = M('law')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->law = M('law')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Law/index');
    }
}
?>