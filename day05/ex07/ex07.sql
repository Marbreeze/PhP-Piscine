SELECT title, summary FROM film
WHERE(summary) LIKE '%42%' OR summary LIKE '%42%'
ORDER BY duration