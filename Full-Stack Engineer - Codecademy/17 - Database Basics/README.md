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