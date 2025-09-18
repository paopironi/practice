// Coding Task 1 - Classes and Objects

// class User {
//     // Constructor
//     constructor(firstName, lastName) {
//         this.firstName = firstName;
//         this.lastName = lastName;
//     }

//     // Methods
//     hello() {
//         console.log(`hello, ${this.firstName} ${this.lastName}`);
//     }
// }

// const user1 = new User("John", "Doe");
// console.log(user1.firstName);
// console.log(user1.lastName);
// user1.hello();
// const user2 = new User("Jane", "Doe");
// console.log(user2.firstName);
// console.log(user2.lastName);
// user2.hello();

// Coding Task 2 - Encapsulation

// class User {
//     // Constructor
//     constructor(firstName, lastName) {
//         this._firstName = firstName;
//         this._lastName = lastName;
//     }
//     // Getters
//     get firstName() {
//         return this._firstName;
//     }
//     get lastName() {
//         return this._lastName;
//     }
//     // Setters
//     set firstName(firstName) {
//         this._firstName = firstName;
//     }
//     set lastName(lastName) {
//         this._lastName = lastName;
//     }
//     // Methods
//     hello() {
//         console.log(`Hello World!`);
//     }
// }

// const user = new User("John", "Doe");
// user.firstName = "Paolo";
// user.lastName = "Pironi";
// user.hello();
// console.log(`My name is ${user.firstName} ${user.lastName}`);

// Coding Task 3 - Inheritance (Subclass and Superclass)

// class User {
//     // Constructor
//     constructor(username) {
//         this._username = username;
//     }
//     // Setters
//     set username(username) {
//         this._username = username;
//     }
// }

// class Admin extends User {
//     expressYourRole() {
//         return "Admin";
//     }
//     sayHello() {
//         return `Hello admin, ${this._username}`;
//     }
// }

// const admin1 = new Admin();
// admin1.username = "Balthazar";
// console.log(admin1.sayHello());

// Coding Task 4 - Polymorphism

// class User {
//     constructor() {
//         this._numberOfArticles = 0;
//     }
//     setNumberOfArticles(numberOfArticles) {
//         this._numberOfArticles = numberOfArticles;
//     }
//     getNumberOfArticles() {
//         return this._numberOfArticles;
//     }
//     calcScores() {
//         console.log("Score calculation not implemented.");
//     }
// }

// class Author extends User {
//     calcScores() {
//         return this.getNumberOfArticles() * 10 + 20;
//     }
// }

// class Editor extends User {
//     calcScores() {
//         return this.getNumberOfArticles() * 6 + 15;
//     }
// }

// const author = new Author();
// author.setNumberOfArticles(8);
// console.log(author.calcScores());

// const editor = new Editor();
// editor.setNumberOfArticles(15);
// console.log(editor.calcScores());

// Coding Task 5 - Abstraction

class User {
    constructor(username) {
        if (this.constructor === User) {
            throw new TypeError(
                "Cannot construct Abstract instances directly."
            );
        }
        this._username = username;
    }
    // Abstract method
    stateYourRole() {
        throw new TypeError(
            "Do not call abstract method stateYourRole from child."
        );
    }
    // Getter
    get username() {
        return this._username;
    }
    // Setter
    set username(username) {
        this._username = username;
    }
}

class Admin extends User {
    stateYourRole() {
        return "admin";
    }
}

class Viewer extends User {
    stateYourRole() {
        return "viewer";
    }
}

const admin = new Admin();
admin.username = "Balthazar";
console.log(admin.stateYourRole());
const viewer = new Viewer();
viewer.username = "Melchior";
console.log(viewer.stateYourRole());
