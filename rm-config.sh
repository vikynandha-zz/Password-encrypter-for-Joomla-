git rm --cached mysql_config

if [ ! -r ".gitignore" ]
then
    echo ".gitignore file not present. Creating it."
    touch .gitignore
fi

if [ $(grep '^mysql_config$' .gitignore | wc -m) -eq 0 ]
then
    echo "mysql_config" >> .gitignore
    echo "Added mysql_config to .gitignore"
else
    echo "mysql_config already in .gitignore"
fi