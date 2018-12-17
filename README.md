# faq

Epic:

This is a FAQ project where users can ask questions and answers the 
questions. The new feature that I introduced in the project is Admin Panel.
Two roles of the users are specified which is 
1)Admin
2)User
The user can select to login as admin or register and login as user.
When logged in as Admin, he/she can see the number of registered email
id's of the user's whereas the user can create,update,delete the question 
and answers. User can also edit his/her Profile.
The admin can be logged in as user too by first logging in as user and then again by logging as
an Admin. In this way he/she is logged in as user as well as admin and it can be seen in admin page
Email - rohan@gmail.abc          
Password - password
By doing this no other user can register as admin and use his powers.
Dusk Testing
I have also implemented Dusk Testing in the project which tests all the 
the fields,buttons,links,forms and everything which is a part of the project.

User Stories:
Admin Panel
Users can register or login with their email id's and passwords as normal user.
Users can Add,delete,view,edit questions and answers.
Users can edit their profile pages in the profile link.
Admins can see a list of registered users in the admin home page.
Admin can see if he is logged in as user too or only as admin on his home page

Dusk Testing
User must be able to Register and Login as full Dusk testing is done without any errors.
User must be able to Create and Edit Profile as full Dusk testing is done without any errors.
User must be able to Create.Edit and Delete Questions as full Dusk testing is done without any errors.
User must be able to Create.Edit and Delete Answers as full Dusk testing is done without any errors.

Heroku Link : http://finalprjt.herokuapp.com/