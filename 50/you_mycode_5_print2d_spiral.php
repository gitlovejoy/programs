

<?php
// 1  2  3  4
// 12 13 14 5
// 11 16 15 6
// 10 9  8  7

//T
// 00 01 02 03
// 10 11 12 13
// 20 21 22 23
// 30 31 32 33
//B,L		R

//output 00 01 02 03 13 23 33 32 31 30 20 10 11 12 22 21

$mrows=4;
$ncols=4;
$input=array();

for($i=0;$i<$mrows;$i++){
	for($j=0;$j<$ncols;$j++){
		$input[$i][$j]=$i.$j;
	}
}

spiralTree($input,$mrows,$ncols);

function spiralTree($input,$m,$n){
	//move right
	//move down
	//move left
	//move up

	$top=0; //Top
	$bottom=$m-1; //Bottom
	$left=0; //Left
	$right=$n-1;

	$dir=0;

	while($top<=$bottom && $left<=$right){
	
		if($dir==0){
			//list($top,$bottom,$left,$right)=
			moveRight($input,$top,$bottom,$left,$right);
			$top++;
		}else if($dir==1){
			//list($top,$bottom,$left,$right)=
			moveDown($input,$top,$bottom,$left,$right);
			$right--;
		}else if($dir==2){
			//list($top,$bottom,$left,$right)=
			moveLeft($input,$top,$bottom,$left,$right);
			$bottom--;
		}else if($dir==3){
			//list($top,$bottom,$left,$right)=
			moveUp($input,$top,$bottom,$left,$right);
			$left++;
		}
		$dir=($dir+1)%4;
	}

}

function moveUp($input,$top,$bottom,$left,$right){

	for($i=$bottom;$i>=$top;$i--){
		echo $input[$left][$i].",";
	}
	echo "\n";
	//return array($top,$bottom,$left,$right);

}


function moveLeft($input,$top,$bottom,$left,$right){
	//move right to left

	for($i=$right;$i>=$left;$i--){
		echo $input[$bottom][$i].",";
	}
	echo "\n";
	//return array($top,$bottom,$left,$right);
}

function moveDown($input,$top,$bottom,$left,$right){
	//move top to bottrom

	for($i=$top;$i<=$bottom;$i++){
		echo $input[$right][$i].",";
	}
	echo "\n";
	//return array($top,$bottom,$left,$right);
}

function moveRight($input,$top,$bottom,$left,$right){
	
	//left to right
	for($i=$left;$i<=$right;$i++){
		echo $input[$top][$i].",";
	}
	echo "\n";
	//return array($top,$bottom,$left,$right);
}

//left=0,right=3