/**
 * IS184203-Genap-2020/21 - Computing Lab. Works 4
 * Name of Project  : Module 04
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
import java.util.Stack;
public class Main {

    public static void main(String[] args) {
        /*
         *  PROBLEM 1
         *
         *  You will implement the Stack using LinkedList
         *  Your task is to complete the StackLab LinkedList class
         *
         */
         
        StackLab problem_1_stack = new StackLab(3);
        
        /*  And then try to add new 3 datas to the stack
         *  And try to print them too
         *  The output should be : 
         *  Jono
         *  Roni
         *  Roni
         *  Jona
         */
        // YOUR CODE HERE
        problem_1_stack.push("Jono");
        problem_1_stack.push("Roni");
        problem_1_stack.push("Jona");
        System.out.println(problem_1_stack.pop());
        System.out.println(problem_1_stack.peek());
        System.out.println(problem_1_stack.pop());
        System.out.println(problem_1_stack.pop());
        
        // END CODE HERE

        /* 
        *   PROBLEM 2
        *
        *   You will modify a new class called AlprogPackage
        *   The class has assign method that will use stack the array below
        *   The instructions are already defined inside AlprogPackage so you can read them on there
        *   NOTE : You only need to changes the AlprogPackage class. Don't changes the 3 rows below.
        *
        */
        
        
        String [] items = {"juice","toy","car","robot","pen","book"};
        AlprogPackage pkg = new AlprogPackage();
        pkg.assign(items);
        
        //PROBLEM 3
        //Call the function to get Output before sorting and after sorting 
        Stack<Integer> s = new Stack<>(); 
        s.push(30); 
        s.push(-5); 
        s.push(18); 
        s.push(14); 
        s.push(-3); 
       
        System.out.println("Stack elements before sorting: "); 
        // YOUR CODE HERE
        StackSort app = new StackSort();
        app.printStack(s);
        // END YOUR CODE HERE
        System.out.println("\nStack elements after sorting:"); 
        // YOUR CODE HERE
        app.sortStack(s);
        app.printStack(s);
        // END YOUR CODE HERE
    }
}
