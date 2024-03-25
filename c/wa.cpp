#include<stdio.h>
int all(int z,int x,int c){
int sum;
if (z==13){
	return 0;
}else if(x==13){
	sum=z;
}else if(c==13){
	sum=z+x;
}else{
	sum=z+x+c;
}}
int main(){
int z,x,c,sum;
printf("enter z:");
scanf("%d",&z);
printf("enter x:");
scanf("%d",&x);
printf("enter c:");
scanf("%d",&c);
sum=all(z,x,c);
printf("total number is %d",sum);
return 0;
}
