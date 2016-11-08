# firstApp

## instalation 

* [download XAMPP](https://www.apachefriends.org/download.html) and install it 
* [download Git](https://git-scm.com/download/win) and install it 
* [download Composer](https://getcomposer.org/Composer-Setup.exe) and install it 
* [download nodeJs](https://nodejs.org/dist/v6.9.1/node-v6.9.1-x64.msi) and install it 
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
```

* open and cmd as an administrator and run

```sh

mklink /J <xampp_instalation_folder>/htdocs/firstApp <clone_project_folder>/public
```

* open XAMPP control panel and start Apache and mySQL
* open a browser and go to this [link](http://localhost/firstApp)
* will be added other instructions later
