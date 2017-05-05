# chAJAX !<br><br>
Just a chat using Php/Ajax<br>
Users need to be registered to use the chat<br>
When a message is published since 30mn, it will be deleted<br>
Chat zone auto-update every second<br>
# DB Sample<br><br>
db name : chat<br>
table :<br>
users<br>
user_id | integer, primary key, auto increment<br>
user_name | varchar(250)<br>
user_mail | varchar(250)<br>
user_pass | varchar(60)<br><br>
message :<br>
ID | integer, primary key, auto increment<br>
user_name | varchar(250)<br>
message | text<br>
posted_at | datetime
