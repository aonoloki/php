<div style="text-align:center;># chAJAX !<br><br>
Un simple chat en Php/Ajax<br>
Inscription des utilisateurs obligatoires pour utiliser le chat<br>
Suppression automatique des messages 30mn après leurs publications<br>
Raffraichissement de la zone de chat chaques secondes<br>
# DB Sample<br><br>

Nom de la database : chat<br>
table :<br>
users<br>
user_id | integer, primary key, auto increment<br>
user_name | varchar(250)<br>
user_mail | varchar(250)<br>
user_pass | varchar(60)<br><br>

message :<br>
ID | integer, primary key, auto increment<br>
user_name | varchar(250)<br>
user_mail | text<br>
posted_at | datetime
</div>
