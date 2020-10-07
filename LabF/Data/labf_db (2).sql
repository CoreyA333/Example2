-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2018 at 03:06 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(15) NOT NULL,
  `title` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `release_year` year(4) NOT NULL,
  `category` varchar(10) NOT NULL,
  `platform` varchar(10) NOT NULL,
  `cover` varchar(150) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `publisher`, `release_year`, `category`, `platform`, `cover`, `description`) VALUES
(1, 'Grand Theft Auto V', 'Rockstar Games', 2013, '1', 'All ', 'https://i.pinimg.com/736x/07/98/29/079829b12d2c514eec9dc50a78b05d18--ps-cover-art.jpg', 'When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.'),
(2, 'Fortnite', 'Epic Games', 2017, '1', 'All ', 'https://media.playstation.com/is/image/SCEA/fortnite-screen-01-ps4-us-24may17?$MediaCarousel_Original$', 'Fortnite is a co-op sandbox survival game developed by Epic Games and People Can Fly and published by Epic Games.'),
(3, 'Overwatch', 'Blizzard Entertainment', 2016, '1', 'All', 'http://gamepreorders.com/wp-content/uploads/2016/03/overwatch-cover.jpg', 'In a time of global crisis, an international task force of heroes banded together to restore peace to a war-torn world: OVERWATCH. Overwatch ended the crisis, and helped maintain peace in the decades that followed, inspiring an era of exploration, innovation, and discovery.'),
(4, 'Far Cry 5', 'Ubisoft', 2018, '1', 'All ', 'https://multimedia.bbycastatic.ca/multimedia/products/500x500/107/10737/10737840.jpg', 'Far Cry 5 is an action-adventure first-person shooter game developed by Ubisoft Montreal and Ubisoft Toronto and published by Ubisoft for Microsoft Windows, PlayStation 4 and Xbox One.');

-- --------------------------------------------------------

--
-- Table structure for table `game_categories`
--

