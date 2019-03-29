## Hijri Interiors

## About Laravel
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects

## Introduction:
It is an interior design website where users can browse through the catalogue of curtains, sofa cloth, blinds etc and if they like anything they can order it.
This has an admin panel as well in which there are roles defined, user, amdin, super admin. Super admin has the previleges to add multiple admin and set their previliges of what they can view or access.
## Installation
To run the application, install composer

windows:
	download composer and just install it like any other software, it will set the environmet variables itself

linux:
	Run the following commands:
		wget https://getcomposer.org/download/1.6.2/composer.phar
		chmod +x ./composer.phar 
		mv ./composer.phar /usr/bin/composer

Make sure the dependencies like php and its libraries are installed. Then just use the command "php artisan serve" and it will run the application on port localhost:8000 where 8000 is the port.

## Getting Started:
To run the application run the command:
	"php artisan migrate"
It will migrate the database schema and then you are good to go.
	
## Functionality:

####1)Contact US Emails:
	If a user wants to contact the company he can write his details and message and an email will be sent to the 		     company.

####2)Order with Google Places Api:
	As mentioned above, the users can order an item from the gallery or catalogue and while ordering the user can 		      select his location from google places autocomplete api to fill in the address conviniently.

####3)User Roles and previliges:
	From admin you can do crud operations in stock database. you can add aur revoke previliges to other user 		 roles. There are three different user roles i.e super admin, admin and user.

####4)Security:
	In this application jwt authentication is being used, other than that password hashing is also implemented. 		    SSL certificate is also installed.

####5)APIs:
	Client application is communicating with server application via REST APIs.

####6)Cloud Database Replication
	Google Cloud SQL is being used as the database for the application and there are replicas as well. Google SQL proxy service is being used to connect to the database and handle load balancing.
