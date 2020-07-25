
# Turner Butler Newsletter Application Resource File + Database Dump

This Repository contains files to install the newsletter application on any designated server

**The main features of the application are :**

 - Landing page for Newsletter Subscription
 - Newsletter Unsubscription section in  Landing Page
 - Newsletter Admin Panel for creation of Newsletters + Newsletter Templates

The whole application is primarily divided into two sections , once section is the landing page which is used to capture newsletter requests whereas the second part is used to create newsletter.  Via logging in the admin application newsletters can be created.  

*The purpose of this wiki is to provide an understanding about the application and its intended use. However there might be need for debugging and fixing code to make it runnable on the new instance.*


# Understanding the Folder Structure
The `root`of the repository contains the files to the landing page. `index.php` is the starting point of the application.  Other files in the `root` level are used to run the functionalities of subscription and unsubscription of newsletter clients.

The newsletter admin panel application lies in the `newsletter-admin` folder . This folder contains an instance of the `Yii` Framework for rendering the admin application. This can be run on the server and has no additional dependencies which are required to be installed. However customisation will be required to make it functional.

Another important folder in the `root` level is the `yii` folder . This should never be altered as it may cause instabilities in the admin application.

 


# Technical Details

This software has been coded using the following :
 - PHP
 - Yii 1.x (PHP MVC Framework)
 - MySQL
 - Vanilla Javascript
 - HTML
 - Cascading Style Sheets (CSS)
 
 This application is intended to be served on Linux based server for mailing processes to work. 
 However code changes are possible to host it on a Windows Server. For Automatic Mailing it uses Crons / Automated Jobs.


## Database Dump 
The database dump is available in the `root` level of the repository . 

> File name / Link of the Database Dump

> [db-dump.zip](https://github.com/turnerbutlerdev/newsletter-tb/blob/master/db-dump.zip)

. This file has a complete dump containing all the relevant `sql` files required for serving the application on the intended host.

This Database needs to be installed before the application is tried to be hosted. 

## Installation Steps

> The below steps are to be followed once everything from the technical
> stack has been setup and is running on the server. Also it requires a developer with prior understanding of `Yii 1.x` Framework

 - To install the application , `git` needs to be installed on the
    server ecosystem.
  -  Clone the repository in the server using `git clone` command. 
  -  Change the Database settings to connect the database to the
    application.
  -  Setup required file rights on the server for the `logs` and `runtime`.
  - Once the above settings are done you can visit the host using `<hostname>/newsletter-admin`. There might be required changes which needs to be done to start the application.
  - The base landing page with subscription and unsubscription functionalities will be hosted against `<hostname>`.

As this software requires 	`CRON` for mailing , it needs to be setup using `daemon` or `root` permissions on the server. 

**CRON LIST for Automatic Mailing :** 

`*/15 * * * * /usr/local/bin/php MailSend1.php >/dev/null 2>&1`

`*/17 * * * * /usr/local/bin/php MailSend2.php >/dev/null 2>&1`

`*/19 * * * * /usr/local/bin/php MailSend3.php >/dev/null 2>&1`

`*/20 * * * * /usr/local/bin/php MailSend4.php >/dev/null 2>&1`

Parameters of the CRONS can be changed to emit `logs` regarding to mail status log.
Additional settings for `logs` can also be setup and hosted against the `mailLogs` folder in the `root` directory.

---

