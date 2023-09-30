package LiskovSubstitution;

public class FlyingBird extends Bird{

    public FlyingBird(String color) {
        super(color);
    }
    public void fly(){
        System.out.println("fly");
    }
}
