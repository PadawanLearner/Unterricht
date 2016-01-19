(
SELECT question,answer,category
FROM questions
LEFT JOIN dailies
ON questions.questionId = dailies.questionId
WHERE category = "Vim" AND dailies.questionId IS NULL
ORDER BY RAND()
LIMIT 1
)
UNION
(
SELECT question,answer,category
FROM questions
LEFT JOIN dailies
ON questions.questionId = dailies.questionId
WHERE category = "Linux" AND dailies.questionId IS NULL
ORDER BY RAND()
LIMIT 1
)
UNION
(
SELECT question,answer,category
FROM questions
LEFT JOIN dailies
ON questions.questionId = dailies.questionId
WHERE category = "Syntax" AND dailies.questionId IS NULL
ORDER BY RAND()
LIMIT 1
)
UNION
(
SELECT question,answer,category
FROM questions
LEFT JOIN dailies
ON questions.questionId = dailies.questionId
WHERE category = "Vocabulary" AND dailies.questionId IS NULL
ORDER BY RAND()
LIMIT 1
)

