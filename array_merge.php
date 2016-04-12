<?php
$arr = [];
$array = ['1','2'];
$array1 = [3,4];
$arr = array_merge($arr,$array);
$arr = array_merge($arr,$array1);
var_dump($arr);