CREATE TABLE `game_categories` (
  `category_id` tinyint(5) NOT NULL,
  `category` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_categories`
--

INSERT INTO `game_categories` (`category_id`, `category`) VALUES
(1, 'Action '),
(2, 'RPG'),
(3, 'Stategy'),
(4, 'Racing');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(12) NOT NULL,
  `title` varchar(75) NOT NULL,
  `rating` smallint(15) NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `rating`, `release_date`, `director`, `image`, `description`) VALUES
(1, 'The Dark Knight', 3, '2008-07-18', 'Christopher Nolan', 'https://ia.media-imdb.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, the Dark Knight must accept one of the greatest psychological and physical tests of his ability to fight injustice.'),
(2, 'Angry Men', 5, '1957-04-01', 'Sidney Lumet', 'https://ia.media-imdb.com/images/M/MV5BMWU4N2FjNzYtNTVkNC00NzQ0LTg0MjAtYTJlMjFhNGUxZDFmXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_SY1000_CR0,0,649,1000_AL_.jpg', 'A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.'),
(3, 'Pulp Fiction', 4, '1994-10-14', 'Quentin Tarantino', 'https://ia.media-imdb.com/images/M/MV5BMTkxMTA5OTAzMl5BMl5BanBnXkFtZTgwNjA5MDc3NjE@._V1_SY1000_CR0,0,673,1000_AL_.jpg', 'The lives of two mob hitmen, a boxer, a gangster\'s wife, and a pair of diner bandits intertwine in four tales of violence and redemption.'),
(4, 'Fight Club', 4, '1999-10-15', 'David Fincher', 'https://ia.media-imdb.com/images/M/MV5BMzFjMWNhYzQtYTIxNC00ZWQ1LThiOTItNWQyZmMxNDYyMjA5XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_SY1000_CR0,0,675,1000_AL_.jpg', 'An insomniac office worker, looking for a way to change his life, crosses paths with a devil-may-care soapmaker, forming an underground fight club that evolves into something much, much more.'),
(5, 'The Godfather', 4, '1972-03-15', 'Albert S. Ruddy', 'https://ec-assets.sheetmusicplus.com/items/2911645/cover_images/cover-large_file.png', 'The Godfather is an American film series that consists of three crime drama films directed by Francis Ford Coppola inspired by the novel of the same name by Italian American author Mario Puzo.'),
(6, 'Goodfellas', 4, '1990-09-19', 'Martin Scorsese', 'http://t0.gstatic.com/images?q=tbn:ANd9GcSkuxYKBhyPQq4e_cbYRDfZRjWkUx2GIKlUpUkHiuVeLg2GhN0D', 'A young man grows up in the mob and works very hard to advance himself through the ranks. He enjoys his life of money and luxury, but is oblivious to the horror that he causes. A drug addiction and a few mistakes ultimately unravel his climb to the top. Based on the book \"Wiseguy\" by Nicholas Pileggi.'),
(7, 'Inception', 3, '2010-05-13', 'Christopher Nolan', 'https://resizing.flixster.com/RS86kpvIDG5iDC7Uw0TdVXzFsKs=/206x305/v1.bTsxMTE2NjcyNTtqOzE3NzI0OzEyMDA7ODAwOzEyMDA', 'Dom Cobb (Leonardo DiCaprio) is a thief with the rare ability to enter people&#39;s dreams and steal their secrets from their subconscious. His skill has made him a hot commodity in the world of corporate espionage but has also cost him everything he loves. Cobb gets a chance at redemption when he is offered a seemingly impossible task: Plant an idea in someone&#39;s mind. If he succeeds, it will be the perfect crime, but a dangerous enemy anticipates Cobb&#39;s every move.'),
(8, 'Casablanca', 2, '1943-01-23', 'Michael Curtiz', 'http://t0.gstatic.com/images?q=tbn:ANd9GcRBl35DhvXuhAN2q-PW8gdRXg5_a7ejexO3cySrC_TYgg0yYiQO', 'Rick Blaine (Humphrey Bogart), who owns a nightclub in Casablanca, discovers his old flame Ilsa (Ingrid Bergman) is in town with her husband, Victor Laszlo (Paul Henreid). Laszlo is a famed rebel, and with Germans on his tail, Ilsa knows Rick can help them get out of the country.'),
(9, 'Taxi Driver', 4, '1976-02-08', ' Martin Scorsese', 'http://t1.gstatic.com/images?q=tbn:ANd9GcQ4QYpWCQ5pareSyOO3YNI3YsOmAeF4qcRDwHCDwf3-a3F0Y7N6', 'Suffering from insomnia, disturbed loner Travis Bickle (Robert De Niro) takes a job as a New York City cabbie, haunting the streets nightly, growing increasingly detached from reality as he dreams of cleaning up the filthy city. When Travis meets pretty campaign worker Betsy (Cybill Shepherd), he becomes obsessed with the idea of saving the world, first plotting to assassinate a presidential candidate, then directing his attentions toward rescuing 12-year-old prostitute Iris (Jodie Foster).'),
(10, 'Braveheart', 4, '1995-04-19', 'Mel Gibson', 'http://t0.gstatic.com/images?q=tbn:ANd9GcSnnenelmzF4MKdtHBnaQYbDstLRExO1brKmrTBe_Ve40Vwq_lO', 'Tells the story of the legendary thirteenth century Scottish hero named William Wallace (Mel Gibson). Wallace rallies the Scottish against the English monarch and Edward I (Peter Hanly) after he suffers a personal tragedy by English soldiers. Wallace gathers a group of amateur warriors that is stronger than any English army.'),
(11, 'The Wizard of Oz', 2, '1939-08-25', 'Victor Fleming', 'http://t1.gstatic.com/images?q=tbn:ANd9GcR8Q9YZqxRxtbs7n4FmIEdBJzPvadE4Ko90aueFIsJGqV1G-T9p', 'When a tornado rips through Kansas, Dorothy (Judy Garland) and her dog, Toto, are whisked away in their house to the magical land of Oz. They follow the Yellow Brick Road toward the Emerald City to meet the Wizard, and en route they meet a Scarecrow (Ray Bolger) that needs a brain, a Tin Man (Jack Haley) missing a heart, and a Cowardly Lion (Bert Lahr) who wants courage. The wizard asks the group to bring him the broom of the Wicked Witch of the West (Margaret Hamilton) to earn his help.'),
(12, 'The Wiz', 1, '1978-10-24', 'Sidney Lumet', 'http://t2.gstatic.com/images?q=tbn:ANd9GcTnwYc7-XaKaaV8SoGARRdgy995EuEkLKHsRyB_Deq5nPf7TQNF', 'When Harlem schoolteacher Dorothy (Diana Ross) tries to save her dog from a storm, she&#39;s miraculously whisked away to an urban fantasy land called Oz. After accidentally killing the Wicked Witch of the East upon her arrival, Dorothy is told about the Wiz (Richard Pryor), a wizard who can help her get back to Manhattan. As Dorothy goes in search of the Wiz, she&#39;s joined by the Scarecrow (Michael Jackson), the Tin Man (Nipsey Russell) and the Cowardly Lion (Ted Ross).'),
(13, 'Forrest Gump', 3, '1994-06-06', 'Robert Zemeckis', 'http://t0.gstatic.com/images?q=tbn:ANd9GcSppDgk99BKVA4TJtWc1FN4-HUkdWrFNfMm1-M0nQ01sIOcbTZu', 'Slow-witted Forrest Gump (Tom Hanks) has never thought of himself as disadvantaged, and thanks to his supportive mother (Sally Field), he leads anything but a restricted life. Whether dominating on the gridiron as a college football star, fighting in Vietnam or captaining a shrimp boat, Forrest inspires people with his childlike optimism. But one person Forrest cares about most may be the most difficult to save -- his childhood love, the sweet but troubled Jenny (Robin Wright).'),
(14, 'Rocky ', 2, '1976-11-21', 'John G. Avildsen', 'http://t0.gstatic.com/images?q=tbn:ANd9GcQvK0RxPUkVMKokkRcoIJTTqUn_f-b8ofsrda29jocC4Eb6RnUb', 'Rocky Balboa (Sylvester Stallone), a small-time boxer from working-class Philadelphia, is arbitrarily chosen to take on the reigning world heavyweight champion, Apollo Creed (Carl Weathers), when the undefeated fighter\'s scheduled opponent is injured. While training with feisty former bantamweight contender Mickey Goldmill (Burgess Meredith), Rocky tentatively begins a relationship with Adrian (Talia Shire), the wallflower sister of his meat-packer pal Paulie (Burt Young).'),
(15, 'Gladiator', 4, '2000-04-05', 'Ridley Scott', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRuhegCaGHfcQc-Owpib9vGSO0hUlSUMTojO2s4ih8oXqHBw2ks', 'Commodus (Joaquin Phoenix) takes power and strips rank from Maximus (Russell Crowe), one of the favored generals of his predecessor and father, Emperor Marcus Aurelius, the great stoical philosopher. Maximus is then relegated to fighting to the death in the gladiator arenas.\r\n'),
(16, 'Jaws', 2, '1975-05-20', 'Steven Spielberg', 'http://t2.gstatic.com/images?q=tbn:ANd9GcSNafDFWxZ3Mp_EEeYV3XXvqcCwArfq4QI8-s5NZbfD6i_bDLCn', 'When a young woman is killed by a shark while skinny-dipping near the New England tourist town of Amity Island, police chief Martin Brody (Roy Scheider) wants to close the beaches, but mayor Larry Vaughn (Murray Hamilton) overrules him, fearing that the loss of tourist revenue will cripple the town. Ichthyologist Matt Hooper (Richard Dreyfuss) and grizzled ship captain Quint (Robert Shaw) offer to help Brody capture the killer beast, and the trio engage in an epic battle of man vs. nature.'),
(17, 'Jurassic Park', 3, '1993-05-11', 'Steven Spielberg', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRZh-cd7xlz0T8SiJRaQbpy49FtVDBjQXfcJUAlWCXT0L1YkVbj', 'In Steven Spielberg\'s massive blockbuster, paleontologists Alan Grant (Sam Neill) and Ellie Sattler (Laura Dern) and mathematician Ian Malcolm (Jeff Goldblum) are among a select group chosen to tour an island theme park populated by dinosaurs created from prehistoric DNA. While the park\'s mastermind, billionaire John Hammond (Richard Attenborough), assures everyone that the facility is safe, they find out otherwise when various ferocious predators break free and go on the hunt.'),
(18, 'The silence of the Lambs', 4, '1991-02-14', 'Jonathan Demme', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRCZLkDY7eSQu1ndh7m9JQkvzXVvW9VrBzT_anh5Lf4kT84-4ev', 'Jodie Foster stars as Clarice Starling, a top student at the FBI\'s training academy. Jack Crawford (Scott Glenn) wants Clarice to interview Dr. Hannibal Lecter (Anthony Hopkins), a brilliant psychiatrist who is also a violent psychopath, serving life behind bars for various acts of murder and cannibalism. Crawford believes that Lecter may have insight into a case and that Starling, as an attractive young woman, may be just the bait to draw him out.'),
(19, 'Titanic', 3, '1997-12-19', 'James Cameron', 'http://t0.gstatic.com/images?q=tbn:ANd9GcQhYjUIu2o5v5u3rfJpCq5Cz0Q9WK--XdYxai_N2d0ImohPiIOp', 'James Cameron\'s \"Titanic\" is an epic, action-packed romance set against the ill-fated maiden voyage of the R.M.S. Titanic; the pride and joy of the White Star Line and, at the time, the largest moving object ever built. She was the most luxurious liner of her era -- the \"ship of dreams\" -- which ultimately carried over 1,500 people to their death in the ice cold waters of the North Atlantic in the early hours of April 15, 1912.'),
(20, 'Back to the Future', 2, '1985-06-03', 'Robert Zemeckis', 'http://t3.gstatic.com/images?q=tbn:ANd9GcT9d_lBBx0xxB7_d4RP82MlRcK82lzT2W1ZavxhV39SSTZOofDX', 'In this 1980s sci-fi classic, small-town California teen Marty McFly (Michael J. Fox) is thrown back into the \'50s when an experiment by his eccentric scientist friend Doc Brown (Christopher Lloyd) goes awry. Traveling through time in a modified DeLorean car, Marty encounters young versions of his parents (Crispin Glover, Lea Thompson), and must make sure that they fall in love or he\'ll cease to exist. Even more dauntingly, Marty has to return to his own time and save the life of Doc Brown.'),
(21, 'Toy Story', 1, '1995-11-02', 'John Lasseter', 'http://www.gstatic.com/tv/thumb/movieposters/17420/p17420_p_v8_ab.jpg', 'Woody (Tom Hanks), a good-hearted cowboy doll who belongs to a young boy named Andy (John Morris), sees his position as Andy\'s favorite toy jeopardized when his parents buy him a Buzz Lightyear (Tim Allen) action figure. Even worse, the arrogant Buzz thinks he\'s a real spaceman on a mission to return to his home planet. When Andy\'s family moves to a new house, Woody and Buzz must escape the clutches of maladjusted neighbor Sid Phillips (Erik von Detten) and reunite with their boy.'),
(22, 'Die Hard', 4, '1988-06-15', 'John McTiernan', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRagI3FRZIH6bs2V3gw3hCWorUfc-JvImrRQXSYQy_ZF-o2a_PK', 'New York City policeman John McClane (Bruce Willis) is visiting his estranged wife (Bonnie Bedelia) and two daughters on Christmas Eve. He joins her at a holiday party in the headquarters of the Japanese-owned business she works for. But the festivities are interrupted by a group of terrorists who take over the exclusive high-rise, and everyone in it. Very soon McClane realizes that there\'s no one to save the hostages -- but him.'),
(23, 'The Matrix', 4, '1999-08-31', ' Lana/LIlly Wachowski', 'http://t0.gstatic.com/images?q=tbn:ANd9GcQq3pIz-aKgkmYX1dJ-EL-AlHSPcOO7wdqRIJ5gJy9qNinXpmle', 'Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question -- What is the Matrix? Neo is contacted by Trinity (Carrie-Anne Moss), a beautiful stranger who leads him into an underworld where he meets Morpheus. They fight a brutal battle for their lives against a cadre of viciously intelligent secret agents. It is a truth that could cost Neo something more precious than his life.'),
(24, 'The Green Mile', 4, '1999-12-06', 'Frank Darabont', 'http://t3.gstatic.com/images?q=tbn:ANd9GcRzAo286udsv_uTTpuBmSc3_h-nlUaWHYcUYG6VMAhhPcSDLJF7', 'Paul Edgecomb (Tom Hanks) walked the mile with a variety of cons. He had never encountered someone like John Coffey (Michael Clarke Duncan), a massive black man convicted of brutally killing a pair of young sisters. Coffey had the size and strength to kill anyone, but not the demeanor. Beyond his simple, naive nature and a deathly fear of the dark, Coffey seemed to possess a prodigious, supernatural gift. Paul began to question whether Coffey was truly guilty of murdering the two girls.');

-- --------------------------------------------------------

--
-- Table structure for table `movie_ratings`
--

CREATE TABLE `movie_ratings` (
  `rating_id` smallint(10) NOT NULL,
  `rating` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_ratings`
--

INSERT INTO `movie_ratings` (`rating_id`, `rating`) VALUES
(1, 'G'),
(2, 'PG'),
(3, 'PG-13'),
(4, 'R'),
(5, 'NR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_categories`
--
ALTER TABLE `game_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_ratings`
--
ALTER TABLE `movie_ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `game_categories`
--
ALTER TABLE `game_categories`
  MODIFY `category_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `movie_ratings`
--
ALTER TABLE `movie_ratings`
  MODIFY `rating_id` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
