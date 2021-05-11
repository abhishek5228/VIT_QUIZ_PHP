# ONGOING VIT_QUIZ_PORTAL

VIT Quiz Portal(Adding QUIZ Section in VTOP)


NOTE:---As it is hosted on Local Host, we will try to show this project  with the help of external source (ngrok).


Teams Details:-

Team Leader:-Abhishek Kumar<br>
Web Designers:- Mandeep and Shruti shah<br>
Database Manager:-Rohit and Abhishek Kumar<br>
Portal Functionality responsibilty :- Abhishek Kumar<br>
Complete Backend Manager:- Abhishek Kumar and Rohit<br>
Script Writer:- Shruti Shah and Abhishek Kumar<br>
Debugger:- Abhishek Kumar and Rohit<br>



Abstract:
Quiz is a very important part of education and content revising. With the help of VIT Quiz Portal,particular faculty would be able to create and conduct quizzes for students who are registered to there respective courses.They not need to depend upon some external source,it would be available inside the VTOP under Quiz Section.Students can attend Quizes inside VTOP and can view there results in future under marks section in VTOP.Quizes will be time controled and amount of time alloted will be finalize by the admin itself.This idea can be implemented in  any colleges, universities or at home to check the preparation of students and revise contents of different courses.Server load will be not an issue in this case because number of students would always less than 150.

Manual systems are very time consuming and difficult to grade. This  would be able to develop, conduct and check the quizzes thus reducing the burden of academics staff and will provide efficient evaluation of students.

Problem statement:

We have came with some innovative idea which can overcome some problematic situation:

1. QUIZ will be available inside VTOP Login , so that they not need to depend on some other external source.
2. Marks of the quiz will be automaticaly reflects in the marks section inside VTOP and admin can also access to it,so that faculty don't need to do any after work after conducting Quiz.

.Admin will be able to add Questions from there admin Login on VTOP, will provide a proper framework for faculty so that they find easy to add Questions.


Reason for chosen this topic?

After going through VTOP we have seen one section is missing and that is QUIZ section where Students can easily give there quiz exams in single login in VTOP without any interruption or depending on certain external source. They can easily see the dates of the quiz in asssignments section and easily traverse to quiz section in same portal. This will somehow reduce some manpower and would be more efficient for academics faculty and students too.




Module:

Using Notepad++ editor and Xampp for Database.
Backend Side:-
1.PHP (Managing Backend Process).
2.Used Xampp server (For database management)
3.Apache Webserver(Establishing Connection Between Web(Localhost) and Server)
4.MySql Database.
4.PHP OOP Classes and Objects(For Functional Purpose). 

Frontend:-
1.PHP (fetching data from database and reflect it on frontend like login details and Quiz Questions)
2.HTML(Design of Webpage )
3.Used Vtop Source Code for reference(Frontend design).

SCREENSHOTS

DATABASE DETAILS:-
We have created total 5 Database named quiz_oops as for now.
1.Signup
2.Category
3.Question
4.adminsignup
5.result

Signup:-This is for storing signup details of the user.In this database table there are 5 columns id,name,email-id,pass and user.With the help of name and pass students will login into the portal.So here id is the primary key.

Categories:- This is for storing subjects category.Of which category(subject) student have to give quiz.In this Database table we have total 2 columns id and cat_name.This cat_name will be used in showing the question of that respective category.
Here id is primary key.

Questions:-This is for storing all the questions and the solutions of that respective questions with there id in category database.This database have total 8 columns id,question,ans1,ans2,ans3,ans4,ans cat_id.Here cat_id is foreign key and id is Primary Key.

Adminsignup:-This is for storing signup details of the admin.In this database there are 5 columns id,name,email-id,user and pass.With the help of name and pass Admins will login into the portal.So here id is the primary key.

Result:This is for storing all the details of the quiz marks of the student and it will reflect on admin side.In this database there are 3 columns id,name,marks.
Here id is Primary Key.

