#Class for the users

public
#_construct( )
Constructor
public
#_destruct( )
Destructor
public boolean
#user\_login( type $username, type $password )
Function to allow user login
public type
#user\_display\_created\_tasks( mixed $user\_id )
Function to display created tasks
public type
#user\_display\_assigned\_tasks( mixed $user\_id )
Function to display ssigned tasks
public type
#user\_preview\_task( type $task\_id )
Function to preview a selected id
public type
#user\_delete\_task( type $task\_id )
Function to delete a task
public type
#user\_add\_new\_task( type $task\_title, mixed $task\_description, mixed $user\_id, mixed $task\_collaborator, mixed $task\_start\_date, mixed $task\_end\_date )
Function to add a new task
public type
#user\_select\_collaborator( mixed $user\_id )
Function to allow user to select collaborator
public type
#user\_update\_task( type $task\_id, type $task\_title, type $task\_description, type $task\_collaborator, type $task\_start\_date, mixed $task\_end\_date )
Function to update a task
public type
#user\_search\_task( type $search\_text, mixed $user\_id )
Function to search for a task
public type
#user\_search\_created\_task( type $search\_text, mixed $user\_id )
Function to search for a task