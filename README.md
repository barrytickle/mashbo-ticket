# Draw a Ticket Test
## Tech stack
For this project, i used laravel to help compose a solid structure to the application, to help control the functionality behind the application using MVC as a form of interaction.

To view the results, please setup an **.env** file which is pointing to a blank db schema in MYSQL.

To setup the tech test, you'll first need to do the following:

`composer install`

`php artisan migrate --seed`

**Note**: All interaction is browser driven, all data will be tabular for this example.

### What you should be able to do:
 - You can create a draw, view all draws
- You can create a ticket for a draw, using a certain amount of tickets
- You will be limited to the amount of customers who have not been assigned a ticket.