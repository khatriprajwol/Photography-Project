create table contact (
  id int(11) not null PRIMARY KEY AUTO_INCREMENT,
  fname varchar(25) not null,
  lname varchar(25) not null,
  country varchar(25) not null,
  subject varchar(1000) not null,
    date datetime not null
);

insert into contact (fname, lname, country, subject) VALUES ('rojan','gurung','Nepal','coffee is super','2021-04-19 20:45:01);