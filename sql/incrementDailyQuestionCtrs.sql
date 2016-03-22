UPDATE questions 
SET ctr=ctr+1
WHERE questionId IN
(
	SELECT questionId
	FROM dailies
	WHERE day = DAYNAME(CURDATE())
)
