package SOLIDPrinciple;

public class SingleResponsibility {
    private String productName;
    private String productPrice;


    public SingleResponsibility(String productName, String productPrice) {
        this.productName = productName;
        this.productPrice = productPrice;
    }

    public void setProductName(String productName) {
        this.productName = productName;
    }

    public void setProductPrice(String productPrice) {
        this.productPrice = productPrice;
    }

    public String getProductName() {
        return productName;
    }

    public String getProductPrice() {
        return productPrice;
    }
}
