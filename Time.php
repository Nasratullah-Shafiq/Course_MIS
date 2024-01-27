<?php 
date_default_timezone_set('America/New_York');
echo facebook_time_ago('2022-07-18 15:20:40');
function facebook_time_ago($timestamp){
	$time_ago = strtotime($timestamp);
	$current_time = time();
	$time_difference = $current_time - $time_ago;
	$seconds = $time_difference;
	$minutes = round($seconds/60); //value 60 is seconds
	$hours = round($seconds/3600); //value 3600 is 60 minutes * 60 seconds
	$days = round($seconds/86400);
	$weeks = round($seconds/604800);
	$months = round($seconds/2629440);
	$years = round($seconds/31553280);

	// if($seconds <=60){
	// 	return "Just Now";
	// }
	if($minutes <=60){
		if($minutes==1){
			return "One Minute ago";
		}
		else{
			return "$minutes minutes ago";
		}
	}
	else if ($hours <=12){
		if($hours == 1){
			return "an hour ago";
		}
		else{
			return "$hours hours ago";
		}
	}
	else if ($days <=7){
		if($days == 1){
			return "Yesterday";
		}
		else{
			return "$days days ago";
		}
	}
	else if ($weeks <=4.3){
		if($weeks == 1){
			return "a week ago";
		}
		else{
			return "$weeks weeks ago";
		}
	}
	else if ($months <=12){
		if($months == 1){
			return "one month ago";
		}
		else{
			return "$months months ago";
		}
	}
	else if ($years <=1){
		if($years == 1){
			return "one year ago";
		}
		else{
			return "$years years ago";
		}
	}
}
?>