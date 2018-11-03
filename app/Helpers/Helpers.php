<?php 

function cek_helper(){
    return "Call From Helpers";
}

function notifMsg($stat, $msg){
    \Session::put($stat, $msg);
}


?>