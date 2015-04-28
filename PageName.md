= Introduction = This code is for the department that the nurses work for so we have the department name,location,Department head ids and the functionality that allow the user to add,delete,edit and search for a department.


Methods and their functions

Class Name: Department.php

function get\_department($id)
This method is responsible to get all the departments and the necessary information about the department by using the ids of the department.

function search\_by\_name($department\_name)
> This is a search function that search through the database of the department by using the department name. When this function is implement it bring out all the department in the database that have the name entered in order to invoke the search method.


function add\_departments($department\_name,$departmentloaction,$departmentsheadsid)
As the name states it,it allows the user to add a department where it bring out a form that allows you to add the all the information about the new department you will like to add to the database.

function deleteDepartment($id)
This function allows the user to delete a department when this function is invoked it uses the id of the department to delete the department.


function updateDepartment($id,$department\_name,$departmentloaction,$departmentheadsid)
> This function give user the power to update the department information if may they entered the wrong information about their department. so its allow the user to change every existing information about the department they will like to edit.

