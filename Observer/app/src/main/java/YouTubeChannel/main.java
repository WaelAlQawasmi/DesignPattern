package YouTubeChannel;

public class main {
    public static void main(String[] args) throws Exception {
        YouTubeChannel waelChanel=new YouTubeChannel("wael chanel");

        subscriber user1= new subscriber("ahmad");
        subscriber user2= new subscriber("yazen");
        subscriber user3= new subscriber("enas");

        waelChanel.subscribe(user1);
        waelChanel.subscribe(user2);
        waelChanel.subscribe(user3);

        waelChanel.addNewVideoToChannel("Java8 ");



    }
}
