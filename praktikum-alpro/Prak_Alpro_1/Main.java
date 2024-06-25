/**
 * IS184203-Genap-2020/21 - Computing Lab. Works 1
 * Name of Project  : Module 01
 * Student ID       : Your NRP here
 * Student Name     : Your Full Name Here
 * Class            : Your Class here
 * Submission Date  : dd-mm-yyyy
 */

/**
 *
 * NEVER DO 'COPY-PASTE' WHILE YOU ARE CODING
 * DON'T CHANGE ANY DEFAULT CODE PROVIDED BY ASSISTANT!
 * START YOUR CODE AFTER "YOUR CODE HERE!"
 * 
 */

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Problem1();
        Problem2();
        Problem3();
        BonusProblem();

    }
    public static void Problem1(){
        //Use simple if else syntax to generate the result
        
        /*
            Example:
            
            System and input:
            Input the 1st number: 1
            Input the 2nd number: 2
            Input the 3rd number: 3
            
            System:
            The smallest: 1
        */    
        
        Scanner input = new Scanner(System.in);

        System.out.print("Input the 1st number: ");
        int num1 = input.nextInt();

        System.out.print("Input the 2nd number: ");
        int num2 = input.nextInt();

        System.out.print("Input the 3rd number: ");
        int num3 = input.nextInt();
        
        //YOUR CODE HERE!
		int smallest;
        if (num1 < num2) {
			smallest = num1;
		} else smallest = num2;
		if (num3 < smallest) smallest = num3;
		System.out.println("The smallest: "+smallest);

        separator();
    }
    
    public static void Problem2(){
        //Use some simple loops to calculate result of a factorial number!
        
         /*
            Example:
            
            System: "Input number of terms: "
            User Input: 5
            System:
            Factorial of 5 is: 120
        */
        
        int i,n;
        int f=1;

        System.out.print("Input number of terms : ");
        Scanner input = new Scanner(System.in);
        n = input.nextInt();

        //YOUR CODE HERE!
        for (i=n; i>0; i--) f *= i;
		System.out.println("Factorial of "+n+" is : "+f);
        
        separator();
    }
    
    
    public static void Problem3(){
        //Use some simple loops to generate all coordinate!
        
        /*
            Example:
            
            System: "Enter number: "
            User Input: 5
            System: 
            (0,0)
            (1,0) (1,1)
            (2,0) (2,1) (2,2)
            (3,0) (3,1) (3,2) (3,3) 
            (4,0) (4,1) (4,2) (4,3) (4,4) 
        */
        System.out.println("Problem 3");
        Scanner input = new Scanner(System.in);
        int number;
        do {
		    System.out.print("Enter number: ");  
            number = input.nextInt();
            if(number <= 0)
            {
                System.out.println("number cannot be zero or negative!");
            }
		} while (number <= 0);
        
        //YOUR CODE HERE!
		for (int i=0; i<number; i++) {
			for (int j=0; j<=i; j++) System.out.print("("+i+","+j+") ");
			System.out.println();
		}


        separator();
    }
    
    public static void BonusProblem() {
        //Write a program to make fibonacci series!
        
        /*
            Example:
            
            System: "Enter number of series: "
            User Input: 8
            System: "Fibonnaci Series of 8 numbers: 0 1 1 2 3 5 8 13"
        */
        System.out.println("Bonus Problem");
        Scanner input = new Scanner(System.in);
        System.out.println("Enter number of series: ");
        int nNumber = input.nextInt();
        
        int firstNumber = 0;
        int secondNumber = 1;
        
        System.out.print("Fibonacci Series of "+ nNumber +" numbers: ");
        
        //YOUR CODE HERE!
		int thirdNumber = 0;
		for (int i=0; i<nNumber; i++) {
			System.out.print(firstNumber+" ");
			firstNumber += secondNumber;
			secondNumber = thirdNumber;
			thirdNumber = firstNumber;
		}
		System.out.println();
		
        separator();
    }
    
    public static void separator(){
        System.out.println("------------------------------- " );
        System.out.println();
    }
}

/**
 * DECLARATION OF ORIGINAL WORK
 * I, hereby declare that the code is my original work.
 * I have honored the principles of academic integrity and have upheld
 * ITS''s  Student Code of Academic in the completion of this work.
 */

