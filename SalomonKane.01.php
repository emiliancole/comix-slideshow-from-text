<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
<?php 
include("setting.php");
$page = $_GET["page"]; 
if ($page<1 || $page>$lastpage) { $page=1; }
?>
  <title><?= $cname; ?></title>
</head>
<body style="background-color:orange;">
<p>
<form action="<?= $fname; ?>" method="get">
<a href="index.php"><?= $ctitle; ?></a> | 
 
  <a href="<?= $fname; ?>?page=1">first</a> |
  <a href="<?= $fname; ?>?page=<?= $page-1; ?>">previous</a> | 
  &nbsp;Page:<input type="text" size="2" name="page" value="<?= $page; ?>">
<input type='submit' value='Go!'>
<a href="<?= $fname; ?>?page=<?= $page+1; ?>">next</a> | 
<a href="<?= $fname; ?>?page=<?= $lastpage; ?>">last (<?= $lastpage; ?>)</a> | 
<img src="http://comix.altervista.org/images/flag/en.png"/>EN 
</form>
<hr>
<?php
$baseurl="";
$j = str_pad($page, $pad, "0", STR_PAD_LEFT);
?>
<a href="<?= $fname; ?>?page=<?= $page+1; ?>">
<img src="<?= $baseurl; ?><?= $images[$page]; ?>" alt="IMAGE" width="980px" /></a>
</body>
</html>
