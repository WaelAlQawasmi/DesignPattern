package YouTubeChannel;

public interface channel {
    public void subscribe(subscriber observer) throws Exception;
    public void unsubscribe(subscriber observers) throws Exception;
    public void notifyAllSubscribe(String notification );
}

