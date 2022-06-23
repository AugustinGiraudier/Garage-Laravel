drop database if exists garage;
create database garage;
use garage;

drop user if exists usergarage@localhost;
create user usergarage@localhost identified by 'C1Secret !';
grant all privileges on garage.* to usergarage@localhost;
flush privileges ;