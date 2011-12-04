This is a simple set of PHP scripts to encrypt passwords in a Joomla users table.

When you import users to Joomla from some old site, which was not in Joomla, the password encryption algorith used in the old site might be different from the one used in Joomla [1]. This scripts help you make the login work for the imported users.

**Step 1**: Export the schema (mysqldump --no-data) of jos_users table and create a local (empty) table.

**Step 2**: Import the users from old site, with approriate queries.

**Step 3**: If the passwords can be decrypted (which means the old site was unsecure ;)), update the password field with decrypted passwords.
        Else, write some script to generate random passowords and email it to the users.

**Step 4**: Run "php update_passwords.php" from your terminal. Run "php update_passwords.php" from your terminal

**Step 5**: Export the table to an SQL file.

**Step 6**: The exported SQL file will contain table creation statements as well. Delete all except the INSERT statements.

**Step 7**: Import the updated SQL file in your Joomla site's database.


[1] http://forum.joomla.org/viewtopic.php?p=977496#p977496