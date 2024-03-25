#include<stdio.h>
int main(){
int array[5];
int z;
for(int z=0;z<5;z++){
	printf("enter numbers:");
	scanf("%d",&array[z]);
}
for(int z=0;z<5;z++){
if(array[z]%10==5||array[z]%10==4){
	printf("TRUE");

return 0;
}
}
	printf("FALSE");

return 0;
}
