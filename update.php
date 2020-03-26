<?php
cd
$remote = "git remote add github https://github.com/alphastockid0/GJK.git";
  $remote;
  if ($remote==false){
    goto nextt;
  } else{
    nextt:
    git remote -v;
    git pull github master;
    }

?>
