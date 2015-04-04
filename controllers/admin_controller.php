<?php

if ( isset ( $_REQUEST [ 'cmd' ] ) )
{
    $cmd = $_REQUEST[ 'cmd' ];
    
    switch ( $cmd )
    {
        case 1:
            task_preview ( );
            break;
        
        case 2:
            delete_task ( );
            break;
        
        case 3:
            add_task ( );
            break;
         
        default:
            echo '{"result":0,message:"unknown command"}';
            break;
    }//end of switch
    
}//end of if



/**
 * Function to get preview of a task
 */
function task_preview ( )
{
     include '../models/admin_class.php';
     
     $obj=new Admin ( );
     $task_id = $_REQUEST [ 'task_id' ];
     $obj->admin_preview_task ( $task_id );

     while ( $row = $obj->fetch ( ) )
     {
         echo '{"result":1, "task_title":"' .$row['task_title'].'",'
                . '"user_fname":"' .$row['user_fname'].'",'
                 . '"user_sname":"' .$row['user_sname'].'",'
                . '"task_description":"' .$row['task_description'].'"}';
     }
}//end of task_preview()

/**
 * Function to display all tasks
 */
function display_all_tasks ( )
{
    include '../models/admin_class.php';
    $obj = new Admin ( );
        
    if ( $row = $obj->admin_display_all_tasks ( ) )
    {
    echo '{"result":1, "id":"' .$row['task_id'].'",'
                . '"title":"' .$row['task_title'].'",'
                . '"description":"' .$row['task_description'].'"}';
    }
    else
    {
        echo ' { "result":0, "status": "Failed to display" }';
    }
}//end of display_all_tasks()


function delete_task ( )
{
    include '../models/admin_class.php';
    
    $task_id = $_REQUEST [ 'task_id' ];
    $obj = new Admin ( );
    echo ' { "result":1, "status": "Successfully deleted" }';
    if ( $obj->admin_delete_task ( $task_id ) )
    {
        echo ' { "result":1, "status": "Successfully deleted" }';
    }
    else
    {
        echo ' { "result":0, "status": "Failed to delete" }';
    }
}//end of delete_task ( )


/**
 * Function to add a new task
 */
function add_task ( )
{
    include '../models/admin_class.php';
    
    $task_title = $_REQUEST [ 'task_title' ];
    $task_description = $_REQUEST [ 'task_description' ];
    $user_id = $_REQUEST [ 'user_id' ];
    
    $obj = new Admin ( );
        
    if ( $obj->admin_add_new_task ( $task_title, $task_description, $user_id ) )
    {
        echo ' { "result":1, "status": "Successfully added a new task to the database" } ';
    }
    else
    {
         echo ' { "result":0, "status": "Failed to add a new task to the database" }';
    }
}//end of add_task ( )