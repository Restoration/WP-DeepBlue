<?php
function get_account($var) {
  $opt = get_option($var);
  return isset($opt['text']) ? $opt['text']: null;
}

function check_account($var){
	$opt = get_option($var);
	 if($opt['text'] == '' ){
	 print "<style>li#".$var." img{display:none;}</style>";
  }
}
check_account('tw_account');
check_account('gp_account');
check_account('fb_account');
check_account('fr_account');
check_account('dr_account');
check_account('yt_account');
