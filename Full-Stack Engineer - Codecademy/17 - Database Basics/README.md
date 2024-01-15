# Database Basics

* **A database **is a set of data stored in a computer. This data is usually structured in a way that makes the data easily accessible.

### Introduction to relational databases

* **A relational database** is a type of database. 
    * It uses a structure that allows us to identify and access data in relation to another piece of data in the database.   
    * Often, data in a relational database is organized into tables.
* **Tables**: Rows and Columns
    * Tables can also have many columns of data. Columns are labeled with a descriptive name (say, age for example) and have a specific data type.
* **Relational Database Management System (RDBMS)**
    * (RDBMS) is a program that allows you to create, update, and administer a relational database. 
    * Most relational database management systems use the SQL language to access the database.
* **SQL (Structured Query Language)**
    * A programming language used to communicate with data stored in a relational database management system
    * Many RDBMSs use SQL (and variations of SQL) to access the data in tables. 
* Popular Relational Database Management Systems:
    * MySQL
        * MySQL is the most popular open source SQL database. 
        * It is typically used for web application development,
        * Often accessed using PHP.
        * Easy to use, inexpensive, reliable & big community.
    * PostgreSQL
        * PostgreSQL is an open source SQL database 
        * The main disadvantage of PostgreSQL is that it can be slower in performance than other databases such as MySQL
    * Oracle DB
        * Oracle Corporation owns Oracle Database, and the code is not open sourced.
    * SQL Server
        * Microsoft owns SQL Server. 
    * SQLite
        * SQLite is a popular open source SQL database.

### Introduction to NoSQ
* NoSQL is short for “not-only SQL”, “non-relational” or “non-SQL”. 
* Any database technology that stores data differently from relational databases can be categorized as a NoSQL 
* A flexible and more scalable database solution that appeared when     datasets became exponentially larger and more complex
* Pros:
    * Scalability: NoSQL was designed with scalability as a priority.      
    NoSQL can be an excellent choice for massive datasets that need to be distributed across multiple servers and locations.
    * Flexibility: Unlike a relational database, NoSQL databases don’t require a schema.       
    This means that NoSQL can handle unstructured or semi-structured data in different formats.
    * Developer Experience: NoSQL requires less organization and thus lets developers focus more on using the data than on figuring out how to store it.
* Cons:
    * Data Integrity: NoSQL databases follow BASE principles (basic availability, soft state, and eventual consistency) and can often sacrifice integrity for increased data distribution and availability.       
    Some NoSQL databases do offer ACID compliance.
    * Language Standardization: While some NoSQL databases do use the Structured Query Language (SQL), typically, each database uses its unique language to set up, manage, and query data.
* Types of NoSQL Databases
    * A **key-value** database consists of individual records organized via key-value pairs.
    * A **document-based** (also called document-oriented) database consists of data stored in hierarchical structures. 
    * A **graph** database stores data using a graph structure.  
    * A **column-oriented** NoSQL database stores data similar to a relational database. 
        * However, instead of storing data as rows, it is stored as columns. 
        * Column-oriented databases aim to provide faster read speeds

### Database Manipulation

* SQL is a programming language designed to manipulate and manage data stored in relational databases.
    * A relational database is a database that organizes information into one or more tables.
    * A table is a collection of data organized into rows and columns.
* A statement is a string of characters that the database recognizes as a valid command.CREATE TABLE creates a new table.
    * `INSERT INTO` adds a new row to a table.
    * `SELECT` queries data from a table.
    * `ALTER TABLE` changes an existing table.
    * `UPDATE` edits a row in a table.
    * `DELETE FROM` deletes rows from a table.
* Check: *manipulation.sqlite*

### QUERIES

* How to query data from a database using SQL. 
    * `SELECT` is the clause we use every time we want to query information from a database.
    * `AS` renames a column or table.
    * `DISTINCT` return unique values.
    * `WHERE` is a popular command that lets you filter the results of the query based on conditions that you specify.
    * `LIKE` and BETWEEN are special operators.
    * `AND` and `OR` combines multiple conditions.
    * `ORDER` BY sorts the result.
    * `LIMIT` specifies the maximum number of rows that the query will return.
    * `CASE` creates different outputs.

### AGGREGATE FUNCTIONS

* **SQL Queries** can also **perform calculations** on the raw data to answer specific data questions.
* `COUNT()`: count the number of rows
* `SUM()`: the sum of the values in a column
* `MAX()`/`MIN()`: the largest/smallest value
* `AVG()`: the average of the values in a column
* `ROUND()`: round the values in the column

* **Calculations** performed on multiple rows of a table are called **aggregates (functions)**.
* `GROUP BY` is a clause used with aggregate functions to combine data from one or more columns.
* `HAVING` limit the results of a query based on an aggregate property.

### MULTIPLE TABLES

* Relationships between tables in relational databases and how to query information from multiple tables using SQL:
* `JOIN` will combine rows from different tables if the join condition is true.
* `LEFT JOIN` will return every row in the left table, and if the join condition is not met, NULL values are used to fill in the columns from the right table.
* **Primary key** is a column that serves a unique identifier for the rows in the table.
* **Foreign key** is a column that contains the primary key to another table.
* `CROSS JOIN` lets us combine all rows of one table with all rows of another table.
* `UNION` stacks one dataset on top of another.
* `WITH` allows us to define one or more temporary tables that can be used in the final query.

### Designing Relational Databases

* PostgreSQL is a popular database management system that stores information on a dedicated database server instead of on a local file system.
* A **database schema** is documentation that helps its audience such as a database designer, administrator and other users interact with a database.    Like an architectural blueprint
* When designing a database schema consider the following steps:
    * Define the purpose of your database
    * Find the information that make up the database
    * Organize your information into tables
    * Structure your tables into columns of information
    * Avoid redundant data that leads to inaccuracy and waste in space
    * Identify the relationships between your tables and implement them
* FREE: **online database design tools**
    * DbDiagram.io - a free, simple tool to draw ER diagrams by just writing code, designed for developers and data analysts.
    * SQLDBM - SQL Database Modeler
    * DB Designer - online database schema design and modeling tool

###  DATABASE RELATIONSHIPS

* One-to-One Relationship
* One-to-Many Relationship
* Many-to-Many

### Trigger

* A database trigger is procedural code that is automatically executed in response to certain events on a particular table or view in a database. 
* The trigger is mostly used for maintaining the integrity of the information on the database.
    * Triggers are associated with a specific table, view or foreign table.
    * Triggers execute a specified function when certain operations are performed on the table (INSERT, UPDATE, DELETE, TRUNCATE).
    * **Triggers** can run before, after or instead of the operation attempts to alter the row.
    * A trigger set `FOR EACH ROW` is called once for every row modified.
    * `FOR EACH STATEMENT` executes once for the entire operation (0 modified rows would still trigger this).
    * Triggers can specify a boolean `WHEN` condition to see when they should be fired.
    * Multiple triggers of the same kind can exist on the same table. If so they are triggered in alphabetical order.
    * `SELECT` statements do not modify rows so no trigger can be set on a SELECT statement.
    * One SQL command can trigger more than one kind of trigger.
    * Use the `DROP TRIGGER` command to **remove a trigger**.
    * You can query the `information_schema.triggers` **table** to get a list of triggers in the system.