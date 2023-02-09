<?php

var_dump($notDefinedVariable); // null

$ageOfUser = null;

var_dump(isset($ageOfUser)); // false

var_dump(is_null($ageOfUser));       // true
var_dump(null === $ageOfUser); // true
