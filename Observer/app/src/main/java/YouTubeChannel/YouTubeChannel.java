package YouTubeChannel;

import java.util.ArrayList;

public class YouTubeChannel implements channel{
    ArrayList<subscriber> subscribers=new ArrayList<>();
    ArrayList<String > videos=new ArrayList<>();
    String chanelName;

    public YouTubeChannel(String name) {
        this.chanelName = name;
    }

    @Override
    public void subscribe(subscriber observer) throws Exception {
        existenceValidations(observer);
        nullValidation(observer);
        subscribers.add(observer);

    }

    @Override
    public void unsubscribe(subscriber observer) throws Exception {
        nullValidation(observer);
        unsubscribeValidations(observer);
        this.subscribers.remove(observer);

    }

    private void existenceValidations(subscriber observer) throws Exception {
        if(isSubscribed(observer)){
            throw new Exception("The user is already subscribed");
        }

    }

    private void unsubscribeValidations(subscriber observer) throws Exception {
        if(!isSubscribed(observer)){
            throw new Exception("The user not subscribed");
        }

    }

    public boolean isSubscribed(subscriber observer){
        return subscribers.contains(observer);
    }


    private void nullValidation(Observer observer) {
        if(observer == null)
            throw new NullPointerException();
    }




    @Override
    public void notifyAllSubscribe(String notification) {
        for (subscriber subscriber:subscribers) {
            subscriber.update(notification);
        }

    }

    public void addNewVideoToChannel(String videoName){
        videos.add(videoName);
        notifyAllSubscribe(chanelName+ " add " + videoName+ " video ");

    }


}
