select unique_id, name from Employees e
LEFT JOIN EmployeeUNI o ON e.id = o.id