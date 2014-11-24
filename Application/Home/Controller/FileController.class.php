<?php
namespace Home\Controller;
use Think\Controller;
class FileController extends Controller {
    public function index(){
    	$count = M('download')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->file = M('download')->order('id desc')->limit($limit)->field('id,title,file,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('File/index');
    }
}
?>