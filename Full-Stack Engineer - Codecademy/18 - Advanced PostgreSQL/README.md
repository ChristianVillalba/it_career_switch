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

###  DATABASE SECURITY
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