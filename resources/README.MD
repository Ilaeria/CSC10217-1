Notes on the moviezone_db:

Two views have been created to simplify the use of the database.  Using views with the SELECT statement is exactly like using tables.

1.	movie_detail_view - To display a list of movies with all details, sorted by movie title:

		SELECT * FROM movie_detail_view ;

		SELECT * FROM movie_detail_view WHERE genre = 'thriller';
		SELECT * FROM movie_detail_view WHERE title = 'Furious Seven';
		SELECT * FROM movie_detail_view WHERE classification = 'G';
		SELECT * FROM movie_detail_view WHERE classification IN ('G', 'PG');

2.  movie_actor_view - 	To get the movie_id's that star or co-star a particular actor name:

		SELECT movie_id FROM movie_actor_view WHERE actor_name = "Vin Diesel";

3.	Combining 1. and 2. above to get the details of movies with a particular actor:

		SELECT * FROM movie_detail_view
		WHERE movie_id IN (SELECT movie_id FROM movie_actor_view WHERE actor_name = "Vin Diesel");

Below is the create script for the above 2 view queries used in this database.  They can be updated and re-run as required.

	DROP VIEW IF EXISTS `movie_detail_view`;
	CREATE VIEW movie_detail_view AS
		SELECT  movie.movie_id, title, tagline, plot, thumbpath,
		GROUP_CONCAT(if(role = 'star1', actor_name, NULL)) AS 'star1',
		GROUP_CONCAT(if(role = 'star2', actor_name, NULL)) AS 'star2',
		GROUP_CONCAT(if(role = 'star3', actor_name, NULL)) AS 'star3',
		GROUP_CONCAT(if(role = 'costar1', actor_name, NULL)) AS 'costar1',
		GROUP_CONCAT(if(role = 'costar2', actor_name, NULL)) AS 'costar2',
		GROUP_CONCAT(if(role = 'costar3', actor_name, NULL)) AS 'costar3',
		director_name AS 'director', studio_name AS 'studio', genre_name AS genre, classification, rental_period, year, DVD_rental_price, DVD_purchase_price, numDVD, numDVDout, BluRay_rental_price, BluRay_purchase_price, numBluRay, numBluRayOut
		FROM movie, actor, movie_actor, director, studio, genre WHERE movie.movie_id = movie_actor.movie_id AND  movie_actor.actor_id = actor.actor_id AND movie.director_id = director.director_id AND movie.studio_id = studio.studio_id AND movie.genre_id = genre.genre_id AND movie.director_id = director.director_id AND movie.studio_id = studio.studio_id AND movie.genre_id = genre.genre_id
		GROUP BY title, movie_id;

DROP VIEW IF EXISTS `movie_actor_view`;
CREATE VIEW movie_actor_view AS
  SELECT actor_name, movie_id FROM movie_actor, actor
  WHERE movie_actor.actor_id = actor.actor_ID ORDER BY actor_name;