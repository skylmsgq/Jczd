<?php
namespace Home\Controller;
use Think\Controller;
class AuthenticationController extends Controller {
    public function index(){
    	$count = M('authentication')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->authentication = M('authentication')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Authentication/index');
    }
}
?>