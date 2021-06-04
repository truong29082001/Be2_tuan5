
    
a) Li?t kê danh sách Gi?ng viên
b) Li?t kê danh sách Sinh viên
c) Li?t kê các môn h?c (courses)
d) Li?t kê các môn h?c do Gi?ng viên Nguy?n Vãn A ph? trách
e) Li?t kê sinh viên h?c môn Th?c t?p doanh nghi?p do Gi?ng viên Nguy?n Vãn A ph? trách trong nãm h?c 2020-2021 H?c k? 1
f) Li?t kê thông tin công ty th?c t?p c?a sinh viên h?c môn Th?c t?p doanh nghi?p do Gi?ng viên Nguy?n Vãn A ph? trách trong nãm h?c 2020-2021 H?c k? 1
g) Li?t kê nh?t k? th?c t?p c?a sinh viên Nguy?n Vãn A

h) Li?t kê chi ti?t nh?t k? th?c t?p c?a môn h?c Th?c t?p doanh nghi?p nãm h?c 2020-2021 H?c k? 1
i) Li?t kê nh?n xét c?a Gi?ng viên hý?ng d?n v? sinh viên Nguy?n Vãn B tham gia th?c t?p nãm h?c 2020-2021 H?c k? 1
j) Li?t kê nh?n xét c?a ngý?i hý?ng d?n v? sinh viên Nguy?n Vãn B tham gia th?c t?p nãm h?c 2020-2021 H?c k? 1

1 SELECT * FROM teacher
2 SElECT * FROM Student
3 select * from course
4 select course from course_has_teacher  join course on course_has_teacher.course_id=course.course_id 
Join teacher  on course_has_teacher.teacher_id =teacher.teacher_id where teacher.teacher_name ="nguyen van A" 
5 select student  from course_has_teacher  join course on course_has_teacher.course_id=course.course_id 
Join teacher  on course_has_teacher.teacher_id =teacher.teacher_id
join classer on course.course_id = clasers.class_id 
join student on classer.student_id = student.stdent_id 
join course_catalog on course_catalog.id = course.coursecatalog_id 
join coursescatalog_has_semester on coursescatalog_has_semester.coursecatalog_id = coursecatalog_id
join semester on coursescatalog_has_semester.semester_id = semeter.semeter_id
 where course.course_name = "Th?c t?p doanh nghi?p" and
teacher.teacher_name =" Nguy?n Vãn A" and
course_catalog.shoocl_year ="2020-2021" and
semester.semester_name ="H?c k? 1"
 6 select company from company 
join student on student.company_id = company.company_id  
join course_catalog on course_catalog.id = course.coursecatalog_id 
join coursescatalog_has_semester on coursescatalog_has_semester.coursecatalog_id = coursecatalog_id
join semester on coursescatalog_has_semester.semester_id = semeter.semeter_id
where course.course_name = "Th?c t?p doanh nghi?p" 
and teacher.teacher_name =" Nguy?n Vãn A" 
and course_catalog.shoocl_year ="2020-2021"
and semester.semester_name ="H?c k? 1"
7 select diary from diary join student on diary.student_id = student.student_id where student.student_name = "  Nguy?n Vãn A " 
8 select  diary_date from diary_date join diary_week on diary_date.diaryweek_id = diary_week.diaryweek_id 
join diary on diary.diary_id = diary_week.diary_id 
join course_catalog on course_catalog.id = course.coursecatalog_id 
join coursescatalog_has_semester on coursescatalog_has_semester.coursecatalog_id = coursecatalog_id
join semester on coursescatalog_has_semester.semester_id = semeter.semeter_id
 where course.course_name = "Th?c t?p doanh nghi?p" and
course_catalog.shoocl_year ="2020-2021" and
semester.semester_name ="H?c k? 1"
9 select  diary_date.comment_teacher from diary_date join diary_week on diary_date.diaryweek_id = diary_week.diaryweek_id 
join diary on diary.diary_id = diary_week.diary_id 
join student on diary.student_id = student.student_id
join course_catalog on diary.coursecatalog_id = course_catalog.coursecatalog_id 
join coursescatalog_has_semester on coursescatalog_has_semester.coursecatalog_id = coursecatalog_id
join semester on coursescatalog_has_semester.semester_id = semeter.semeter_id
where student.student_name="nguyen van B"
and course_catalog.shoocl_year ="2020-2021" and
semester.semester_name ="H?c k? 1"
10.select  diary_date.comment_trainer from diary_date join diary_week on diary_date.diaryweek_id = diary_week.diaryweek_id 
join diary on diary.diary_id = diary_week.diary_id 
join student on diary.student_id = student.student_id
join course_catalog on diary.coursecatalog_id = course_catalog.coursecatalog_id 
join coursescatalog_has_semester on coursescatalog_has_semester.coursecatalog_id = coursecatalog_id
join semester on coursescatalog_has_semester.semester_id = semeter.semeter_id
where student.student_name="nguyen van B"
and course_catalog.shoocl_year ="2020-2021" and
semester.semester_name ="H?c k? 1"


