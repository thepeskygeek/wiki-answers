<?php

/*
 * Custom permissions for Wiki-Answers
 * @author thepeskygeek
 */

////////// *
$wgGroupPermissions['*']['move'] = true; // Anons can rename questions

////////// user
// No changes required

////////// autoconfirmed
// This bundle has ConfirmEdit
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;
// ...and set the limit (4 days)
$wgAutoConfirmAge = 4*86000;
