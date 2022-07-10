package Observer;

public interface CourseInterface {
    void subscribe(StudentInterface Observer);
    void unSubscribe(StudentInterface Observer);
    void notifyAllSubscriber();
}
