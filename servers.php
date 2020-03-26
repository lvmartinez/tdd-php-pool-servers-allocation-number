<?
/*
You're running a pool of servers where the servers are numbered sequentially
starting from 1. Over time, any given server might explode, in which case its server
number is made available for reuse. When a new server is launched, it should be
given the lowest available number.
Write a function which, given the list of currently allocated server numbers, returns
the number of the next server to allocate. In addition, you should demonstrate your
approach to testing that your function is correct. You may choose to use an existing
testing library for your language if you choose, or you may write your own process if
you prefer.
For example, your function should behave something like the following:
1 >> next_server_number([5, 3, 1])
2 2
3 >> next_server_number([5, 4, 1, 2])
4 3
5 >> next_server_number([3, 2, 1])
6 4
7 >> next_server_number([2, 3])
8 1
9 >> next_server_number([])
10 1
*/

function next_server_number($serverArr){

	if (!empty($serverArr) && isset($serverArr) ){

		$serSort = sort($serverArr, SORT_NUMERIC ) != 1 ? sort($serverArr, SORT_NUMERIC ): $serverArr;	
		
		if($serSort[0] > 1){
				return "1";
		}
		
		for($i=0; $i<count($serSort); $i++){
			$option = $serSort[$i]+1;

			if ( !in_array($option, $serSort) ){
				return $option;
			}
			
		}


	}else{
		return "1";
	}

}

assert(next_server_number([5,3,1]) == 2);
assert(next_server_number([5,4,1,2]) == 3);
assert(next_server_number([3,2,1]) == 4);
assert(next_server_number([3,2,1]) == 4);
assert(next_server_number([2,3]) == 1);
assert(next_server_number([]) == 1);

?>
