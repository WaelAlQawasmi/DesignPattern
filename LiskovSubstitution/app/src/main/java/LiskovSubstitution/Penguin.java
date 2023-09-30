package LiskovSubstitution;

public class Penguin extends Bird{

    public Penguin(String color) {
        super(color);
    }
    public void walk(){
        System.out.println("Walk");
    }
}
