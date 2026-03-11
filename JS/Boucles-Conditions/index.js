/* Exercice 1 */

function displayArray(array)
{
    for(let i = 0; i < array.length; i++) {
        console.log(array[i]);
    }
}

displayArray([1, 2, 3, 4, 5]);
displayArray([10, 20, 30, 40, 50]);
displayArray([5, 4, 3, 2, 1]);
displayArray([100, 200, 300, 400, 500]);

/* Exercice 2 */

function displayArrayReverse(array)
{
    for(let j = array.length -1; j >= 0; j--) {
        console.log(array[j]);
    }
}

displayArrayReverse([1, 2, 3, 4, 5]);
displayArrayReverse([10, 20, 30, 40, 50]);
displayArrayReverse([5, 4, 3, 2, 1]);
displayArrayReverse([100, 200, 300, 400, 500]);


/* Exercice 3 */

function findLongestWord(words) {
    let longest = ""; 

    for (let k = 0; k < words.length; k++) {
        if (words[k].length > longest.length) {
            longest = words[k];
        }
    }

    console.log(longest);
}

findLongestWord(['hello', 'world', 'javascript', 'python', 'java']);
findLongestWord(['apple', 'banana', 'cherry', 'date', 'elderberry']);
findLongestWord(['cat', 'dog', 'elephant', 'fox']);


/*Exercice 4*/

function removeDuplicates(array) {
    let result = [];
    
    for (let l = 0; l < array.length; l++) {
     if (!result.includes(array[l])) {
            result.push(array[l]);
        }
    }
    console.log(result);
}

removeDuplicates([1, 2, 3, 4, 5, 1, 2, 3, 4, 5]);
removeDuplicates([10, 20, 30, 40, 50, 10, 20, 30, 40, 50]);
removeDuplicates([5, 4, 3, 2, 1, 5, 4, 3, 2, 1]);

/* Exercice 5 */

function sortAscending(numbers) {
    let result = numbers.slice(); 

    for (let m = 0; m < result.length; m++) {
        for (let n = 0; n < result.length - 1; n++) {
            if (result[n] > result[n + 1]) {
                
                let temp = result[n];
                result[n] = result[n + 1];
                result[n + 1] = temp;
            }
        }
    }

    return result;
}

console.log(sortAscending([5, 3, 1, 4, 2]));
console.log(sortAscending([10, 20, 30, 40, 50]));
console.log(sortAscending([5, 4, 3, 2, 1]));


/*Exercice 6*/

function calculateAverage(numbers) {
    let average = 0;
	let sum = 0;

	for( let number of numbers)
	{
		sum = sum + number;
	}

	average = sum / numbers.length;

	return average;
}

console.log(calculateAverage([5, 3, 1, 4, 2]));
console.log(calculateAverage([10, 20, 30, 40, 50]));
console.log(calculateAverage([5, 4, 3, 2, 1]));

/* Exercice 7 */

function isPrime(number) {
    if (number <= 1) {
        return false;
    }

    for (let i = 2; i < number; i++) {
        if (number % i === 0) {
            return false;
        }
    }

    return true;
}

console.log(isPrime(2));
console.log(isPrime(3));
console.log(isPrime(4));
console.log(isPrime(5));
console.log(isPrime(6));
console.log(isPrime(7));
console.log(isPrime(8));
console.log(isPrime(9));
console.log(isPrime(10));
console.log(isPrime(11));
console.log(isPrime(12));
console.log(isPrime(13));
console.log(isPrime(14));
console.log(isPrime(15));
console.log(isPrime(16));
console.log(isPrime(17));
console.log(isPrime(18));
console.log(isPrime(19));