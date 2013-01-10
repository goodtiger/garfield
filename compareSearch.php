<form action="<?php $PHP_SELF; ?>" method="post">
请输区域A：
  <textarea type="text" name="areaA" rows="3" cols="20"></textarea>
  <br>
请输区域B：
  <textarea type="text" name="areaB"rows="3" cols="20"/></textarea>
  <br>
　　 <input type="hidden" name="stage" value = "results">
　　 <input type="submit" value= "submint">
</form>

<?php
function process($a,$b){	
  $key=urlencode("$a $b");
  $url="http://www.baidu.com/s?wd=$key";
  $lines_string=file_get_contents($url);
  eregi('百度一下，找到相关网页约(.*)篇，用时',$lines_string,$title);
   echo"Hello";
  echo"[百度]$a $b:";
  //  echo substr("$title[0]",24,strlen($title[0])) ;
  echo "$title[0]";
  echo "<br/>";
}
function see($a,$b){	
  echo"$a $b:";
  echo substr("$title[0]",24,strlen("$title[0]")) ;
  echo "<br/>";
}


function process_form()
{
 $_POST["areaA"];
 $_POST["areaB"];

 $areaAs = split(" ",$_POST["areaA"]);
 $areaBs = split(" ",$_POST["areaB"]);

 for ($i=0;$i<sizeof($areaAs);$i++) {
	 for ($j=0;$j<sizeof($areaBs);$j++){
		 if($areaAs[$i]!=$areaBs[$j]){
			 process($areaAs[$i],$areaBs[$j]);	
		 }
	 }
} 
}

?>

<?php
if (empty($_POST["stage"])) {display_form();}
else {process_form();}
?>

<?php
function display_form() {
global $PHP_SELF;}
?>

 
