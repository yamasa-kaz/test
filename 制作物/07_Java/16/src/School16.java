
public class School16 {

	public static void main(String[] args) {
		
		System.out.println(totalPrice(300) + "\r\n");
		System.out.println(totalPrice(450) + "\r\n");

	}

	public static int totalPrice(int fruitprice) {
		double tax = 1.08;
		int haiso = 350;
		return (int)(fruitprice * tax) + haiso;
	}
}
