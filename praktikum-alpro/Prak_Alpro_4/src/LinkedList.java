public class LinkedList {

    public Node head;

    public LinkedList() {
        this.head = null;
    }

    public void addToHead(String data) {
        // This method is used to add a new data on the head of LinkedList
        // YOUR CODE HERE
        Node newData = new Node(data);
        head = newData;
        // END YOUR CODE HERE
    }

    public void addToTail(String data) {
        // Fill this method to add a new data on the tail of LinkedList
        // YOUR CODE HERE
        if (head == null) {
            addToHead(data);
        } else {
            Node newData = new Node(data);
            Node theLinkedList = head;
            while (theLinkedList.getNextNode() != null) theLinkedList = theLinkedList.getNextNode();
            theLinkedList.setNextNode(newData);
            // head = theLinkedList;
        }
        // END YOUR CODE HERE
    }

    public String removeHead() {
        // Fill this method to get and remove the head of LinkedList
        // YOUR CODE HERE
        String display = head.data;
        Node oldLinkedList = head;
        head = oldLinkedList.getNextNode();
        return display;
        // END YOUR CODE HERE
    }

}