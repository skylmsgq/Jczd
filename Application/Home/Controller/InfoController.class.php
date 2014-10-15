<?php
namespace Home\Controller;
use Think\Controller;
class InfoController extends Controller {
    public function index(){
    	$this->info = M('info')->field('id,title,updated_at')->select();
    	$this->display('Info/index');
    }
}
?>