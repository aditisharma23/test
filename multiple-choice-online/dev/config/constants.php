<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables
    |--------------------------------------------------------------------------
    |
    | This is a set of variables that are made specific to this application
    | that are better placed here rather than in .env file.
    | Use config('your_key') to get the values.
    |
    */


      /* Home Controller Start */
    'Contactus_html' => env('Contactus_html',"User #name# Send a query there email is #email# phone no. #phone# and there message is #message#"),
    'Contactus_header' => env('Contactus_header','Contact Us Query Subject: #Subject#'),
    'Contactus_btn_html' => env('Contactus_btn_html','Click Here To Visit Website'),
    'Contactus_subject' => env('Contactus_subject','Contact Us Query'),
    
    'Reffer_html' => env('Reffer_html',"#name# is invite you to join on multiple choice, Please visit the following link given below:"),
    'Reffer_header' => env('Reffer_header','Friend Invitation'),
    'Reffer_btn_html' => env('Reffer_btn_html','Click here to visit'),
    'Reffer_subject' => env('Reffer_subject','Friend Invitation'),
      /* Home Controller End */
      
       /* Admin Controller Start */
       'Requestaction_html' => env('Requestaction_html',"Admin has #action# your withdraw request of amount $ #amount#, Please visit the following link given below:"),
       'Requestaction_header' => env('Requestaction_header','Amount Withdraw Request'),
       'Requestaction_btn_html' => env('Requestaction_btn_html','Click here to visit'),
       'Requestaction_subject' => env('Requestaction_subject','Amount Withdraw Request'),
       'Requestaction_notification_title' => env('Requestaction_notification_title','Amount Withdraw'),
       'Requestaction_notification_description' => env('Requestaction_notification_description','<b> Admin </b> has #action# your withdraw request amount of $ #amount#'),
       /* Admin Controller End */
       
    /* User Controller Start */
    'Forgetpass_html' => env('Forgetpass_html',"To reset your password, Please visit the following link given below:"),
    'Forgetpass_header' => env('Forgetpass_header','Reset Password'),
    'Forgetpass_btn_html' => env('Forgetpass_btn_html','Click here to visit'),
    'Forgetpass_subject' => env('Forgetpass_subject','Reset Password'),
    'Applyamount_html' => env('Applyamount_html','#name# has been sent withdraw request of amount $ #amount#'),
    'Applyamount_header' => env('Applyamount_header','Amount Withdraw Request'),
    'Applyamount_btn_html' => env('Applyamount_btn_html','Click here to visit'),
    'Applyamount_subject' => env('Applyamount_subject','Amount Withdraw Request'),
    'Applyamount_notification_title' => env('Applyamount_notification_title','Amount Withdraw'),
    'Addquestions_html' => env('Addquestions_html','#name# has been updated a question'),
    'Addquestions_header' => env('Addquestions_header','User updated a questions'),
    'Addquestions_btn_html' => env('Addquestions_btn_html','Click here to visit'),
    'Addquestions_subject' => env('Addquestions_subject','User updated a question'),
    'Editquestions_html' => env('Editquestions_html',"#name# has been updated a question"),
    'Editquestions_header' => env('Editquestions_header','User updated a question'),
    'Editquestions_btn_html' => env('Editquestions_btn_html','Click here to visit'),
    'Editquestions_subject' => env('Editquestions_subject','User updated a question'),
    'Editquestions_notification_title' => env('Editquestions_notification_title','User updated a question'),
    'Editquestions_notification_description' => env('Editquestions_notification_description','<b> #name# </b> has been updated a question'),
    
    /* User Controller End */

];
?>

