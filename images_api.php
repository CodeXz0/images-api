<?php
/*
作者：CodeXz/举个栗子
2022.3.27
2022.07.07

*/
#$img_png = glob("222/*.{png}",GLOB_BRACE);//png文件夹随机抽取
$img_all = glob("assets/background/*.{png,jpg}",GLOB_BRACE);//全部文件夹随机抽取
//

$str = file_get_contents('https://cn.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1');
$str = json_decode($str,true);
$bingurl = 'https://cn.bing.com'.$str['images'][0]['url'];
$bingurl4k = 'https://cn.bing.com'.$str['images'][0]['urlbase'].'_UHD.jpg';
//
#$img_p = array_rand($img_png);
$img_all_in = array_rand($img_all);
//
//
$png = $img_png[$img_p];
$all_in = $img_all[$img_all_in];
//
$type = $_GET['xz'];
switch ($type)
{
    case 'all':
    header("Location:".$all_in);
    break;
    
    case 'png':
    header("Location:".$png);
    break;
    
    case 'bing':
    header("Location:".$bingurl);
    break;
    
    case 'bing4K':
    header("Location:".$bingurl4k);
    break;
}
echo('[获取图片请输入] ：?xz=all <br/> [获取bing每日一图请输入] ：?xz=bing <br/> [获取bing每日一图4K请输入] ：?xz=bing4K')
?>
