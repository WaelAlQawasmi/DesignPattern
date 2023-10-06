package ISP;

import ISP.Interface.BackendDevelopment;
import ISP.Interface.FrontEndDevelopment;

public class ProjectDevelopment implements FrontEndDevelopment, BackendDevelopment {


    @Override
    public void buildBackend() {
        System.out.println("BUILDING BACKEND ...");
    }

    @Override
    public void BuildFrontEnd() {
        System.out.println("BUILD FRONTEND ...");

    }
}
