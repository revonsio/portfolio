public class Human {
    // declare the global variable
    // human has name, age, height, weight
    String name;
    int age, height, weight;

    // a constructor need to be defined to initialize the object

    /**
     * This is constructor
     * used for instantiating an object
     * @param name of the human
     * @param age of the human
     * @param height of the human
     * @param weight of the human
     */
    Human(String name, int age, int height, int weight) {
        // fill the attributes
        // YOUR CODE HERE
        this.name = name;
        this.age = age;
        this.height = height;
        this.weight = weight;
        // END OF CODE
    }

    // first we need to create method that print the profile of the person

    /**
     * This is profile method
     * shows the profile of specific human
     */
    void profile() {
        //print the name
        System.out.println("Name: "+name);

        // use the same approach to print the age, height and weight
        // YOUR CODE HERE
        System.out.println("Age: "+age);
        System.out.println("Height: "+height);
        System.out.println("Weight: "+weight);
        // END OF CODE
    }

    // human can speak, so we need to create a method called speak

    /**
     * this method make human can speak out their name
     *
     * @return string
     */
    String speaks() {
        // fill the return syntax, so it will show
        // "Hi, My name is [human's name], I am [human's age]"
        
        return "Hi, My name is "+name+", I am "+age;  // <-- YOUR CODE HERE (one line)
    }

    // now create a method to show the person's height

    /**
     * get the human's height
     *
     * @return height in int
     */
    String myHeight() {
        // fill the return syntax, so it will show
        // "My height is [height] cms"

        return  "My height is "+height+" cms";  // <-- YOUR CODE HERE (one line)
    }

    //now create a method to show the person's weight

    /**
     * get the human's weight
     *
     * @return weight in int
     */
    String myWeight() {
        // use the same approach as myHeight method
        // to show "My weight is [weight] kgs"
        
        //YOUR CODE HERE
        String berat = "My weight is "+weight+" kgs";
        return berat;
        //END OF CODE
    }

    // We realize that not everyone in this world uses metric system to show their height
    // so we will make a method that count the height in feet

    /**
     * count the height in feet
     *
     * @return
     */
    double myHeightInFeet() {
        //note: 1 feet equals to 30.48 cm

        // YOUR CODE HERE
        double feet = height/30.48;
        return feet;
        // END OF CODE
    }
    
    // show the person's favorite food

    /**
     * show the person favorite food
     *
     * @param food : any food you want
     * @return String
     */
    String favoriteFood(String food) {
        // fill the return syntax so it will show
        // "My favorite food is [food]" 
        
        return "My favourite food is "+food; //YOUR CODE HERE
    }
    
    // tell us the person's favorite number

    /**
     * show the person's favorite number
     * 
     * @param number : any number you want
     * @return int
     */
    String favoriteNumber(int number) {
        // use the same approach in favorite food
        // "My favorite number is [number]"
        
        // YOUR CODE HERE
        return "My favourite number is "+number;
        //END OF CODE
    }
}
