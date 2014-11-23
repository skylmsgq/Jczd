<?php
namespace Home\Controller;
use Think\Controller;
class CosmeticsController extends Controller {
    public function index(){
    	$count = M('cosmetics')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->cosmetics = M('cosmetics')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Cosmetics/index');
    }
}
?>