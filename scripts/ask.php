<?php
# или или
/*
if(preg_match('#^([a-zA-Zа-яА-Я0-9\-,_]{1,}) или ([a-zA-Zа-яА-Я0-9\-,_]{1,})\?$#iu', $_TEXT, $res))
	{
		$md5 = md5($res[1].$res[2]);
		// sendMessage($_CHAT['id'], $md5);
		if(mb_substr($md5, 0, 1, 'utf-8') == '0' || mb_substr($md5, 0, 1, 'utf-8') == '1' || mb_substr($md5, 0, 1, 'utf-8') == '2' || mb_substr($md5, 0, 1, 'utf-8') == '3' || mb_substr($md5, 0, 1, 'utf-8') == '4' || mb_substr($md5, 0, 1, 'utf-8') == '5' || mb_substr($md5, 0, 1, 'utf-8') == '6' || mb_substr($md5, 0, 1, 'utf-8') == '7')
			{
				$r = 1;
			}
		else
			{
				$r = 2;
			}
		
		$texts = array('Разумеется', 'Думаю, что', 'Всяко', 'Глупый вопрос,', 'Очевидно же, что');
		$send = $texts[rand(0, count($texts) - 1)].' '.$res[$r];
		if($_CHAT['id'] == '-1001055318777')
			{
				$send = 'Правильный вариант - @ayayayyyev пидор. Остальное неважно';
			}
		sendMessage($_CHAT['id'], $send, '', $_MESS['message_id']);
	}
*/