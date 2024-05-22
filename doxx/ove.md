# pc
- SJEKKE status server og database
  - sudo systemctl status mariadb
  - sudo systemctl status apache2
  

-  Vise IP/netverkswitch
    - ipa  / ip config
    - hyper -> Virtuell svitsj-behandling -> prooveeksamen switch -> vise oppset


- mariadb users og priviliges
  - SELECT * User FROM mysql.user;
  - show databases; -> use prooveeskamen; -> display tables; -> select usernames,admin from users;


- lage database
  - CREATE DATABASE db1;


- sette inn data  i databasen
  - CREATE TABLE table_name (a int); 
  - INSERt
    INTO table 
    VALUES('id1','text','text'),


- vise rettigheter bruker
  - SHOW GRANTS FOR 'root'@'localhost';


- pc navn
  - Select Start > Settings > System > About .
  - sudo hostnamectl set-hostname \<newhostname>

# PHP SYNTAX

```php

- $navn = "åmund";

echo ("hei $navn");

- $tekst = "blabla bal abl"



- $tall = 1

- $dtall = 4.4

- $TOF = True/False

- $liste["en", 3, 3.3,"fire", "!!"]
echo("$liste[2]")
```

# github
- git push origin main

## inner join