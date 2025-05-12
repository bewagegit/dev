<?php

//URL Details
define("BASE_URL","http://localhost/emfob/dist/");
define("BASE_URL_ADMIN","http://localhost/emfob-admin/dist/");

//Database Details
define("HOSTNAME","localhost");
define("DBNAME","job_portal");
define("USERNAME","root");
define("PASSWORD","");

//Password Hash key
define("PASSWORDHASHKEY","bewage@123");

//From email address
define("EMAILADDRESS","fromemailbewage@gmail.com");

//Table Details
define("CANDIDATES","candidates");
define("CANDIDATES_PROFILES","candidate_profiles");
define("COMPANIES","companies");
define("CONSULTANCIES","consultancies");
define("EMPLOYERS","employers");
define("EMPLOYERS_PROFILES","employer_profiles");
define("EXAMS","exams");
define("FREELANCERS","freelancers");
define("JOBS","jobs");
define("JOB_APPLICATIONS","job_applications");
define("JOB_CATEGORIES","job_categories");
define("JOB_POSTINGS","job_postings");
define("JOB_SKILLS","job_skills");
define("QUESTIONS","questions");
define("QUESTION_OPTIONS","question_options");
define("QUIZ_ANSWERS","quiz_answers");
define("QUIZ_ATTEMPTS","quiz_attempts");
define("USERS","users");
define("USERS_TYPES","users_types");

define("GENDER","gender");
define("NATIONALITY","nationality");
define("COMMUNICATION_METHOD","communication_method");
define("MARITAL_STATUS","marital_status");
define("WORK_EXPERIENCE","work_experience");
define("NOTICE_PERIOD","notice_period");
define("EMPLOYMENT_TYPE","employment_type");
define("HIGHEST_QUALIFICATION","highest_qualification");
define("PREFERRED_EMPLOYMENT_TYPE","preferred_employment_type");
define("EXPERIENCE_LEVEL","experience_level");
define("CATEGORIES","job_categories");

define("MENU_ITEMS","menu_items");

//start the session variable 
@session_start();

?>