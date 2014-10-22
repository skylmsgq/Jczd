<?php
namespace Home\Controller;
use Think\Controller;
class NoticeController extends Controller {
    public function index(){
    	$count = M('notice')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->notice = M('notice')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Notice/index');
    }
}
?>