// Coding Task 1 - Reverse a string
/**
 *  @param {string} str
 */
const reverseString = (str) => {
    let l = str.length;
    let reversedString = "";
    for (let i = l - 1; i >= 0; i--) {
        reversedString += str[i];
    }
    return reversedString;
};

// Coding Task 2 - Reverse an array
/**
 * @param {[]} arr
 */
const reverseArray = (arr) => {
    let l = arr.length;
    let reversedArray = [];
    for (let i = l - 1; i >= 0; i--) {
        reversedArray[l - i - 1] = arr[i];
    }
    return reversedArray;
};
/**
 *
 * @param {Object[]} items
 * @param {string} items[].item
 * @param {number} items[].price
 * @param {number} items[].stock
 */
// Coding Task 3 - Most Expensive Item

const mostExpensiveItem = (items) => {
    let maxPrice = items[0].stock * items[0].price;
    let maxIndex = 0;
    let numItems = items.length;

    if (numItems == 1) {
        return items[maxIndex];
    }

    for (let i = 1; i < numItems; i++) {
        let price = items[i].price * items[i].stock;
        if (price > maxPrice) {
            maxIndex = i;
            maxPrice = price;
        }
    }
    return items[maxIndex];
};
console.log(
    mostExpensiveItem([
        { item: "irn bru", price: 3.25, stock: 50 },
        { item: "fanta", price: 3.98, stock: 45 },
        { item: "diet coke", price: 4.4, stock: 38 },
        { item: "7up", price: 3.99, stock: 42 },
    ])
);
