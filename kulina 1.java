import java.util.Scanner;




public class MyClass 
{
    
	public static void main(String args[]) 
    
	{
        
		Scanner show = new Scanner(System.in);
        
		System.out.print("Input angka = ");
		
		int input = show.nextInt();
		
		
		System.out.println(find(input));
        
    
	}
    
    

	public static String find(int inputX)
    
	{
        
		int x=0;
        
		boolean result = false;
        
		double checkRoot = Math.sqrt(x);
    
        
		if (Math.floor(checkRoot)==checkRoot)
        
		{
                
			result = false;
        
		} 
        
        
		
		else if( ((x%2!=0 && x%3!=0 && x%5!= 0 && x%7!=0) || (x==2 || x==3 || x==5 || x==7)))
        
		{
           
			result = true;
        
		}
        
        

		if(result)
        
		{
            
			System.out.println("PRIMA");
        
		} 
        
		
		else
        
		{
            
			System.out.println("BUKAN PRIMA");
        
		}
        
        
		
	return "";
    
	}
    

}
