package Factory.superClassVersion;

import Factory.superClassVersion.productA;
import Factory.superClassVersion.productB;
import Factory.superClassVersion.products;

public class theFactory {
   public static products productsFactory(String productName){
        switch (productName){
            case "A":
                return new productA();
            case  "B":
                return  new productB();
            default: return null;
        }
    }
}
