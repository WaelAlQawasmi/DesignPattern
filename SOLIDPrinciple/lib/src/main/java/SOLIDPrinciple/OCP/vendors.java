package SOLIDPrinciple.OCP;

import java.util.ArrayList;
import java.util.List;

public class vendors implements vendorsInterFace {
    public vendors() {
        this.vendorList= new ArrayList<String>();
    }

    public ArrayList<String> vendorList;
    @Override
    public void addNewVendor(String vendor) throws Exception {
        if(!isVendorExist(vendor))
            vendorList.add(vendor);
        else
            throw new Exception("the vendor exist");

    }

    @Override
    public List<String> getVendors() {
        return vendorList;
    }

    @Override
    public boolean isVendorExist(String vendor) {
       return vendorList.contains(vendor);
    }
}
