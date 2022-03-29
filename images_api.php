<?php
/*
作者：CodeXz/举个栗子
2022.3.27

*/
error_reporting(E_ALL ^ E_NOTTCE);//迫不得已，后续改进ing
$img_jpg = glob("111/*.{jpg}",GLOB_BRACE);//jpe文件夹随机抽取//111为一个类型
$img_png = glob("222/*.{png}",GLOB_BRACE);//png文件夹随机抽取//222为一个类型
$img_all = glob("assets/background/*.{jpg,png}",GLOB_BRACE);//全部文件夹随机抽取
$img_j = array_rand($img_jpg);
$img_p = array_rand($img_png);
$img_all_in = array_rand($img_all);
$jpg = $img_jpg[$img_j];
$jpg = $img_png[$img_p];
$jpg = $img_all[$img_all_in];
$type = $_GET['xz'];
switch ($type)
{
    case 'all':
    header("Location:".$img_all);
    break;

    case 'all':
    header("Location:".$jpg);
    break;

    case 'all':
    header("Location:".$png);
    break;
}
echo('[获取pc图片请输入]:?xz=all')
?>
