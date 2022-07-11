package Factory.interfaceVersion;

public class productA implements products{
    String name;
    int price;

    public productA(String name, int price) {
        this.name = name;
        this.price = price;
    }

    @Override
    public void deletes() {
        System.out.println( "the name of product is " +name+ " abd the price is "+price);
    }
}
