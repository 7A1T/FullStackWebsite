# FullStackWebsite
A website project to practice my full stack and object oriented development in databases, backend and frontend using php and docker containter

## Roadmap
- [] create top level docker containers
- [] build mysql database
- [] build backend and api in php
- [] create frontend (language unknown as of right now)

## Database
MySQL is a relational database. A relational database has tables, rows and columns that can be queried through the SQL language.

relational databases are known for their ability to handle large queries for large amounts of data and many users while being lightweight.
The downsides of a relational database are their lack of flexibility (all tables must be structured) and monolithic nature compared to non relational databases.

Relational databases are not just one big table, you can make multiple tables and link them together using **foreign keys**. Furthermore, we can use these foreign keys to speed up data lookups by creating additional brief tables that contain subsets of data; however this does reduce write performance.

### Schema
The schema was built using drawsql.app.
![database schema](https://drawsql.app/teams/personal-projects-14/diagrams/gomibostockdb/embed)
