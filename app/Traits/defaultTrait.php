<?php
namespace App\Traits;


trait defaultTrait{ 

	protected $view_name ;  //模板

	//首页
	public function main(){
		$this->view_name = __FUNCTION__;
		return view('admin.'.$this->Prefix.$this->view_name);
	}	


	//列表页
	public function list(){ 
		$this->view_name = __FUNCTION__;
		return view('admin.'.$this->Prefix.$this->view_name);
	}


	//修改页
	public function edit(){ 

	}


	//添加页
	public function add(){ 

	}




}
	
	