Quiz_oops Database
![image](https://user-images.githubusercontent.com/59703066/117833305-dba6a400-b293-11eb-81b9-522d021eacd0.png)


Signup Database
id->Primary Key

![image](https://user-images.githubusercontent.com/59703066/116801609-0b81d900-ab29-11eb-8bda-c1d883e6da1f.png)


Category Database:-
id→Primary Key

![image](https://user-images.githubusercontent.com/59703066/116801613-18063180-ab29-11eb-8ae5-afce16a278c1.png)


Questions Database:-
id→Primary Key
cat_id_→ Foreign Key

![image](https://user-images.githubusercontent.com/59703066/116801626-35d39680-ab29-11eb-9ce5-f83bf430095e.png)


Adminsignup Database:-
id->Primary Key

![image](https://user-images.githubusercontent.com/59703066/117833829-4bb52a00-b294-11eb-852c-ab6aabe8c07b.png)

COMPLETE FRONTEND DESIGN (STUDENT SIDE):-

For eg:-
Signup.php
name=Hardik@123.
email=hardikp@gmail.com.
pass=Hardik@123.
user=Hardik Pandya.

![image](https://user-images.githubusercontent.com/59703066/116801644-53086500-ab29-11eb-87f0-a55f2bb8f51d.png)


Signup Database:-
id=18 Hardik@123

![image](https://user-images.githubusercontent.com/59703066/116801647-5dc2fa00-ab29-11eb-9174-6082197d7553.png)


Vitlogin.php
user=Hardik@123.
pass=Hardik@123.

![image](https://user-images.githubusercontent.com/59703066/116801651-65829e80-ab29-11eb-8a88-a825e38ffa62.png)


vtophome.php

![image](https://user-images.githubusercontent.com/59703066/116801655-6e737000-ab29-11eb-8106-c0094ba1b52a.png)


user profile 

![image](https://user-images.githubusercontent.com/59703066/116801664-7c28f580-ab29-11eb-9d5a-0d22b8b88f46.png)



home4.php
 
![image](https://user-images.githubusercontent.com/59703066/116801672-864af400-ab29-11eb-8626-669c3fba1de4.png)
 
 
 
 
qus_show.php

![image](https://user-images.githubusercontent.com/59703066/116801680-9d89e180-ab29-11eb-993e-3d4cf3a3eb6e.png)



finalresult.php

![image](https://user-images.githubusercontent.com/59703066/116801683-a7134980-ab29-11eb-95de-115826d8205a.png)

COMPLETE FRONTEND DESIGN (ADMIN SIDE):-

For eg:-
adminlogin.php
name=Jayakumar Srinivasan.
email=jayak.vit.ac.in.
pass=jaya@123.
user=1234567.

adminlogin.php

![image](https://user-images.githubusercontent.com/59703066/117835789-c763a680-b295-11eb-8e7b-90441daa292f.png)


admin.php

![image](https://user-images.githubusercontent.com/59703066/117835979-f0843700-b295-11eb-8c72-03b24997a754.png)

admin.php(Question added)

![image](https://user-images.githubusercontent.com/59703066/117836333-38a35980-b296-11eb-87c3-3d6d65435ad3.png)

admin.php(Admin Login Details)

![image](https://user-images.githubusercontent.com/59703066/117836498-4d7fed00-b296-11eb-8324-fa0b32187346.png)


QUIZ PORTAL FLOWCHART

![image](https://user-images.githubusercontent.com/59703066/116801763-420c2380-ab2a-11eb-90ef-81d27acdb925.png)


QUIZ PORTAL PROTOTYPE

![image](https://user-images.githubusercontent.com/59703066/116801768-53553000-ab2a-11eb-81f4-60cbcdd58631.png)

CONCLUSION


In this thesis, we have focused on the automated system, which replaces the manual quiz system. But the interesting thing is that the thesis is not just an online quiz system; it has its own intelligent capability. This was actually our target feature of our thesis. Basically, we have tried to introduce the evaluation method of student-performance in
the online quiz. Here, the questions are appeared under the guidance of the admin. We have implemented it in our thesis and it works successfully in our system. In this system, an educational institute can make their examination procedure automated in their own VTOP portal. It gives the opportunity to the authority to register teachers for different subjects and also give the facility to the students to register their courses for the examinations using the OIQS. Though this is a MCQ based quiz system but it is a perfect MCQ based online quiz system that gives a lot of facilities to the users, as a modern quiz system should have. This system is designed basically for the educational institute but also can be developed for other examination systems like job interview, quiz contest and for other criteria. 



REFERENCES


1.[Complete PHP Tutorial:-](https://www.youtube.com/watch?v=at19OmH2Bg4&list=PLu0W_9lII9aikXkRE0WxDt1vozo3hnmtR)<br>
2.[PHP adding dynamic timer to page:-](https://www.youtube.com/watch?v=MabjuyWrDI4&t=235s)<br>
3.[PHP OOP Tutorial:-](https://www.youtube.com/watch?v=MVEAYafrgKM&list=PL0b6OzIxLPbwoi6Urr4LZTz2AMMCtzqDt)<br>
4.[Inserting database results into array in PHp:-](https://www.youtube.com/watch?v=gnkI7hIC2RU)<br>
5.[PHP Sessions:-](https://www.youtube.com/watch?v=MElkQpJ0PO4&list=PL3Y-E4YSE4waHmKVoZ5CsviKygYUA8B92)<br>
6.[Insering multiple checkbox values in database:-](https://www.c-sharpcorner.com/UploadFile/16154c/how-to-insert-multiple-checkbox-value-in-one-column-in-datab/)

