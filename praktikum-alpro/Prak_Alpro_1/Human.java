public class Human {
    String name;
    int age;

Human(String name, int age) {
    this.name = name;
    this.age = age;
}
String myName() {
    String namaku = "my name is " + name;
    return namaku;
}
String myAge() {
    String Umurku = "My age is " + age;
    return Umurku;
}
}
