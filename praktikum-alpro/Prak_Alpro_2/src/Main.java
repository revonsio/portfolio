/**
 * IS184203-Genap-2020/21 - Computing Lab. Works 2
 * Name of Project  : Module 02
 * Student ID       : Your NRP here
 * Student Name     : Your Full Name Here
 * Class            : Your Class here
 * Submission Date  : dd-mm-yyyy
 * 
 * 
 * NEVER DO 'COPY-PASTE' WHILE YOU ARE CODING
 * DON'T CHANGE ANY DEFAULT CODE PROVIDED BY ASSISTANT!
 * START YOUR CODE AFTER "YOUR CODE HERE!"
 *
 * 
 * Main class of the Java program.
 * 
 * this is the class where you run all the code
 */

public class Main {
    
    static void separator() {
        System.out.println("--------------------------------------------------");
    }
    
    public static void main(String[] args) {
        
        /**
         * PROBLEM 1
         * 
         * before working on this problem
         * you should check on the class Human
         * 
         * note: complete Human.java before working on problem one
         */
         System.out.println("PROBLEM 1");
         
        //instantiate the object human
        //YOUR CODE HERE
        Human sapaAja = new Human("Aria",21,170,80);
        //END OF CODE


        //show the profile
        //hint: call the profile method
        //YOUR CODE HERE
        sapaAja.profile();
        // END OF CODE


        //make the human speak
        //hint: call the speak method
        //note: don't forget to use System.out.println to show the word
        //YOUR CODE HERE
        System.out.println(sapaAja.speaks());
        //END OF CODE


        //show the height of the human
        //note: don't forget to use System.out.println
        //YOUR CODE HERE
        System.out.println(sapaAja.myHeight());
        //END OF CODE


        //show the weight of the human
        //note: don't forget to use System.out.println
        //YOUR CODE HERE
        System.out.println(sapaAja.myWeight());
        //END OF CODE


        //show the height in feet
        //YOUR CODE HERE
        System.out.println(sapaAja.myHeightInFeet()+" feet");
        //END OF CODE
        
        
        //show the person's favorite food
        //YOUR CODE HERE
        System.out.println(sapaAja.favoriteFood("steaks"));
        //END OF CODE

        
        //show the person's favorite number
        //YOUR CODE HERE
        System.out.println(sapaAja.favoriteNumber(3));
        //END OF CODE
        
        separator();
        
        /**
         * PROBLEM 2
         * 
         * before working on this problem
         * you should check on the class Dog
         * 
         */
         System.out.println("PROBLEM 2");
         
        //instantiate the object Dog
        //YOUR CODE HERE
        Dog anjing = new Dog("Haki",2);
        //END OF CODE
        

        //print the dog name
        //YOUR CODE HERE
        System.out.println("The dogs name : "+anjing.name);
        //END OF CODE
        
        
        //make the dog bark
        //YOUR CODE HERE
        anjing.sound();
        System.out.println(anjing.sound2());
        //END OF CODE
        
        
        //now calculate how old is your dog in human year
        //YOUR CODE HERE
        anjing.humanAge();
        System.out.println(anjing.humanAge2());
        //END OF CODE
        
        separator();
        
        /**
         * BONUS PROBLEM
         *
         * create a new class called Car in Car.java
         * the object has attribute brand and color
         *
         * create methods that can do these:
         * 1. show the profile of the car
         * 2. tells us where the car is made based on the brand 
         * (ex: toyota is made in Japan, so the output will be Japan,
         * Ford in made in USA, so the output will be US,
         * etc)
         *
         * then instantiate the object, and call all methods that you create
         *
         * be creative!
         *
         */
         System.out.println("BONUS PROBLEM");
         Car vroom = new Car("Ford","Red");
		 vroom.profile();
		 System.out.println(vroom.profile2());
		 vroom.origin();
		 System.out.println(vroom.origin2());
    }
}


/**
 * DECLARATION OF ORIGINAL WORK
 * I, hereby declare that the code is my original work.
 * I have honored the principles of academic integrity and have upheld
 * ITS''s  Student Code of Academic in the completion of this work.
 */

