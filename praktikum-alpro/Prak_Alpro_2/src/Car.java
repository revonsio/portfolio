/**
 * Use the same approach as Human class and Dog class
 */
public class Car {
	String brand;
	String color;
	
	public Car(String brand, String color) {
		this.brand = brand;
		this.color = color;
	}
	
	void profile() {
		System.out.println("Brand : "+brand);
		System.out.println("Color : "+color);
	}
	
	String profile2() {
		return "Brand : "+brand+"\nColor : "+color;
	}
	
	void origin() {
		if (brand == "Toyota") System.out.println("Made in Japan");
		else System.out.println("Made in USA");
	}
	
	String origin2() {
		if (brand == "Toyota") return "Made in Japan";
		else return "Made in USA";
	}
}
