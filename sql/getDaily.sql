(
SELECT question,answer,category 
FROM questions LEFT JOIN dailies 
ON questions.questionId = dailies.questionId 
WHERE category = 'Vocabulary' AND dailies.day = '$day'
ORDER BY RAND() 
LIMIT 1
)
