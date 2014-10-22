<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
    	$count = M('news')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->news = M('news')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('News/index');
    }
}
?>