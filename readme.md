# firstApp

## instalation 

* [download XAMPP](https://www.apachefriends.org/download.html) and install it 
* [download Git](https://git-scm.com/download/win) and install it 
* [download Composer](https://getcomposer.org/Composer-Setup.exe) and install it 
* [download nodeJs](https://nodejs.org/dist/v6.9.1/node-v6.9.1-x64.msi) and install it 
* [download HeidiSQL](http://www.heidisql.com/download.php) and install it
* [download NetBeans *All bundle](https://netbeans.org/downloads/) and install it 
* open cmd and run

```sh
npm install -g grunt-cli bower
```

* [download Source Tree](https://www.sourcetreeapp.com/) and install it
* open Source Tree and clone this project
* open in File Explorer where you have cloned the project and open a cmd to that path
* run the following commands in the previously opened cmd 

```sh

composer install

npm install

bower install

composer publish
```

* open and cmd as an administrator and run

```sh

mklink /J <xampp_instalation_folder>/htdocs/firstApp <clone_project_folder>/public
```

* open XAMPP control panel and start Apache and mySQL
* open HeidiSQL and connect to 

```sh
host: localhost
port: 3306
user: root
password: 
```
* create a new database called `myfirstapp`
* in the previous cmd with the path of the application run

```sh 

composer database
```
* open a browser and go to this [link](http://localhost/firstApp)
* import the project in netbeans 
