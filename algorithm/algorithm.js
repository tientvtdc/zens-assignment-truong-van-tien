const arr1 = [1, 3, 5, 7, 9];
const [minSum, maxSum] = minMaxSum(arr1);

// Calculate min and max element
const min = Math.min(...arr1);
const max = Math.max(...arr1);

const evenElements = evenElementsFilter(arr1);
const oddElements = oddElementsFilter(arr1);

console.log(`Giá trị 4 phần tử nhỏ nhất: ${minSum}`);
console.log(`Giá trị 4 phần tử lớn nhất: ${maxSum}`);
console.log(`Giá trị phần tử nhỏ nhất: ${min}`);
console.log(`Giá trị phần tử lớn nhất: ${max}`);
console.log(`Các phần tử chẵn: ${evenElements}`);
console.log(`Các phần tử lẻ: ${oddElements}`);

function minMaxSum(arr) {

    // Sort the array in ascending order
    arr.sort((a, b) => a - b);

    let minSum = 0;
    let maxSum = 0

    for (let i = 0; i < 4; i++) {
        minSum += arr[i]; // Add smallest elements for minSum
        maxSum += arr[arr.length - (i + 1)];// Add largest elements for maxSum
    }

    return [minSum, maxSum];
}

function evenElementsFilter(arr) {
    //Can use the filter function
    // return arr.filter(num => num % 2 === 0);

    const evenArr = [];

    for (const arrElement of arr) {
        if (arrElement % 2 === 0) {
            evenArr.push(arrElement);
        }
    }

    return evenArr;
}

function oddElementsFilter(arr) {
    //Can use the filter function
    // return arr.filter(num => num % 2 === 1);

    const oddArr = [];

    for (const arrElement of arr) {
        if (arrElement % 2 === 1) {
            oddArr.push(arrElement);
        }
    }

    return oddArr;
}