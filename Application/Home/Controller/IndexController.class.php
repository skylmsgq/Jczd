<?php
namespace Home\Controller;
use Think\Controller;

header("Content-type: text/html; charset=utf-8"); 

class IndexController extends Controller {
    public function index(){
    	$this->function = M('function')->limit(6)->field('id,title,updated_at')->select();
    	$this->info = M('info')->limit(6)->field('id,title,updated_at')->select();
    	$this->news = M('news')->limit(6)->field('id,title,updated_at')->select();
    	$this->notice = M('notice')->limit(6)->field('id,title,updated_at')->select();
    	$this->policy = M('policy')->limit(6)->field('id,title,updated_at')->select();
    	$this->report = M('report')->limit(6)->field('id,title,updated_at')->select();
    	$this->display('Index/index');
    }

    public function handleArticle(){
    	//$this->assign('article',M(I('type'))->where(array('id'=>I('id')))->select())->display('Index/handleArticle');
        $this->article = M(I('type'))->where(array('id'=>I('id')))->select();
        $this->display('Index/handle');
        // $article = M(I('type'))->where(array('id'=>I('id')))->select();
        // echo ($article[0]['content']);
    }
}
?>
