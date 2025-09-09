let students = [

    {name: "Alice", grade: 90},

    {name: "Bob", grade: 85},

    {name: "Charlie", grade: 88},

    {name: "Diana", grade: 92},

    {name: "Eve", grade: 78},

    {name: "Frank", grade: 95},

];

function printAllStudents() {
    for (let student of students) {
        console.log(`Student: ${student.name}, grade: ${student.grade}`);
    }
}

function calculateAverage() {
    let sumOfGrades = 0
    for (let student of students) {
        sumOfGrades += student.grade;
    }
    return sumOfGrades / students.length
}

printAllStudents();

console.log(`Average grade: ${calculateAverage()}`);