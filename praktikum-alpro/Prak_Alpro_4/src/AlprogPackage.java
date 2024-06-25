public class AlprogPackage {

    public StackLab box;

    public AlprogPackage() {
        // Instantiate the stack here
        // The max size of items inside box is 5
        
        // YOUR CODE HERE
        box = new StackLab(5);
        
        
        // END YOUR CODE HERE
    }
    
    public void assign(String[] items) {
        /*
        *   Assign items to the box
        *   Because items variable is an array, you can use loop
        *   to add them to the stack
        *
        *
        *   If the stock already full, print the message "the stock is already full"
        *   and break the loop
        *
        *   After you added the customers to the stock, try to print the items data
        *   that we already added to the stock
        *   Use the method that you already created in the StackLab class
        */
        
        // YOUR CODE HERE
        int pointer = 0;
        if (box.isNotFull()) {
            while (box.isNotFull()) {
                box.push(items[pointer]);
                pointer++;
            }
        } else System.out.println("The stock is already full");
        for (int i=0; i<pointer; i++) System.out.println(box.pop());
        // END YOUR CODE HERE
    }
}