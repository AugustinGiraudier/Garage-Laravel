use garage;

insert into types values 
(1, 'Routière'),
(2, 'Citadine'),
(3, 'Tous-Terrains'),
(4, 'SUV'),
(5, 'Monospace'),
(6, 'Sportive');


insert into vehicules values 
(1,'Augustin Giraudier', 'giraudieraugstin@gmail.com','Renault','Clio3',103, '#60636A', 2, null, null),
(2,'Jean Jaques Riche', 'JeanJaques-R@gmail.com','Lamborgini','Avantador',530, '#ffffff', 6, null, null),
(3,'Thibault Nicolas', 'ThibNico@gmail.com','Citroen','C4',90, '#2C3667', 1, null, null),
(4,'Didier Doe', 'DD@gmail.com','Renault','Capture',110, '#F38C49', 4, null, null),
(5,'Bernard CaseVieille', 'BC@gmail.com','Citroen','DS',235, '#000000', 4, null, null);


insert into tasks values
(1,1,"Faire la vidange",null,null),
(2,1,"Changer le filtre à huile",null,null),
(3,1,"Changer le filtre à carburant",null,null),
(4,2,"Repeindre les jantes",null,null),
(5,2,"Installer une ligne inox",null,null),
(6,3,"Changer le rétroviseur droit",null,null),
(7,3,"Fixer le par choc arrière",null,null),
(8,3,"Changer le moteur de vitre AD et AG",null,null),
(9,4,"Recharger la climatisation",null,null),
(10,4,"Changer les plaquettes à l'avant",null,null),
(11,5,"Révision complète avant CT",null,null),
(12,5,"Changement des essuie-glaces",null,null);

insert into users (name,email,password) values
("Garage","Garage@gmail.com","$2y$10$oSqvAB8wtTKQFpqANk8W4ulJ4zTEwfLxZCv6hcuas.TVo5kND9nYy");