INSERT INTO questions (question, answer, category, ctr)
	SELECT ?,?,?,CEILING(AVG(ctr))-3
	FROM questions 
	WHERE category=
