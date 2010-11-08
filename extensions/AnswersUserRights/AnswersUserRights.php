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

////////// sysop
// Will be renamed to "supervisor"
$wgGroupPermissions['supervisor'] = $wgGroupPermissions['sysop'];
unset($wgGroupPermisions['sysop']);

////////// bureaucrat
// Also will be "supervisors"
$wgGroupPermissions['supervisor']['userrights'] = true;
unset($wgGroupPermissions['bureaucrat']); // bye, bye

////////// supervisor
// The merged sysop+bureaucrat groups
$wgGroupPermissions['supervisor']['suppressredirect'] = true;
