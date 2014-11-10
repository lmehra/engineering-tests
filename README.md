Engineering Hiring Tests
=================

## Introduction
This test will cover the following aspects:

* Experience/Skills with Laravel framework
* MySQL relational database design and understanding
* Commiting codes with git and pull request workflow with github
 
## Summary
Imagine a service that provides users with restaurant offers that match the user's need, and your task is to design the database structure, work out the process and present it as a working laravel web app. 

### A few things we would like the app to do:
* user can find one or more offers by providing the following information
  * time of meal
  * budget
  * location
  * guests number
* once offers are displayed, user can take one offer and this information will be stored somewhere so user can come back and check it.
* once an offer is taken, user may NOT take another offer from the rest of the items within the time frame at the same location.

### NOTE: you do NOT neeed to do the following:
* There's no need to actually provide data entry screens or user sign ups, or even user information. Stick to the main purpose of the test only - just work around the search offer/take offer part.
* There's no need to make the frontend look beautiful - you may do so if you insist, but the time spent on this will be considered as well.
* Make sure your logic is clear and correct.

More details can be found below.

### Task 1. Data structure
The service requires the following data structure to be in the system (note this is a test so we are omitting other data that is not related), and your task is to design and implement the data structure in forms of mysql database and tables.

* restaurants offers information
  * what's in the offer? 
  * where is it available?
  * which restaurant is it?
  * how much is it?
  * how many guests at most can it serve?
  * is there a limit of minimum number of guests?
  * what time period of the day will it be available?
  * in which days will it be available?
  * will it expire?
  * can we turn it off if necessary, without losing all the data?
* restaurants information
  * what is the name?
  * where is it?
* offer taken - we want to store the offer somewhere when it's taken by user right?
  * which user took it? (hint: just use a user id here, no need to worry about the actual user information)  
  * what offer is it? 
   
Please provide the database schema in form of a .sql file.  

### Task 2. the web app
It goes without saying that this app is to be created using laravel - so go ahead and fork this repo, setup your local laravel environment, and work on the web app.

As described earlier on the page, the goal is to create a web app that provides the service, and this will require a few screens:
* a form for a user to provide information for her meal so we can give her a list of offers
* a screen that shows a list of offers once the form is submitted
* a button on each offer for the user to take the offer - and once an offer is taken, the rest should be no longer clickable (if you are not familiar with javascript, it's ok if you do the logic in php - as long as the user can not take more than 1 offer at the same criteria it's ok).
* a screen to show the details of the offer that was taken by the user

### Task 3. build and submit your app
*NOTE:* this is very important:
1. make sure you fork this repo and setup your web app in this repo, together with the .sql file for db schema, plus a .conf file for apache configuration for the site, also provide a little readme file to explain how this should be setup.
  1. hint: you may also want to prepopulate some data in the database and make sure these are included in the .sql file too.
2. ensure it's all working on your local, commit your codes, and start a pull request on github so we can review your codes.
3. that's it, happy coding!
