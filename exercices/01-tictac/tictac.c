#include <stdio.h>                              
#include <stdlib.h>

void tictac(int nb)                                           
{                                               
   while (nb <= 100)                               
   {
       if (nb%3 == 0) {
           printf("%d Tic\n", nb);
       }
       if (nb%5 == 0) {
           printf("%d Tac\n", nb);
       }
       if (nb%5 == 0 & nb%3 ==0) {
           printf("%d Tictac\n", nb);
       }

       printf("%d\n",nb);
       nb ++;
   }
}

int main(void)
{
    tictac(1); 
    return 0;
}