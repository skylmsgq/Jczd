<?php
namespace Home\Controller;
use Think\Controller;
class NoticeController extends Controller {
    public function index(){
    	$this->notice = M('notice')->field('id,title,updated_at')->select();
    	$this->display('Notice/index');
    }
}
?>