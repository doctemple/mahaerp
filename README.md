
# Enterprise Resource Planning (ERP)

One Paragraph of the project description

## Getting Started

These instructions will give you a copy of the project up and running on
your local machine for development and testing purposes. See deployment
for notes on deploying the project on a live system.

### Prerequisites

Requirements for the software and other tools to build, test and push 
- [PHP](https://www.php.net/downloads)
- [Apache](https://httpd.apache.org/download.cgi)
- [PostgreSQL](https://www.postgresql.org/download/)
- [GIT](https://git-scm.com/download/win)

### Installing

    git config --global user.name "username"
    git config --global user.email "Email"
    git config --global user.password "Password"
    git config --global --list

    git clone https://github.com/doctemple/mahaerp.git

    rename "core/sample-config.php" "core/config.php"

    notepad core/config.php

    <?php
        DEFINE('_SYS',array(
            'system' => 'System Name',
            'mode' => 'dev',
            'db' => 'PostgreSQL',
            'host' => 'localhost',
            'port' => '5432',
            'username' => 'postgres',
            'password' => '?',
            'dbname' => '?'
        ));
      ?>

      Try PostgreSQL Password to password
      Try PostgreSQL Database Name to dbname
      Saved.

## Push Source Code

    git add .
    git commit -m "commit 2"
    git push -u origin

### Clean Git 

    git clean -f

### Style test

Checks if the best practices and the right coding style has been used.

    Give an example

## Deployment

Add additional notes to deploy this on a live system

## Versioning

Version 1.0

## Authors

  - **Siriwat Chanakhun** - *Provided README Template* -
    [Doctemple](https://github.com/doctemple)

## License

This project is licensed under the [CC0 1.0 Universal](LICENSE.md)
Creative Commons License - see the [LICENSE.md](LICENSE.md) file for
details