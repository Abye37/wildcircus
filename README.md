# wildcircus
Wildcircus MALAPERT Mayté TOURS 
This starter kit is here to easily install wilcircus repository.
## Getting Started for Projects
### Prerequisites
1. Check php is installed
2. Check symfony is installed
3. Check composer is installed
4. Check yarn & node are installed
### Install
1. Clone this project with git clone `git clone https://github.com/Lirith-Drasar/wild-circus.gitt`
2. Move to the repository with `cd wild-circus/`
3. Run `composer install`
4. Run `yarn install`
5. Copy `.env` file and modify new copy in `.env.local`
6. Replace user, password and db_name in the line `DATABASE_URL=mysql://db_user:db_password@127.0.0.1:3306/db_name`in`.env.local`
### Working
1. Connect in mysql and create database wildcircusfive whith `CREATE DATABASE;` and check resulst whith `SHOW DATABASES;`.
2. Import wildcircusfive.sql whith `mysql -u username -p wildcircusfive<wildcircusfive.sql` (think replace username,databasename)
3. Enter your password. Dump is completed and you can check your database.
5. Run `php bin/console server:start` to launch your local php web server
6. Run `yarn run dev --watch` to launch your local server for assets
7. Go on `https://localhost:8000/` to visit the website
### Windows Users
If you develop on Windows, you should edit you git configuration to change your end of line rules with this command :
`git config --global core.autocrlf true`
