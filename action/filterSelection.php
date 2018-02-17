<?php

require ('ShowALL.php');
require ('ShowGK.php');
require('ShowDEF.php');
require ('ShowMID.php');
require ('ShowATT.php');

if(isset($_GET['filter'])){
if ($_GET['filter']=='ALL'){
    ShowALL();
}elseif ($_GET['filter']=='GK'){
    ShowGK();
}elseif ($_GET['filter']=='DEF'){
    ShowDEF();
}elseif ($_GET['filter']=='MID') {
    ShowMID();
}elseif ($_GET['filter']=='ATT') {
    ShowATT();
}
}
else{
    ShowALL();
}

