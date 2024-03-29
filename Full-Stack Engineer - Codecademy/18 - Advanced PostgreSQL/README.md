# Advanced PostgreSQL
 * PostgreSQL offers methods to safeguard a database and maintain data integrity.
 * **Constraints** si one of these methods. 
    * Constraints are **rules** defined as part of the data model to control what values are allowed in specific columns and tables.
    * Reject inserts or updates containing values that shouldn’t be inserted into a database table
        * It can help with preserving data integrity and quality.
    * Raise an error when they’re violated
        * It can help with debugging applications that write to the DB.
* A thoughtful implementation of the following rules and constraints could improve our data model:
    * Data types
        * Are your first line of defense
        * Can help reject incorrect data from your database.
    * `NOT NULL` constraints
        * Reject incoming rows from your table when critical information is missing from a row.
    * `UNIQUE` constraints
        * Help with defining unique values in a table, they also create an index which can improve query and join performance.
    * `PRIMARY KEY` constraints
        * A column or combination of columns that uniquely identify a row and are both `NOT NULL` and `UNIQUE`. 
        * PRIMARY KEYs are unique to a table, and will often be used in joins between tables.
    * `CHECK` constraints
    * `FOREIGN KEY` Constraints
        *  Allow you to maintain **referential integrity** between two tables by validating the entry in one also appears in the other. 
        * **Referential integrity** depends on `FOREIGN KEY` constraints.

### DATABASE SECURITY
* **The principle of least privilege** that suggests all applications and users should have only the minimum permissions required for their function.
* To adhere to this principle in PostgreSQL:
    * Most user’s privileges are restricted 
    * `superusers` are not performing routine database tasks
    * Specialized roles are created with only the permissions they require
* `superuser` 
    * has the ability to create new databases, tables, users, etc.
    * bypasses all permission checks that other users face before being allowed to perform an action
    * superuser designation can be passed along to any number of other users in the DB.
* Introduction to Database Permissions

### Indexes
* An **index**is an organization of the data in a table to help with performance when searching and filtering records
    * Default: **Binary Tree**
* Planner: How to search
    * Seq Scan (89 → 1,2,3...89)
    * Index (89 → 50,75,87...89)
* Planning time & Execution time
    * **Planning time:** amount of time the server spends deciding the best way to solve your query
    * **Execution time:**  the amount of time the actual query takes to run after the server has decided on a plan of attack.
* Build an Index
    * ```sql
        CREATE INDEX customers_user_name_idx ON customers (user_name);
        ```
* Multicolumn Indexes
    * ```sql
        CREATE INDEX <index_name> ON <table_name> (<column_name>);
        ```
* Drop an Index
    * ```sql
        DROP INDEX IF EXISTS customers_city_idx;
        ```
* Indexes can improve the speed of your database queries
    * But slow down CRUD Operations.
* When should I add an Index?
    *  When the benefits of searching outweigh the burdens of storage size and Insert/Update/Delete speed. 
    * when searching will occur often enough to make the advantages worth the time and effort.
* **Partial Index**
    * A partial index allows for indexing on a subset of a table, allowing searches to be conducted on just this group of records in the table.
    * ```sql
        CREATE INDEX users_user_name_internal_idx ON users (user_name)
        WHERE email_address LIKE '%@wellsfargo.com';
        ```
* A **clustered index** is and how to refresh one
    * ```sql
        CREATE INDEX users_user_name_internal_idx ON users (user_name)
        WHERE email_address LIKE '%@wellsfargo.com';
        ```
* Indexes based on expressions
    * ```sql
        CREATE INDEX <index_name> ON <table_name>(<EXP>(<column_name>));
        ```

### Introduction To Normalization
* **Normalization**: The process of restructuring
* There are formal names and definitions for different levels of restructuring.
    * the most common are first, second, and third normal form (1NF, 2NF, 3NF). 
* Poor database structure can impact our ability to store, modify, and ask questions of our data.
    * There are no universal rules about the best way to design a database schema.
* Repeating groups of columns and columns that are not dependent on the primary key of a table can cause problems related to:
    * Duplicated data
    * Data modification (updates/insertions)
    * Querying
* Database normalization is a process by which database tables are modified/restructured to address these problems
* Duplicated Data  can be especially problematic if we want to modify the duplicated information
* Search and Sort Efficiency
* Creating Versus Modifying a Database Schema
* Database design can be modified after data has been entered, but it is usually easiest to design a normalized schema up front
* It is important to keep database use in mind when designing an optimal database schema

### POSTGRESQL DATABASE MAINTENANCE
* The space PostgreSQL uses on disk can grow in several ways.
* Some ways are easier to predict, for example, the addition of new tables or the addition of more data to a table.
* There are some properties of the PostgreSQL data storage system that cause disk usage to increase in non-intuitive ways. 
* Tools to maintain database:
    * `UPDATE` or `DELETE` creates dead tuples on disk.
    * `VACUUM` that can be used to manage storage space.
    * PostgreSQL has a feature called `autovacuum` enabled on most databases by default.
    * automatically runs periodic VACCUUMs to keep database tables disk usage efficient.
* An understanding of when to VACUUM, VACUUM ANALYZE, or VACUUM FULL :
    * `VACUUM` simply marks dead tuples and allows that space to be re-used by future updates.
    * `VACUUM ANALYZE` performs a VACUUM, but also updates PostgreSQL’s internal statistics and can help further improve query performance after a large UPDATE.
    * `VACUUM FULL` is the most aggressive VACUUM strategy, it can completely clear dead tuples from a table and return the space to disk.       However, it should be used sparingly as it can prevent other users from querying the table.
* Interpret data from pg_stat_all_tables
    * This is a very handy table.
    * Being able to reference it to understand disk usage, vacuum frequency, or dead tuple count will allow you to diagnose a wide variety of database performance problems.
    