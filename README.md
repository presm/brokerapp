# BrokerApp

API implementation of Broker test application 

## Installation

Pull repo to a Laravel enabled web interface, Laragon was used to develop the application, edit .env to point to your database


## Commands to be run

"php artisan migrate" this will setup the database tables. migration files located at /database/migrations

"php artisan db:seed --class=ClientSeeder" \
"php artisan db:seed --class=CustomersSeeder"\
"php artisan db:seed --class=InsurerSeeder"\
"php artisan db:seed --class=PoliciesSeeder"

This will seed the database tables from the supplied JSON file



## End Points
There is an endpoint for each database table to return data on each and to setup for vue based crud actions on the tables

[url]/app/clients \
[url]/app/customers \
[url]/app/insurers \
[url]/app/policies

This was to allow a clients landing page to move into view policies for that client and from their be able to access further details for customers and insurers. 

This was designed to allow the JSON file to expand to accomodate additional clients. Add additional details for each customer, and Insurer without replication of data, and allow policy specific data to be held in the policy table. 
depending on the number of policy types I would consider having a policy type lookup table. 
