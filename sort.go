package main 

import ( "fmt"
		 
)

func sort(a []int, n int) []int {

	var i,j,b int
	for i=0;i<n;i++{
		for j=i;j<n;j++{
			if a[i]>a[j]{
				b = a[i]
				a[i] = a[j]
				a[j] = b
			}
		}
	}

return a
	
}

func main() {
    var i,n int
    var a []int
    fmt.Println("enter no. of elements: ")
    fmt.Scan(&n)

    for i = 0; i<n ;i++{

    	fmt.Println("enter the",i," elements:")
    	fmt.Scan(&i)
    }

    sort(a,n)

    

}