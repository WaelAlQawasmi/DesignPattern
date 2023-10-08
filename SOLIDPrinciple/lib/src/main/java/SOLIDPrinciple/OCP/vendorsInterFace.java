package SOLIDPrinciple.OCP;

import java.util.List;

public interface vendorsInterFace {
    public  void addNewVendor(String vendor) throws Exception;
    public List<String> getVendors();
    public boolean isVendorExist(String vendor);


}
