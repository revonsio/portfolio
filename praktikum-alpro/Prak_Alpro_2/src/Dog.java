public class Dog {
    // declare the global variable
    // dog has name and age
    //YOUR CODE HERE
    String name;
    int age;
    //END OF CODE
    
    
    // create a constructor
    // dog has attribute name and age
    //YOUR CODE HERE
    Dog(String name, int age) {
        this.name = name;
        this.age = age;
    }

    //END OF CODE


    // dog can bark
    // so create a method called bark
    // that return string "bark..bark.."
    //YOUR CODE HERE
    void sound() {
        System.out.println("bark..bark..");
    }
    
    String sound2() {
        return "bark..bark..";
    }
    //END OF CODE


    // dog and human have different time in year, 1 year old dog is equal to 2.5 years in human's year
    // create a method to calculate dog year in human year
    //YOUR CODE HERE
    void humanAge() {
        double equals = age*2.5;
        System.out.println(equals+" years old");
    }
    
    String humanAge2() {
        double equals = age*2.5;
        return equals+" years old";
    }    
    //END OF CODE
}
