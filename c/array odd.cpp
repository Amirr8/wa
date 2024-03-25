#include<stdio.h>
int main(){
	int array[10];
	for(int z=0;z<10;z++){
		printf("enter number");
		scanf("%d",&array[z]);
	}
	for(int z=0;z<10;z++){
		if(array[z]%2==1){
	printf("this is odd numbers %d\n",array[z]);
}
}
return 0;
}
