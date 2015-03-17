<?php

class AjaxController extends BaseController{

	public function boxQuotations()
	{
		if(Request::ajax()) {
			$dados = array("teste" => "teste", "teste1" => "teste1");
			$html = View::make('ajax', $dados)->render();
		}
		return $html;	
	}
	
}