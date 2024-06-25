public class Student extends Person{

    private String studentId, newStudentId, favCourse;

    //create constructor based on parent class
    //YOUR CODE HERE
	public Student(String name, int age) {
		super(name,age);
	}
    //END OF CODE

    //override the method currentWork in Person class
    // tell the specific work for student
    String currentWork() {
		return "Studying...";
    }

    // override the method countIncome
    // student do not have work hour so we can not use that method
    void countIncome(double monthlyWage) {
        // assume the student get the money from their parent as monthlyWage
        // set that as the income
		System.out.println("My monthly wage is about : "+monthlyWage);;
    }

    // override the method payTax
    // student do not pay tax
    double payTax() {
        // return zero for student's tax
		return 0.0;
    }

    // override the method makeLoan
    // student can not make loan
    String makeLoan() {
        // return can not make loan
		return "student can't apply a loan";
    }
    
    public void setFavCourse(String favCourse){
        // set the favourite course
		this.favCourse = favCourse;
    }
    
    // 
    public String getFavCourse(){
        // return favourite course
		return favCourse;
    }
    
    /**
     * Create a setter method to set the new student ID format!
     * 
     * Example:
     * Old SID: 05212040000001
     * Process  :
     * - 052 => 5026
     * - 120 => 201
     * - 40000 => lost
     * - 001 => 001
     * New NRP: 5026201001
     */
    public void setStudentID(String studentID){
        // Start your code here
		studentId = studentID;
        String one = studentID.substring(3,4);
		String batch = studentID.substring(4,6);
		String unique = studentID.substring(11);
		newStudentId = "5026" + batch + one + unique;
		System.out.println("New NRP: "+newStudentId);
        // End code here
    }
    
    public String getStudentID(){
        // return student ID
		return studentId;
    }
}
