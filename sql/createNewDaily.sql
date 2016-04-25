INSERT INTO dailies (questionId,day,week)
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Vim" AND dailies.questionId IS NULL AND ctr <= (SELECT CEILING(AVG(ctr)) FROM questions WHERE category="Vim")
	ORDER BY RAND()
	LIMIT 1
	)
UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Linux" AND dailies.questionId IS NULL AND ctr <= (SELECT CEILING(AVG(ctr)) FROM questions WHERE category="Linux")
	ORDER BY RAND()
	LIMIT 1
	)
UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Vocabulary" AND dailies.questionId IS NULL AND ctr <= (SELECT CEILING(AVG(ctr)) FROM questions WHERE category="Vocabulary")
	ORDER BY RAND()
	LIMIT 1
	)
UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Financials" AND dailies.questionId IS NULL AND ctr <= (SELECT CEILING(AVG(ctr)) FROM questions AND category="Financials")
	ORDER BY RAND()
	LIMIT 1
	)UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Testing" AND dailies.questionId IS NULL AND ctr <= (SELECT CEILING(AVG(ctr)) FROM questions AND category="Testing")
	ORDER BY RAND()
	LIMIT 1
	)UNION
	(
	SELECT questions.questionId, DAYNAME(CURDATE()) as day, WEEK(CURDATE()) as week
	FROM questions
	LEFT JOIN dailies
	ON questions.questionId = dailies.questionId
	WHERE category = "Mindset" AND dailies.questionId IS NULL AND ctr <= (SELECT CEILING(AVG(ctr)) FROM questions AND category="Mindset")
	ORDER BY RAND()
	LIMIT 1
	)