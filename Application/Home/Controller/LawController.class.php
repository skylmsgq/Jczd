<?php
namespace Home\Controller;
use Think\Controller;
class LawController extends Controller {
    public function index(){
    	$this->law = M('law')->field('id,title,updated_at')->select();
    	$this->display('Law/index');
    }
}
?>