package ObserverWithOutInerFace;

import java.util.ArrayList;
import java.util.List;

public class Course {
    List<Student>CourseStudent=new ArrayList<>();
    String courseName;
    String courseAvailability;

    public Course(String courseName) {
        this.courseName = courseName;
    }

  public   void subscribe(Student student){
        CourseStudent.add(student);
        System.out.println(student.getName()+" SUCCESSFULLY subscribe IN "+this.courseName);
    }

  public   void unSubscribe(Student student){
        CourseStudent.remove(student);
      System.out.println(student.getName()+" SUCCESSFULLY UN subscribe IN "+this.courseName);
    }

    public void setCourseAvailability(boolean courseAvailability) {
        this.courseAvailability =this.courseName+(courseAvailability?" available":" not available");
        notifyAllSubscriber();
    }
    public void notifyAllSubscriber(){
        for (Student stu:CourseStudent) {
            stu.updte(courseAvailability);
        }
    }

}
