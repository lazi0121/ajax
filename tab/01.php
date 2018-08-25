<?php

	if($_POST["age"] == '24'){
		$arr = array(
			array(
				"name"=>"张三",
				"age"=>"24",
				"sex"=>"男",
				"adress"=>"上海市宝山区红琳璐和家新苑"
			),
			array(
				"name"=>"李四",
				"age"=>"24",
				"sex"=>"男",
				"adress"=>"上海市浦东新区唐镇金塘公寓"
			),
			"length"=>"2"
		);
	}else{
		$arr = array("");
	}
	echo json_encode($arr);

?> 