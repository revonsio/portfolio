public class Lecturer extends Person{

    //create constructor based on parent class
    //YOUR CODE HERE
	public Lecturer(String name, int age) {
		super(name,age);
	}
    //END OF CODE

    //override the method current work
    // tell the specific work for lecturer
    //YOUR CODE HERE
	String currentWork() {
		return "ngajar...";
	}
    //END OF CODE

    //override the method payTax
    // for lecturer, they have tax rate 2%
    // YOUR CODE HERE
	double payTax() {
		double tax = income*0.02;
		return tax;
	}
    // END OF CODE

}
