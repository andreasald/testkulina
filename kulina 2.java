import java.util.Scanner;




public class MyClass 
{
    
	public static void main(String args[]) 
    
	{
        
        
		Scanner show = new Scanner(System.in);

		System.out.print("Input angka = ");

		int input = show.nextInt();

		long fibo[] = new long[input];

		
fibo[0] = 0;
		
		fibo[1] = 1;
		
		

		for(int i = 2; i < input; i++) 
		{
			
			fibo[i] = fibo[i-1] + fibo[i-2];
		
		}
		
		

		for (int i = 0; i < input; i++) 
		{
			
			System.out.print(fibo[i] +  " ");
		
		}
        
        
    
	}

}