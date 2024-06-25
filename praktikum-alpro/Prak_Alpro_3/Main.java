/**
 * IS184203-Genap-2020/21 - Computing Lab. Works 3
 * Name of Project  : Module 03
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
 * this is the class where you run all the code
 *
 */
import java.util.Scanner;

public class Main {

    /**
     * This method is used to print the dividing line in each problem
     */
    static void separator() {
        System.out.println("--------------------------------------------------");
    }

    /**
     * Main method
     */
    public static void main(String[] args) {
        /**
         * PROBLEM 1 START HERE
         *
         * Make a simple program to display student data with
         * several parameters that have been provided.
         *
         * Work on the Person.java and Student.java file first.
         */

        /**
         * Step 1.11
         * Instantiate Student and Person objects!
         */
        // Start code here
		Person human = new Person("Aria", 21);
		Student mahasiswa = new Student("Satya", 22);
        // end code here

        // call every method that Person class has
        //YOUR CODE HERE
		System.out.println("Hello, my name is "+human.name+", I'm "+human.age+" years old.");
		System.out.print("My Resident ID is : ");
		human.setResidentId("357824030918270003");
		
		/*
		Doesn't need System.out.println because getResidentId()
		didn't (and can't) use return keyword
		*/
		human.getResidentId();
		
		//Method overloading
		human.setAddress("Keputih");
		System.out.println(human.address);
		human.setAddress("Keputih", "Surabaya");
		System.out.println(human.address);
		human.setAddress("Keputih", "Surabaya", 60117);
		System.out.println(human.address);
		
		
		System.out.println(human.currentWork()+"\n");
		human.countIncome(8);
		System.out.println("My tax is about Rp"+human.payTax());
		System.out.println("I can apply for a loan of Rp"+human.makeLoan()+"\n");

        //call every method that Student class has
        //YOUR CODE HERE
		
		/*
			Don't forget to use whole number so that
		the compiler can call the right method
		the method that belongs to Student class
		not Person class.
		*/
		mahasiswa.countIncome(2000000.0);
		
		System.out.println("student tax : "+mahasiswa.payTax()+"\nLoan? "+mahasiswa.makeLoan());
		
		
		//Method overriding
		System.out.println(mahasiswa.currentWork());
		
		/*
		Call Person class methods with mahasiswa instance
		*/
		System.out.println("Hello, my name is "+mahasiswa.name+", I'm "+mahasiswa.age+" years old.");
		System.out.print("My Resident ID is : ");
		mahasiswa.setResidentId("357824030918270001");
		mahasiswa.getResidentId();
		//Method overloading
		mahasiswa.setAddress("Walikota Mustajab");
		System.out.println(mahasiswa.address);
		mahasiswa.setAddress("Walikota Mustajab", "Surabaya");
		System.out.println(mahasiswa.address);
		mahasiswa.setAddress("Walikota Mustajab", "Surabaya", 60118);
		System.out.println(mahasiswa.address);
		
		
        /**
         * Step 1.12
         * Set student id  = 05211940000xxx
         * Set new student id = 5026191xxx
         *
         * Note: xxx is the last 3 digits of your StudentID (NRP)
         */
        // Start code here
		mahasiswa.setStudentID("05211940000054");
        // end code here

		
        /**
         * Step 1.13
         * Set favorite courses for Student objects!
         */
        // Start code here
		mahasiswa.setFavCourse("Programming");

        // end code here


        /**
         * Step 1.14
         * Display student data with displayData method!
         */
        // Start code here
		displayData(mahasiswa);

        // end code here


        /**
         * PROBLEM 1 END HERE
         */

        separator();

        /**
         * Problem 2
         * 
         * instantiate the object lecturer
         * call every method that lecturer object has
         */
        //YOUR CODE HERE
        Lecturer dosen = new Lecturer("Mahatma", 23);
		
		//Method overriding
		dosen.countIncome(8);
        System.out.println("His tax : "+dosen.payTax());
		
		/*
		Call Person class methods with dosen instance
		*/
		System.out.println("Hello, my name is "+dosen.name+", I'm "+dosen.age+" years old.");
		System.out.print("My Resident ID is : ");
		dosen.setResidentId("357824030918270009");
		dosen.getResidentId();
		//Method overloading
		dosen.setAddress("Perumdos");
		System.out.println(dosen.address);
		dosen.setAddress("Perumdos", "Surabaya");
		System.out.println(dosen.address);
		dosen.setAddress("Perumdos", "Surabaya", 60119);
		System.out.println(dosen.address);
		System.out.println("I can apply for a loan of Rp"+dosen.makeLoan()+"\n");
        //END OF CODE
        
        
        /**
         * Bonus Problem
         * 
         * We will create a game
         * This game have player and monster
         * create the class player and set the attribute
         * for the attribute and method, you can decide by yourself
         * 
         * there's also a premium player that can access unique item.
         * this unique item can only be accessed by premium player
         * use the inheritance consept to create this class
         * 
         * for the monster, this game have 2 type of monster, melee and ranged.
         * use the same approach from before to finish this problem
         * 
         * be creative!
         */
        
        

    }

    /**
     * This method is used to display student data in PROBLEM 1!
     */
    public static void displayData(Student stud){
        //System.out.println("Name : "+stud.getName());
        System.out.println("Student ID : "+stud.getStudentID());
        System.out.println("Favorite Course : "+stud.getFavCourse());
        //System.out.println("Available Credit : "+stud.getCredit());
        separator();
    }
}

/**
 * DECLARATION OF ORIGINAL WORK
 * I, hereby declare that the code is my original work.
 * I have honored the principles of academic integrity and have upheld
 * ITS's Student Code of Academic in the completion of this work.
 */