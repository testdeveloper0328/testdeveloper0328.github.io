package main

import (
	"fmt"
	
)

func multiplica(flag int, pos int,matrizB [3][2]int, matrizA [2][3]int) (sumatoria int){
 
var resultado int
sumatoria = 0
    for j := 0; j < 3; j++ {		
	    resultado = matrizA[pos][j] * matrizB[j][flag]
	    sumatoria = sumatoria + resultado   
    }
	fmt.Println(sumatoria)
	return sumatoria	
}

func main() {
	fmt.Println("Multiplicando Matrices")
	var matrizA [2][3]int
	var matrizB [3][2]int
	var matrizResultante [2][2]int
	var incrementA = 1
	var incrementB = 7
	for i := 0; i < 2; i++ { 
          for j := 0; j < 3; j++ { 
            matrizA[i][j] = incrementA
	    incrementA++ 
         } 
       } 

	for i := 0; i < 3; i++ { 
          for j := 0; j < 2; j++ { 
            matrizB[i][j] = incrementB
	    incrementB++ 
         } 
       } 
	for i := 0; i < 2; i++ { 	   	
          for j := 0; j < 2; j++ { 			
            matrizResultante[i][j] = multiplica(i, j,matrizB,matrizA)  
         } 
       } 
      fmt.Println(matrizResultante)
}
