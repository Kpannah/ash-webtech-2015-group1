#nurse.php class reference.


Methods

function nurse()
Constructor method

add\_nurse ( $fname,$sname,$age,$sex,$department )
Runs query to add to the nurse table


function edit\_nurse( $id,$fname,$sname,$age,$sex,$department )
Runs a query to update the details of a nurse given an id.

function delete\_nurse( $id )
Runs a query to delete a nurse given an id

function select\_all\_nurses()
Runs a query to select all nurses in the nurse table


fselect\_nurse( $id )
Runs a query to select a specific nurse from the nurse table given an id

search\_nurse( $st )
Runs a query to retrieve a nurse name containing certain words





#tasks.php class reference.

task ( ){}
Constructor method


add\_task ( $title,$description,$start\_time,$end\_time,$nurse\_id,$collaborator )
Runs query to add a task to the task table

edit\_task( $id,$title,$description,$start\_time,$end\_time,$nurse,$collaborator )
Runs query to update a task in the task table given an id.

delete\_task( $id )
Runs query to delete a task in the task table given an id



select\_task($id)
Runs query to select a task from the task table given an id

get\_tasks()
Runs query to get all the tasks from the task table



#department.php class reference.

add\_department($department\_name)
Runs query to add a department to the department table

select\_all\_departments()
Runs query to select all departments from the department table



Nursepage.php
This page connects to db and runs a query to select all nurses in the database and displays all of them to admin. Admin can the add a new nurse, edit the information of an existing nurse or delete the details of an existing nurse.

Assignedtasks.php
This page displays all tasks that have been assigned. Tasks can be added, edited and deleted.