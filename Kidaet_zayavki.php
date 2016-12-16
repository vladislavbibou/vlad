<?php
#Тут ваш токен.
#XXXXXXXX это то что нужно вводить.
#oauth.vk.com/blank.html#access_token=984ca48f2f4954dbefd1d1413e79ce0a2af9dfae2a1e022f336a1d0e300ebd4c400d9da6edebae072dede&expires_in=0&user_id=133116406
#Токен брать тут http://u.to/token-vk-dlja-avtostatusa/EnTlBQ
#Токен брать тут http://u.to/super_access_token/uVy-Bw
#---------------------------------------------------------#
	#Токен
		$token = "984ca48f2f4954dbefd1d1413e79ce0a2af9dfae2a1e022f336a1d0e300ebd4c400d9da6edebae072dede"; 

	#Тут текст, но лучше не менять!
		$text = "Привет нашёл тебя в группе добавь в друзья =)";
#---------------------------------------------------------#
	#Дальше лучше не умничать. Не трогать!!!
		$clubs = рандом(array('1','2','3','4','5')); 
			if($clubs == '1'){
				$getMembers = curl('https://api.vk.com/method/groups.getMembers?group_id=13295252&sort=id_desc&fields=online&access_token='.$token); //Запрос
				$json_Members = json_decode($getMembers,1);
				$user_id = $json_Members['response']['users']['0']['uid'];
			} elseif($clubs == '2'){
				$getMembers = curl('https://api.vk.com/method/groups.getMembers?group_id=52255475&sort=id_desc&fields=online&access_token='.$token); //Запрос
				$json_Members = json_decode($getMembers,1);
				$user_id = $json_Members['response']['users']['0']['uid'];
			} elseif($clubs == '3'){
				$getMembers = curl('https://api.vk.com/method/groups.getMembers?group_id=30127198&sort=id_desc&fields=online&access_token='.$token); //Запрос
				$json_Members = json_decode($getMembers,1);
				$user_id = $json_Members['response']['users']['0']['uid'];
			} elseif($clubs == '4'){
				$getMembers = curl('https://api.vk.com/method/groups.getMembers?group_id=65420545&sort=id_desc&fields=online&access_token='.$token); //Запрос
				$json_Members = json_decode($getMembers,1);
				$user_id = $json_Members['response']['users']['0']['uid'];
			} elseif($clubs == '5'){
				$getMembers = curl('https://api.vk.com/method/groups.getMembers?group_id=33764742&sort=id_desc&fields=online&access_token='.$token); //Запрос
				$json_Members = json_decode($getMembers,1);
				$user_id = $json_Members['response']['users']['0']['uid'];
			}
		
	#Запрос
		curl('https://api.vk.com/method/friends.add?user_id='.$user_id.'&text='.urlencode($text).'&access_token='.$token); //Запрос на добавления в друзья
		
#---------------------------------------------------------#

#Рандом
function рандом($text){
	$рандом = mt_rand(0,count($text)-1); 
	return $text[$рандом]; 
}
#Курлик.
function curl($url){
	$ch = curl_init($url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	$response = curl_exec($ch);
	curl_close($ch);
	return $response;
}//wWw.Statuses.Do.AM
?><!-- Скрипт предоставил http://vk.com/Almazik2015 -->