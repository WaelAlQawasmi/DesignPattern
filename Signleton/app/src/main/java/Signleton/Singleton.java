package Signleton;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.Collections;
import java.util.List;

public class Singleton {
    // we use this list to test the order of it
    static Integer [] arr={1,2,3,4,5,6,7};
    static List<Integer> myList=new ArrayList<>(Arrays.asList(arr));

    private static Singleton instance ;  // you must create instance inner the class and for one time

// to create instance if no instance and for only one time
    public static Singleton getInstance() {
        if(instance==null){
            instance  = new Singleton();
        }

        return instance;
    }

    // the constructor must be privet
    private Singleton(){
// we use hashCode to test the code of instance
        System.out.println(this.hashCode());

// Use to randomize the order in the list
        Collections.shuffle(myList);
        System.out.println(myList);
    }

    public  static List<Integer> getMyList() {
        return myList;
    }
}
