#include<stdio.h>
int main(){
	int arr[4][4];
	int i;
	int j;
	int z=0;
		for(i=0;i<4;i++){
	for(j=0;j<=i;j++){
	arr[i][j]=z+=3;
	
	}
}
	for(i=0;i<4;i++){
	for(j=0;j<=i;j++){
	printf("%d\t",arr[i][j]);
	}
	printf("\n");
}

return 0;
}
