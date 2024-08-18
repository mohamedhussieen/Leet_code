select * from Cinema
where description <> 'boring'
group by id
having (id % 2) = 1
order by rating desc