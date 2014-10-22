<?php
namespace Home\Controller;
use Think\Controller;
class InfoController extends Controller {
    public function index(){
    	$count = M('info')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->info = M('info')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Info/index');
    }
}
?>