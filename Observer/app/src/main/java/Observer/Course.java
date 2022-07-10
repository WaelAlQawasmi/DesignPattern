package Observer;

import java.util.ArrayList;
import java.util.List;

public class Course implements CourseInterface {
    private  String name;
    private  String availability;
List<StudentInterface>observers=new ArrayList<>();


    public Course(String name){
        this.name=name;

    }

    @Override
    public void subscribe(StudentInterface Observer) {
System.out.println("successfully subscribe " +this.name);
observers.add(Observer);
    }

    @Override
    public void unSubscribe(StudentInterface Observer) {
        System.out.println("successfully un subscribe in "+ this.name);
        observers.remove(Observer);
    }



    @Override
    public void notifyAllSubscriber( ) {
        for (StudentInterface stu:observers) {
            stu.update(availability);

        }

    }


    public String getAvailability() {
        return availability;
    }

    public void setAvailability(boolean availability) {

        String massage= this.name+ (availability?" available":" not available");
        this.availability = massage;
        notifyAllSubscriber();
    }
}
