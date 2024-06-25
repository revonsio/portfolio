public class Person {
    String name, address;
    int age, income;
    // this attribute must be private because it is sensitive data
    private String residentId;

    Person(String name, int age) {
        // fill the attribute
		this.name = name;
		this.age = age;
    }

    /**
     *
     * @param residentId
     */
    void setResidentId(String residentId) {
        // fill the attribute
		this.residentId = residentId;
    }

    /**
     *
     */
    void getResidentId() {
		System.out.println(residentId);
    }

    // this is method overloading
    /**
     *
     * @param street
     */
    void setAddress(String street) {
        address = street;
    }

    /**
     *
     * @param street
     * @param city
     */
    void setAddress(String street, String city) {
        address = street + ", " + city;
    }

    /**
     *
     * @param street
     * @param city
     * @param postalCode
     */
    void setAddress(String street, String city, int postalCode) {
        address = street + ", " + city + ", " + postalCode;
    }

    // this method shows what the person doing
    /**
     *
     * @return
     */
    String currentWork() {
        // because there's no specific job,
        // show "I am doing my work"

        return "I am doing my work";//YOUR CODE HERE
    }

    // we need to count the income of each person
    /**
     *
     * @param workHours : work hours per day
     * @return
     */
    void countIncome(int workHours) {
        // the average hourly wage in Indonesia is Rp70000.
        // count the income per month for each person
        // assume that everyone work 5 days/week
        // 4 weeks in a month
        //YOUR CODE HERE
		income = 70000*workHours*5*4;
        //END OF CODE
    }

    // every person must pay tax based on their income
    /**
     *
     * @return
     */
    double payTax() {
        //the tax rate is 2.5%
        // paid yearly
        //YOUR CODE HERE
		double tax = income*0.025;
		return tax;
        //END OF CODE

    }

    // every person can make a loan based on their income
    /**
     *
     * @return
     */
    String makeLoan() {
        // rules:
        // income under 500.000 : can not make loan
        // 500.000 - 1.000.000 : maks loan 750.000
        // 1.000.000 - 3.000.000 : maks loan 1.500.000
        // 3.000.000 - 5.000.000 : maks loan 3.000.000
        // 5.000.000 - 10.000.000 : maks loan 5.000.000
        // above 10M : maks loan 7.500.000
        //YOUR CODE HERE
		if (income <= 500000) return ("can not make loan");
		if (income > 500000 && income <= 1000000) return ("750000");
		if (income > 1000000 && income <= 3000000) return ("1500000");
		if (income > 3000000 && income <= 5000000) return "3000000";
		if (income > 5000000 && income <= 10000000) return "5000000";
		if (income > 10000000) return "7500000";
		else return "";
        //END OF CODE
    }
}
