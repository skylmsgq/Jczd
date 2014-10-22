<?php
namespace Home\Controller;
use Think\Controller;
class ReportController extends Controller {
    public function index(){
    	$count = M('report')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->report = M('report')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Report/index');
    }
}
?>