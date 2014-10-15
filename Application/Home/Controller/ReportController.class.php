<?php
namespace Home\Controller;
use Think\Controller;
class ReportController extends Controller {
    public function index(){
    	$this->report = M('report')->field('id,title,updated_at')->select();
    	$this->display('Report/index');
    }
}
?>