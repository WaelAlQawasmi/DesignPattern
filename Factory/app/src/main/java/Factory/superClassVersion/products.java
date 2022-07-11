package Factory.superClassVersion;

public class products {
    protected String name;
    protected int price;

    public products(String name, int price) {
        this.name = name;
        this.price = price;
    }
    public  void deletes(){
        System.out.println( "the name of product is " +name+ " abd the price is "+price);

    }
}
