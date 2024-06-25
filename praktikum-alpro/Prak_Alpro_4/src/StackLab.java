public class StackLab {

    public LinkedList stack;
    // Use size to keep the CURRENT stack's size
    public int size;
    // Use maxSize to keep the MAXIMUM size of stack
    public int maxSize;
    static final int DEFAULT_MAX_SIZE = Integer.MAX_VALUE;
    
    public StackLab() {
        this(DEFAULT_MAX_SIZE);
    }
    
    // We will use this constructor to initialize the linkedList, size, 
    // and maxSize
    public StackLab(int maxSize) {
        this.size = 0;
        // Complete the constructor
        // YOUR CODE HERE
        this.maxSize = maxSize;
        stack = new LinkedList();
        // END YOUR CODE HERE
    }
    
    public boolean isNotFull() {
        // Check if the stack is not full, return true if the stack is not full
        // YOUR CODE HERE
        return size < maxSize;
        // END YOUR CODE HERE
    }
    
    public void push(String data) {
        // Complete this function to add a new data to the top position
        // of the stack
        // YOUR CODE HERE
        if (isNotFull()) {
            stack.addToTail(data);
            size++;
        };
        // END YOUR CODE HERE
    }
    
    public String pop() {
        // Complete this function to get the top data 
        // and remove it from the stack
        // YOUR CODE HERE
        size--;
        return stack.removeHead();
        // END YOUR CODE HERE
    }
    
    public String peek() {
        // Complete this function to get the top data of the stack
        // YOUR CODE HERE
        return stack.head.data;
        // END YOUR CODE HERE
    }
}