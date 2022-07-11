package Factory.interfaceVersion;

public class productB implements products {

String name;
int price;

    public productB(String name, int price) {
        this.name = name;
        this.price = price;
    }

    @Override
    public void deletes() {
        System.out.println( "the name of product is " +name+ " abd the price is "+price);
    }
}
