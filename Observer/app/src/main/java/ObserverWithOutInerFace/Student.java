package ObserverWithOutInerFace;

public class Student {
    private String name;
    public Student(String name){
        this.name=name;
    }
    public void updte(String massage){
        System.out.println(this.name+" "+massage);
    }

    public String getName() {
        return name;
    }
}
