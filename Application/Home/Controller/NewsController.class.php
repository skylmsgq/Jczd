<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller {
    public function index(){
    	$this->news = M('news')->field('id,title,updated_at')->select();
    	$this->display('News/index');
    }
}
?>