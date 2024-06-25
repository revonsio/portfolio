import java.util.Scanner;
public class PROB_1 {
    public static void main(String[] args) {
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

        System.out.println("System and Input :");

        System.out.print("Input the 1st number: ");
        int a = input.nextInt();
        System.out.print("Input the 1st number: ");
        int b = input.nextInt();
        System.out.print("Input the 1st number: ");
        int c = input.nextInt();

        int smallest;
        if (a < b) {
            smallest = a;
        } else {
            smallest = b;
        } if (c < smallest) {
            c = smallest;
        }



        System.out.println("The smallest: " + smallest );

    }
}
