package DIP;

public class Control {
    Device device;
    public Control(Device device){
        this.device=device;
    }
   public void start(){
        device.turnOn();
    }
    public void stop(){
        device.turnOff();

    }
}
