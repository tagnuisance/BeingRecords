
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
  (2, 'Boys Room', 'Big Bad Us', '2015', 'https://boysroom.bandcamp.com/releases', 'images/boysroom/bigbadus.jpg');
  (3, 'Busy Beds', 'The Internet is the Real World', '2015', 'https://busybeds.bandcamp.com/album/the-internet-is-the-real-world-ep', 'images/busybeds/theinternetistherealworld.jpg');
  (4, 'Disputed Zones', 'Disputed Zones (1-4)', '2016', 'https://disputedzones.bandcamp.com/releases', 'images/disputedzones/disputedzones.jpg');