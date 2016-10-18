
CREATE TABLE artists (
  artistID INT(11) NOT NULL AUTO_INCREMENT,
  artistName VARCHAR(255) NOT NULL,
  artistBio VARCHAR(255) NOT NULL,
  PRIMARY KEY (artistID)
);

CREATE TABLE releases (
  releaseID INT(11) NOT NULL AUTO_INCREMENT,
  artistName VARCHAR(255) NOT NULL,
  releaseName VARCHAR(255) NOT NULL,
  releaseYear VARCHAR(10) NOT NULL,
  purchaseURL VARCHAR(255) NOT NULL,
  imageURL VARCHAR(255) NOT NULL,
  PRIMARY KEY (releaseID)
);

INSERT INTO artists VALUES
  (1, 'Immaculate Corpses', 'Proto Rock from NYC');
  (2, 'Boys Room', 'Dirt Rock from Boston');


INSERT INTO releases VALUES
  (1, 'Immaculate Corpses', 'The Tape', '2015', 'https://theimmaculatecorpses.bandcamp.com/releases', 'images/immaculatecorpses/theTape.jpg');