package LiskovSubstitution;

public class Eagle extends FlyingBird {
    public Eagle(String color) {
        super(color);
    }

    public void predate(){
        System.out.println("predation");
    }
}
