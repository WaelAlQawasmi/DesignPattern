/*
 * This Java source file was generated by the Gradle 'init' task.
 */
package SOLIDPrinciple.OCP;

public class Library {
    public static void main(String[] args) throws Exception {
        vendors vendor=new vendors();
        vendor.addNewVendor("wael");
        System.out.println(vendor.getVendors().toString());

    }
    public boolean someLibraryMethod() {
        return true;
    }
}