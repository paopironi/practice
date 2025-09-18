let students = [
    { name: "Alice", grade: 90 },

    { name: "Bob", grade: 85 },

    { name: "Charlie", grade: 88 },

    { name: "Diana", grade: 92 },

    { name: "Eve", grade: 78 },

    { name: "Frank", grade: 95 },
];

function printAllStudents() {
    for (let student of students) {
        console.log(`Student: ${student.name}, grade: ${student.grade}`);
    }
}

function calculateAverage() {
    let sumOfGrades = 0;
    for (let student of students) {
        sumOfGrades += student.grade;
    }
    return sumOfGrades / students.length;
}

printAllStudents();

console.log(`Average grade: ${calculateAverage()}`);

let greet = (name) => `Hi ${name}!`;
let gree = (name) => "Hi " + name + "!";
let isEven = (num) => num % 2 == 0;

let counterFun = (counter) => {
    if (counter > 100) {
        counter = 0;
    } else {
        counter++;
    }

    return counter;
};

// function nameAge(name, age) {
//   console.log("Hello " + name);
//   console.log("You are " + age + " years old");
// }

let nameAge = (name, age) => {
    console.log("Hello " + name);
    console.log("You are " + age + " years old");
};

// Q5 Write the arrow function for the following:

// function printOnly() {
//   console.log("printing");
// }

let printOnly = () => console.log("printing...");

// Q6 Write the arrow function for the following:

// function sum(num1, num2) {
//   return num1 + num2;
// }

let sum = (num1, num2) => num1 + num2;

console.log(sum(12, 13));
