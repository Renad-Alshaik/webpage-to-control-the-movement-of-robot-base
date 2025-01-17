# webpage-to-control-the-movement-of-robot-base

# Task Instructions
* Design a webpage to control the movement of robot base.
* Create a database to store the data of direction.
* Build a php page to retrieve the last value in database

# Objective 
develop a webpage that allows users to send directional commands ( "Forward","Left","Right","Backward","Stop" ) to a robot. These commands will be stored in a MySQL database, and you will also create a PHP page that retrieves and displays the last command sent.

# Steps
1- Create an HTML File: named control.html -> it include buttons for sending directions and a section to display the last direction. 
2- Create a Database: Using phpMyAdmin to create a new database.. Name it robot_control , Within the robot_control database, create a table named directions have three columes(id,direction,timestamp)
3- Create the PHP Scripts: * Create control.php-> This script will handle incoming direction requests and store them in the database. , *Create fetch_last.php-> This script will retrieve the last inserted direction from the database.

Note: I upload all file and screenshot with video to see how work the webpage and picture to database after run the web and save the direction
