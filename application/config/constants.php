<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

define('USERALREADY', "User already registered");
define('USERRAGISTER', "User has been registered successfully. Please check you email.");
define('LOGINSUCCESSFULL',"User login successfully");
define('LOGINFAIL',"Login fail please check your email id and password");
define('FOUND',"Your password updated successfully. Please check your email address.");
define('NOTFOUND',"No data found.");
define('USER_NOT_FOUND',"User not found");
define('NOTUPDATE',"Password not update");
define('AVAILABLE',"User available");
define('NOTAVAILABLE',"User not find");
define('EDITSUCCESSFULL',"Profile has been updated successfully");

define('EDITFAIL',"Profile has been not updated");

define('USERNOTFOND',"Profile not fount you have now registered as artist");

define('NOT_ACTIVE',"User not active.");

define('PASS_NT_MTCH',"Invalid Password.");
/*Get All Category*/
define('ALL_CAT',"Get all Categories");

/*No data*/
define('NO_DATA',"No data found.");

/*Get All Category*/
define('ALL_SKILLS',"Get all Skills");

/*Get All Category*/
define('ALL_ARTISTS',"Get all vendors");

/*Artist Update*/
define('ARTIST_UPDATE',"Vendor updates successfully.");

/*Something went to wrong. Please try again later.*/
define('TRY_AGAIN',"Opps it seems that server is under manitaince please wait for while.");

/*Product Added successfully.*/
define('PRODUCT_ADD',"Product Added successfully.");

/*Qualification Added successfully.*/
define('QUALIFICATION_ADD',"Qualification Added successfully.");

/*Comment Added successfully.*/
define('ADD_COMMENT',"Comment Added successfully.");

/*Please Check you Email*/
define('CHECK_MAIL',"Please Check you Email and active your account by email verification. Thank you");

/*Gallery image added successfully.*/
define('ADD_GALLERY',"Gallery image added successfully.");

/*Appointment booked successfully.*/
define('BOOK_APP',"Booking confirmed successfully.");

/*Get all Appointments*/
define('GET_APP',"Get all Appointments");

define('NOT_ACT',"User not active. Please contact to admin.");

define('IN_USER',"Invalid user key.");

/*CURRENCY TYPE*/
define('CURRENCY_TYPE',"USD");

/*Booking end successfully*/
define('BOOKING_END',"Booking end successfully. Please go inside the invoice section and check the unpaid invoice for amount confirmation and get the paid soon.");

/*"Get my current booking."*/
define('CURRENT_BOOKING',"Get my current booking.");

/*Get my invoice.*/
define('MY_INVOICE',"Get my invoice.");

/*Payment Confirm successfully*/
define('PAYMENT_CONFIRM',"Payment Confirm successfully.");
/*Appointment declined successfully*/
define('APP_DECLINE',"Appointment declined successfully.");

/*Registration Email Subject*/
define('REG_SUB',"Ipaayos Mo Registration");

/*Password Email Subject*/
define('PWD_SUB',"Ipaayos Mo Password");

/*Invoice Email Subject*/
define('IVE_SUB','Ipaayos Mo Invoice');

/*Database Tables*/
/*appointment table*/
define('APP_TBL','appointment');
/*user table*/
define('USR_TBL','user');
/*artist table*/
define('ART_TBL','artist');
/*artist table*/
define('CAT_TBL','category');
/*artist_booking table*/
define('ABK_TBL','artist_booking');
/*booking_invoice*/
define('IVC_TBL','booking_invoice');
/*Chat table*/
define('CHT_TBL','chat');
/*discount_coupon table*/
define('DCP_TBL','discount_coupon');
/*gallery table*/
define('GLY_TBL','gallery');
/*notifications table*/
define('NTS_TBL','notifications');

/*notifications table*/
define('AJB_TBL','applied_job');


/*NOtification Type*/
define('BOOK_ARTIST_NOTIFICATION','10001');
define('DECLINE_BOOKING_ARTIST_NOTIFICATION','10002');
define('START_BOOKING_ARTIST_NOTIFICATION','10003');
define('END_BOOKING_ARTIST_NOTIFICATION','10004');
define('CANCEL_BOOKING_ARTIST_NOTIFICATION','10005');
define('ACCEPT_BOOKING_ARTIST_NOTIFICATION','10006');
define('CHAT_NOTIFICATION','10007');
define('USER_BLOCK_NOTIFICATION','1008');
define('TICKET_COMMENT_NOTIFICATION','10009');
define('WALLET_NOTIFICATION','10010');
define('JOB_NOTIFICATION','10011');
define('JOB_APPLY_NOTIFICATION','10012');
define('DELETE_JOB_NOTIFICATION','10013');
define('BRODCAST_NOTIFICATION','10014');
define('TICKET_STATUS_NOTIFICATION','10015');
define('ADMIN_NOTIFICATION','10016');

/*Subscription Type*/
define('FREE', 'Free');
define('MONTHLY', 'Monthly');
define('QUARTERLY', 'Quarterly');
define('HALFYEARLY', 'Half Yearly');
define('YEARLY', 'Yearly');

define('ALL_PACKAGES', "Get all Packages.");

define('PKG_NOT', "Package not found.");

define('SUB_SUCCESS', 'Subscription successfully.');

define('ALRAEDY_SUB', 'Already Subscribed.');

define('SUB_HISTORY', 'Subscription history found.');

define('MY_SUB', 'Get my Subscription.');

define('NOT_SUB', 'You are not Subscribed user.');
/*Get All Category*/
define('ALL_FIELD_MANDATORY',"All Fields are mandatory.");

define('PLZ_UP_PRF', "Please update your profile. Then applied on a job.");

define('DTL_UPLD', "Your Detail Uploaded successfully.");

define('FILL_PAY', "Please fill your palpay detail.");

define('GET_MYPAY', "Get my paypal detail.");

/*Coupon Screen text*/
define('COUPON_TEXT',"Refer Your Friends and Earn Money with Referral Links Ipaayos Mo Services is a smartphone app that allows users to easily sell, buy, Servies. To get started with their referral program, download the app to your Apple or Android device. Once installed, open the app and go to your account and click on “Invite Friends”. You can then share your referral link via text, email, or social media. When your friend buys or sales any service through the app, you'll both earn upto 50% of the profit made by company in that deal!");

/*notifications table*/
define('SENDER_EMAIL','cander.appcode@gmail.com');

define('CHT_NEW_TBL','chat_new');
/*discount_coupon table*/
define('CRYSET_TBL','currency_setting');

define('PYL_DTS_TBL','paypal_deatils');

define('APP_NAME','Ipaayos Mo');

/*Firebase notifications Key for user*/
define('USER_FIREBASE_KEY','AAAA88H7RTI:APA91bGMT1TyNoDJEEgT6Y--F47XBcEkxpyb4LCODiGDuh1gzPPeS3-jPNYcRfM7pa1xQSNjbiDgCQLir5zhdhhFwDMi9fauLzRL6azqFmD3k6EWqrDi5Fll6jZAVLWN4MfdkUrY0mwX');

/*Firebase notifications Key for Artist*/
define('ARTIST_FIREBASE_KEY','AAAA88H7RTI:APA91bGMT1TyNoDJEEgT6Y--F47XBcEkxpyb4LCODiGDuh1gzPPeS3-jPNYcRfM7pa1xQSNjbiDgCQLir5zhdhhFwDMi9fauLzRL6azqFmD3k6EWqrDi5Fll6jZAVLWN4MfdkUrY0mwX');