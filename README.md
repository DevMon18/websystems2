# websystems2
A websystems for Computer Laborator Management System for EVSU BSIT students


## Features
- Login and Signup with verfication code
- Dashboard with dark mode feature
- PC Check-ins and Checkouts
##SMTP
1. Go to the (C:xampp\php) and open the PHP configuration setting file then find the [mail function] by scrolling down or simply press ctrl+f to search it directly then find the following lines and pass these values. Remember, there may be a semicolon ; at the start of each line, simply remove the semicolon from each line which is given below.

  [mail function]
  For Win32 only.
  http://php.net/smtp
  SMTP=smtp.gmail.com
  http://php.net/smtp-port
  smtp_port=587
  sendmail_from = your_email_address_here
  sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"

2. Now, go the (C:\xampp\sendmail) and open the sendmail configuration setting file then find sendmail by scrolling down or press ctrl+f to search it directly then find the following lines and pass these values. Remember, there may be a semicolon ; at the start of each line, simply remove the semicolon from each line which is given below.

  smtp_server=smtp.gmail.com
  smtp_port=587
  error_logfile=error.log
  debug_logfile=debug.log
  auth_username=your_email_address_here
  auth_password=your_password_here
  force_sender=your_email_address_here (it's optional)

###Note: 
Google removed the “Less secure apps” feature on May 30, 2022. So you need to do some extra steps and make changes in the files to send mail from localhost using Gmail.
Instead of using your Google account password as auth_password in sendmail configuration file, you need to use an App password which is 16 characters long.

To create an app password, go to manage your google account > Click Security > Under “Signing in to Google,” select App passwords > Select App & Device, and then you’ll get a 16-character code and this is your password. For more details about creating App
