INSERT INTO dailies (questionId,day,week)
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Vim" AND dailies.questionId IS NULL AND ctr <= (SELECT AVG(ctr) FROM questions WHERE category="Vim")
	ORDER BY RAND()
	LIMIT 1
	)
UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Linux" AND dailies.questionId IS NULL AND ctr <= (SELECT AVG(ctr) FROM questions WHERE category="Linux")
	ORDER BY RAND()
	LIMIT 1
	)
UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Vocabulary" AND dailies.questionId IS NULL AND ctr <= (SELECT AVG(ctr) FROM questions) WHERE category="Vocabulary"
	ORDER BY RAND()
	LIMIT 1
	)
