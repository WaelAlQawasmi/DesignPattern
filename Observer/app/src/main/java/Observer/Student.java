package Observer;

public class Student implements StudentInterface {
    String name;
    public Student(String name) {
        this.name=name;
    }

    @Override
    public void update(String massage) {
        System.out.println(this.name+" "+massage);

    }
}
