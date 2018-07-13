import java.util.Scanner;



public class MyClass 
{
    

	public static void main(String args[]) 
    
	{
        

		Scanner show = new Scanner(System.in);
		
		System.out.print("Input angka = ");
		
		int X = show.nextInt();
        
        
		//int X = 1356789;
       
		String temp = Integer.toString(X);
        
		int panjang = temp.length();
        
		int berikutnya=0;
        
		char [] input = temp.toCharArray();
        
        

		for(int i=0;i<panjang;i++)
        
		{
            
			
			if(i!=panjang-1)
			
			{	
			    
				System.out.print(input[i]);
			    
			
				for(int j=1;j<panjang-i;j++)
			    
				{
			        
					System.out.print("0");

				}

                
	
				System.out.println("");
	
            
			}
            
			
			
			else

			{
                
				System.out.println(input[i]);

 	        	}
        
		
		}


    
	}

}
