#include<stdio.h>
int main(){
int array[6];
int z;
int sum=0;
for(z=0;z<6;z++){
	printf("enter numbers:");
	scanf("%d",&array[z]);
}
for(z=0;z<6;z++){
if(array[z]==3){
	sum+=array[z];
}
}
if(sum==12){
printf("TRUE");
}else{
printf("FALSE");
}
return 0;
}
