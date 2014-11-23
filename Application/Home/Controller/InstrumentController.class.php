<?php
namespace Home\Controller;
use Think\Controller;
class InstrumentController extends Controller {
    public function index(){
    	$count = M('instrument')->count();
    	$page = new \Org\Util\Page($count, 15);
    	$limit = $page->firstRow.','.$page->listRows;

    	$this->instrument = M('instrument')->order('id desc')->limit($limit)->field('id,title,updated_at')->select();
    	$this->page = $page->show();
    	$this->display('Instrument/index');
    }
}
?>