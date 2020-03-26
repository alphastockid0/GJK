<?php
cd
$remote = "https://github.com/alphastockid0/GJK.git";
echo  "git remote add github $remote";
  if ($remote==false){
    goto nextt;
  } else{
    nextt:
    git remote -v;
    git pull github master;
    }

?>
