<?php

class Test extends BaseController{
    function data(){
		$data = [
			'name' => 'Ann',
			'score' => 100
		];
		
		json($data);
    }
}
