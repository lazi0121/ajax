<?php

	if($_POST["kw"] == '北京'){
		$arr = array("北京爱情故事","北京四合院","北京炸酱面","北京天安门","北京长城","北京烤鸭");
	}else{
		$arr = array("没有查询到相关数据");
	}
	echo json_encode($arr);

?> 