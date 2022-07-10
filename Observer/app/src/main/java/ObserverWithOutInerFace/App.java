package ObserverWithOutInerFace;

public class App {


    public static void main(String[] args) {
        Course JavaCorse=new Course("java");

        Student wael= new Student("wael");
        Student yazan= new Student("yazan");
        Student ahamd= new Student("ahmad");

        JavaCorse.subscribe(wael);
        JavaCorse.subscribe(yazan);
        JavaCorse.subscribe(ahamd);

        JavaCorse.setCourseAvailability(true);
    }}
