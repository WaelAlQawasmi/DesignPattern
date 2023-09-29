package YouTubeChannel;

public class subscriber implements Observer{
    String name;

    public subscriber(String name) {
        this.name = name;
    }

    @Override
    public void update(String msg) {
        System.out.println("Hi "+  this.name +" : "+msg);
    }
}
