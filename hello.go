package main

import "fmt"

type vertex struct{

	x int
	y int


} 

var(

	p1 = vertex{1,2}
	q1 = &vertex{1,2}
	r1 = vertex{y:8,x:9}
	s1 = vertex{}




)

func main() {
	
	v := vertex{1,2}
	q := &v
	q.x = 4
	q.y = 9 

	a := new(vertex)
	fmt.Println("a: ",a)
	a.x,a.y=12,13
	fmt.Println(a)
	fmt.Println(v)

	fmt.Println(p1,q1,r1,s1)
}