#Functions located in the project

ash-webtech-2015-group1

Classes summary

adb

logerror

User	Creating an instance of other class in the include files

Functions summary

add\_task	Function to add a new task

delete\_task	Function to delete a task

delete\_tasks	Function to delete a task

display\_created\_task	Function to display created task by user

display\_tasks	Function to display all tasks

log\_msg

search\_created\_tasks	Function for user to search created tasks

search\_task	Function to search for a task

select\_collaborator	Function to select a collaborator

sendMail

task\_preview	Function to get preview of a task

update\_task	Fucntion to update a task

user\_login	Function for user to login



add\_task
Function to add a new task
Located at controllers/user\_controller.php

Function delete\_task
Function to delete a task
Located at controllers/user\_controller.php

Function delete\_tasks
Function to delete a task
Located at controllers/user\_controller.php

Function display\_created\_task
Function to display created task by user
Located at controllers/user\_controller.php

Function display\_tasks
Function to display all tasks
Located at controllers/user\_controller.php

Function search\_created\_tasks
Function for user to search created tasks
Located at controllers/user\_controller.php

Function search\_task
Function to search for a task
Located at controllers/user\_controller.php

Function select\_collaborator
Function to select a collaborator
Located at controllers/user\_controller.php

Function task\_preview
Function to get preview of a task
Located at controllers/user\_controller.php

Function update\_task
Fucntion to update a task
Located at controllers/user\_controller.php

Function user\_login
Function for user to login
Located at controllers/user\_controller.php


Class User

Creating an instance of other class in the include files



adb

Extended by User

Located at models/user\_class.php

Methods summary

public

# _construct( )_

Constructor

public

# _destruct( )_

Destructor

public boolean

# user\_login( type $username, type $password )

Function to allow user login

public type

# user\_display\_created\_tasks( mixed $user\_id )

Function to display created tasks

public type

# user\_display\_assigned\_tasks( mixed $user\_id )

Function to display ssigned tasks

public type

# user\_preview\_task( type $task\_id )

Function to preview a selected id

public type

# user\_delete\_task( type $task\_id )

Function to delete a task

public type

# user\_add\_new\_task( type $task\_title, mixed $task\_description, mixed $user\_id, mixed $task\_collaborator, mixed $task\_start\_date, mixed $task\_end\_date )

Function to add a new task

public type

# user\_select\_collaborator( mixed $user\_id )

Function to allow user to select collaborator

public type

# user\_update\_task( type $task\_id, type $task\_title, type $task\_description, type $task\_collaborator, type $task\_start\_date, mixed $task\_end\_date )

Function to update a task

public type

# user\_search\_task( type $search\_text, mixed $user\_id )

Function to search for a task

public type

# user\_search\_created\_task( type $search\_text, mixed $user\_id )

Function to search for a task

Methods inherited from adb

adb(), close\_connection(), establish\_connection(), fetch(), get\_insert\_id(), get\_num\_rows(), log\_error(), query()

Properties inherited from adb

$er\_code\_prefix, $error, $link, $result, $str\_error


Class adb

Direct known subclasses

logerror, User

Located at models/adb.php

Methods summary

public

# adb( )

public

# log\_error( mixed $level, mixed $code, mixed $msg, mixed $mysql\_msg = "NONE" )

logs error into database using functions defined in log.php

public

# establish\_connection( )

creates connection to database

public

# fetch( )

returns a row from a data set

public

# query( mixed $str\_sql )

connect to db and run a query

public

# get\_num\_rows( )

returns number of rows in current dataset

public

# get\_insert\_id( )

returns last auto generated id

public

# close\_connection( )

Function to close the sql connection

Properties summary

public mixed	$str\_error

#

public mixed	$error

#

public mixed	$link

#

public mixed	$er\_code\_prefix

#

public mixed	$result

#


Class logerror

adb

Extended by logerror

Located at models/logerrors.php

Methods inherited from adb

adb(), close\_connection(), establish\_connection(), fetch(), get\_insert\_id(), get\_num\_rows(), log\_error(), query()

Properties inherited from adb

$er\_code\_prefix, $error, $link, $result, $str\_error


