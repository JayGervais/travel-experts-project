workshop 1 
Build an HTML page that will be the entry page for your travel website.  There should be some information about the agency, a menu that provides links to other pages, and any other features that you would like to include that will make your site look professional.
 
Your menu should provide links to other pages which you will also construct. While you are encouraged to add more features as time permits, the basic requirements are:

1.	A Main page that will welcome the customer to the site and provide links and menus to the other pages.
2.	A “Contact Us” page that has information about how to phone, email, or go to the agency.
3.	A “Vacation Package” page listing all vacation packages available.  This will be a static page at this time, but will be enhanced later to be dynamically generated from a database. This could be located on the Main page if your team decides that it would be a better design.
4.	A “Customer Registration” page that will allow a customer to set up an account with Travel Experts by entering their name, address (including city, province, country, and postal code), email address, home phone number, business phone number, user ID, and password, which will be used, after verification, to establish an account for future orders.  The data will be submitted to a test page (use bouncer.php) at this point, but this page will be enhanced later to become an order page with server-side scripting and database access.

workshop 2
Your team will develop PHP scripts which will provide dynamic generation of the web pages developed earlier, as well as capturing form data from customers.  The scripts will store and retrieve data using a MySQL database server.

A MySQL import script has been provided to set up a pre-built database for you to use. You are free to make any adjustments to the database that your application requires. You will need to use the following tables to enhance the web pages you developed earlier:
1.	Packages
2.	Products
3.	Packages_products
4.	Agencies
5.	Agents
6.	Customers
7.	Bookings

To install the database, use the MySQL import function and select the TravelExperts.sql file that has been provided for you. This script will generate the entire database including test data so you can focus on programming and not on DBA tasks during this module.

Assumptions:
1.	Customers make a booking for only one package per booking
2.	When a package is set up the price is never changed

Required scripts:
1.	Modify the web page that lists the packages available.  Instead of providing package data that is statically coded in the HTML, insert PHP code that will read the database and generate the package list from the travel package table.  Each package should display a description, start and end dates, and price.  Before including a package on the page, make sure that the package end date is greater than (or equal to) the current date, so only valid packages are listed. Also, check whether the package start date is less than the current date, and if it is, write out some CSS to make the start date bold and red.
2.	Re-design the contact page so that it is generated from the database and lists all the agencies, showing the agency address and phone number, followed by the contact information for each agent at that agency.
3.	When the package list is being generated, create an order button next to each package which will go to an order page that has a customer order form for that package.  Customers will enter their data and submit the order which will result in creation of a customer record and a booking record.  We know this is overly simplified, but at this point we are demonstrating that we can capture remote orders into the database to demonstrate the concept to the Travel Experts managers.
4.	If your team has 4 members, design an additional feature that you feel would be useful for the site.
