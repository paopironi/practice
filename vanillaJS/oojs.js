class Car {
    // Class constructor
    constructor(make, model) {
        this.make = make;
        this.model = model;
    }

    drive() {
        console.log("Vroom");
    }
}

class Circle {
    constructor(radius) {
        this._radius = radius;
    }
    // Setter and getter methods
    get radius() {
        return this._radius;
    }

    set radius(radius) {
        this._radius = radius;
    }
    // Methods
    calculateArea() {
        return Math.PI * Math.pow(this._radius, 2);
    }
}

const circle = new Circle(10);
console.log(circle.calculateArea());
circle.radius = 20;
console.log(circle.calculateArea());
