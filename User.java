import java.util.Scanner;

public class User {

	private int a,b,c,sum,product,small,large;
	private double average;
	public User(){
			Scanner input = new Scanner (System.in);
			System.out.println("Enter Three Integers: ");
		try{
			a= Integer.ParseInt(input.nextInt());
			b= Integer.ParseInt(input.nextInt());
			c= Integer.ParseInt(input.nextInt());
			input.close();
		}
		catch(Exception e){
			System.out.println("Error");}
		}
	}
	public void setSum(){
		sum=a+b+c;
	}
	public int getSum(){
		System.out.println(sum);
		return sum;
	}
	public void setProduct(){
		product= a*b*c;
	}
	public int getProduct(){
		return product;
	}
	public void setAverage(){
		average= (sum)/3;
	}
	public double getAverage(){
		return average;
	}
	public void setSmallest(){
		if (b<a)
			small=b;
		else if(c<a)
			small=c;
		else
			small=a;
	}
	public int getSmallest()
	{
		return small;
	}
	public void setLargest(){
		if (b>a)
			large=b;
		else if(c>a)
			large=c;
		else
			large=a;
	}
	public int getLargest()
	{
	return large;
	}
	}
