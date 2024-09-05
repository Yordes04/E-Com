CREATE TABLE produit (
    code            INT(8),
    description     VARCHAR(255),
    marque          VARCHAR(255),
    prix            FLOAT(8,2),
    quantite        INT(8),
    url_photo       VARCHAR(255),
    CONSTRAINT produit_pk PRIMARY KEY (code)
);

INSERT INTO produit VALUES (101,'Écouteur sans-fil', 'Beats-solo 3',188.67,20,'Beats Solo3.jpg');
INSERT INTO produit VALUES (102,'Haut-parleur bluetooth','JBL Flip 5',139.98, 25,'JBL Flip 5.jfif');
INSERT INTO produit VALUES (103,'Haut-parleur bluetooth intelligent','Google nest mini 2',69.00,40,'Google Nest mini.jfif');
INSERT INTO produit VALUES (104,'Souris','Glorious model O',49.00,50,'modelO.png');
INSERT INTO produit VALUES (105,'Camera T7 18-55m DC III','Canon Rebel-T7',557.98,5,'Canon EOS.jpg');
INSERT INTO produit VALUES (106,'Souris gaming','Logitech G502 Hero',49.98,20,'Logitech_G502Hero.jpg');
INSERT INTO produit VALUES (107,'Souris gaming sans-fil','Viper',234.99,15,'Viper.jpeg');
INSERT INTO produit VALUES (108,'Webcam full HD 1080p','Logitech',34.99,40,'Webcam de Bureau.jpg');
INSERT INTO produit VALUES (109,'Casque VR','Quest 2',459.00,10,'Quest2.webp');

CREATE TABLE utilisateur (
    nom           VARCHAR(255),
    mot_passe     VARCHAR(255),
    CONSTRAINT user_pk PRIMARY KEY (nom)
);
INSERT INTO utilisateur VALUES ('young','tir');

