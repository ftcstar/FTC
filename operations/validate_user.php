<?php
include "db_init.php"
/*Validate the email & ph num for duplicate entry*/
function validate_dup_user($email, $ph_num) {

}

function register_user($fname, $lname, $email, $ph_num, $passwd) {
    //TODO: check whether already registered ph num & email
	//TODO: If already present then return false & send the reason
	//make new entry into database
}

?>