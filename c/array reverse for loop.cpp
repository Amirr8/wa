#include<stdio.h>
int main(){
	int arr[4][4];
	int z=0;
		for(int i=3;i>=0;i--){
	for(int j=0;j<=i;j++){
    arr[i][j]=z+=1;
	}
}
	for(int i=3;i>=0;i--){
	for(int j=0;j<=i;j++){
	printf("%d\t",arr[i][j]);
	}
	printf("\n");
}

return 0;
}
