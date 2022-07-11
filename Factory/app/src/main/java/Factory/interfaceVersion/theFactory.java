package Factory.interfaceVersion;

public class theFactory {
    public static products Productfactory(String product){
        switch (product){
            case "A":
                return new productA("product A",850);
            case "B":
                return new productB("prduct B",687);
            default: return null;
        }


    }
}
