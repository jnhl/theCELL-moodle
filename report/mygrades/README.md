moodle-report_mygrades
==================

A Moodle Report that shows all user grades

Introduction:
This report displays a searchable and sortable table with the User's grades per course.
When clicking a link from this table, the user will be redirected to their course grade overview.

Install instructions:
1. Copy the mygrades directory to the report directory of your Moodle instance
2. Visit the notifications page

Access the report:
The report can be accessed via the user profile (Activity Reports > My Grades report)
Access is controlled by the user context, teacher will be able to see this user's grades for the courses that they are teacher in
Users can only see their own grades
Admin and manager can see all grades for all users (unless permissions prohibit this)


This report is largely based on the work done by Karen Holland with Block Mygrades, but adds sorting and filtering.
For this the report requires jQuery to be enabled, otherwise sorting and searching will not be possible