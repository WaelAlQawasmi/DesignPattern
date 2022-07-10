#Observer pattern 
is used when there is one-to-many relationship between objects such 
as if one object is modified, its depenedent objects 
are to be notified automatically.

Observer pattern falls under behavioral pattern category.

## project description
this project for course subscription , add student to course and remove them  from it
and when the availability of course change the app notify all subscriber in the
course

I bulid this idea with and without interface to can understand it correctly
## How it's work?
1. In the first we should create  instance  of the course class
2. then we create instance from the student class
3. then we subscribe the student in the course
4. after change the availability  all student that subscribe in the course will notify

## resources 
- [tutorialspoint](https://www.tutorialspoint.com/design_pattern/observer_pattern.htm)
- [Observer Design Pattern](https://www.youtube.com/watch?v=WcivTsIdImw&list=PLZeX1aIDYSn8qNDPcqwyvOtGZkMQwPjCg&index=4)