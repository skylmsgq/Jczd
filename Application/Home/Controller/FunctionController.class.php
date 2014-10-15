<?php
namespace Home\Controller;
use Think\Controller;
class FunctionController extends Controller {
    public function index(){
    	$this->function = M('function')->field('id,title,updated_at')->select();
    	$this->display('Function/index');
    }
}
?>
