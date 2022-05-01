Readme File 
Teammates:
1)Medhi , Pranav Naresh (Student ID:1001756326)
2)Uppuluri, Sreekar Sai(Student ID:1001828077)
3)Podili, Sravanthi Sai(Student ID:1001878747)




Explanations for the implementation for our Phase 5:

We have kept the whole website and the Chat as different entities, The website defines the session variables upon logging in which are in turn used
by the Chatapp for displaying Usernames.
Explanation of the Chatapp:
We had to install the npm, socketio,express,nodemon,moment aforementioned dependencies for the implementation of the Chatapp.
Reason for selecting each of the entity: 1) npm(Node packet manager): This is the primary dependancy that makes the deployment of the chatapp on the 
localhost possible.
2)Express: This dependancy is the webframework being used.
3) Nodemon: This dependancy is the one that ensures that the website doesnt not require refreshing every now and then. 
This is one of the most important dependencies installed (this is the dependancy that is making the chat app the ChatApp!).
4)moment: (moment.js) is the dependancy that is used for formatting the time and displaying and various other facilities. Moment was used for
displaying the time the message was sent.
5)socketio: This the platform that is providing the chat message sending service(important!).
Javascript, Html, css were the format of files used for the implementation. The ChatApp was deployed on the localhost , So Xampp was a must.




Explanation about the MVC framework and the Website as a whole:
We used composer, Laravel , swiftmailer service.
1)Composer is the dependancy that forms the base for the laravel framework.
2)Laravel is the dependancy we used for defining the project in the MVC framwork. 
3)The swiftmailer service(smtp) was used for sending emails to the respective users either when they signup or when they have filed complaint 
and are awaiting a reply from the admin, or the building role.
Basis of the MVC framwork:
For converting our php project of the Phase 4 into a MVC framework we have to do the following :
1) Defining the validations as functions inside the Controller, Linking those error functions inside routes so that the proper functions are called upon specific 
events. The views part of the MVC framework consists of all the blade.php files which basically defines the pages as they will be visible to the user, calling the error
functions here helps the system to display all the validations. The views part also consists of the css from the previous phases
2) Media Queries were used for making the pages reponsive. 
3) The mail functionality is developed by using the making Controllers for mails and routing them through routes, the Controller defines the functions that are used for defining the 
format of the email. The blade.php files type="form" part is used for calling the functions that bring the event of sending the mail into happening, The mail has been personalised
for each user by calling the session variables inside the specific mail.blade.php files that basically define the formatting of the mail(this too comes under the views part).


 



References:
We have used the help of various site for getting a proper grasp of the concepts required for implementing the phase , 
Following is a list of the websites we referred and the purpose behind the referring:
1) We referred the site called tutorialspoint for learning how the mail function show be implemented in a MVC framework.
Following is the link for the same:
https://www.tutorialspoint.com/laravel/laravel_validation.htm#:~:text=Available%20Validation%20Rules%20in%20Laravel%20%20%20,%20%20Digits%20%209%20more%20rows%20\

2) We used the official php website getting the hang of the various functions and syntaxes which we didn't know or were unsure about.
Following is the link for the same:
https://www.php.net/manual/en/ 


3) We used the following link for getting an understanding of how the Chat functionality is to be implemented.
Following is the link for the same:
https://www.youtube.com/watch?v=jD7FnbI76Hg
 
4)We have made extensive use of Stackoverflow for the instances when we had any errors that we did not know about.
