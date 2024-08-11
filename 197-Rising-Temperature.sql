select t1.id
from Weather t1
join Weather t2
on t1.recordDate=date_add(t2.recordDate,interval 1 day)
where t1.temperature>t2.temperature;