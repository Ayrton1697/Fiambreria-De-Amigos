USE deamigos;

CREATE TABLE productos(

id int(255) auto_increment not null,
name varchar(50) not null,
price int(255) not null,
image varchar(255),
description varchar(255) not null,
stock  int(50),
CONSTRAINT pk_productos PRIMARY KEY(id)
)ENGINE=InnoDb;