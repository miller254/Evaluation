//reversing an integer.
public class reverse {
	public static void main(String []args){
		reverse(310);	
	}
	public static int reverse(int original) {
		int reverse=0;
		while(original!=0){
		int digit=original%10;
		reverse=reverse*10+digit;
		original=original/10;
		}
		System.out.println("new string is"+reverse);

		return reverse;
		}
}
 //add digits result is 1 digit
public class reverse {
	public static void main(String []args){
		int n=38;
		System.out.println(digsum(n));
		}
static int digsum(int n){
if(n==0){
return 0;
}
return(n%9==0)?9:(n%9):
}
public static void main (String [] args){
int n=38;
System.out.println(digsum(n));
}
}
//palindrome
public class pali {
	public static void main(String [] args){
		String word="adabu";
		if(ispalindrome(word)) {
			System.out.println("is palindrome");
					
		}
		else {
			System.out.println("not palindrome");
		}
	}
		public static boolean ispalindrome(String word) {
			char[] small=word.toCharArray();
			int i1=0;int i2=small.length-1;
			if(small[i1]!=small[i2]) {
			return false;	
	}
			else {
				++i1;
				--i2;
				return true;
			}
}
}
//compression

public class solution {
	public static void main(String[] args) {
	    String string = "aavvjhgbhjb";
	   
	    int counter;
	    String result="";
	    int i=0;
	    while (i<string.length()){
	        counter=1;
	        for (int j=1;j<string.length();j++){	 
	            System.out.println("string length ="+string.length());  
	            if (string.charAt(i) == string.charAt(j)){
	                  counter++;
	            }
	      }
	      result = result+string.charAt(i)+counter; 
	      string = string.replaceAll(String.valueOf(string.charAt(i)), ""); 
	    }
	    System.out.println("result is = "+result);
	}
}
