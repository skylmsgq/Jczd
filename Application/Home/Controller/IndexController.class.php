<?php
namespace Home\Controller;
use Think\Controller;

header("Content-type: text/html; charset=utf-8"); 

class IndexController extends Controller {
    public function index(){
    	$this->function = M('function')->order('id desc')->limit(6)->field('id,title,updated_at')->select();
    	$this->info = M('info')->order('id desc')->limit(6)->field('id,title,updated_at')->select();
    	$this->news = M('news')->order('id desc')->limit(6)->field('id,title,updated_at')->select();
    	$this->notice = M('notice')->order('id desc')->limit(6)->field('id,title,updated_at')->select();
    	$this->policy = M('policy')->order('id desc')->limit(6)->field('id,title,updated_at')->select();
    	$this->report = M('report')->order('id desc')->limit(6)->field('id,title,updated_at')->select();
        $this->law = M('law')->order('id desc')->limit(6)->field('id,title,updated_at')->select();
        $this->banner = M('banner') ->order('id desc')->limit(5)->field('id,title,picture')->select();
        $this->inform = M('inform') ->order('id desc')->limit(1)->field('id,image')->select();
    	$this->display('Index/index');
    }

    public function handleArticle(){
        $this->article = M(I('type'))->where(array('id'=>I('id')))->select();
        $this->display('Index/handle');
    }

    public function handlePicture(){
        $this->article = M(I('type'))->where(array('id'=>I('id')))->select();
        $this->display('Index/picture');
    }
}
?>
