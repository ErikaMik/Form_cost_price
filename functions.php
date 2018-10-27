<?php

function getSH($cp) {
	if ($cp > 40) {
		return 0;
	} else {
		return 10;
		} 
}

function getMG($cp) {
	if ($cp < 100) {
		return ($cp * 0.3);
	} else return ($cp * 0.2);
}

function getVAT($cp) {
	return ($cp + getSH($cp) + getMG($cp)) * 0.21;
}

function getRetail($cp) {
	return ($cp + getSH($cp) + getMG($cp) + getVAT($cp));
}

