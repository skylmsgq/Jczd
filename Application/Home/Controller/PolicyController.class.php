<?php
namespace Home\Controller;
use Think\Controller;
class PolicyController extends Controller {
    public function index(){
    	$this->policy = M('policy')->field('id,title,updated_at')->select();
    	$this->display('Policy/index');
    }
}
?>