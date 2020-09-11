export class Animal {
    constructor(weightValue = 0) {
        this.weight = weightValue;
    }
    get weight() {
        return this._weight;
    }
    set weight(weightValue) {
        this._weight = weightValue;
    }
    speak() {
        alert("Animal:???");
    }
}

export class Dog extends Animal {
    constructor(location = "EN", weightValue) {
        super(weightValue);
        this.location = location;
    }
    get location() {
        return this._location;
    }
    set location(location) {
        this._location = location;
    }
    speak() {
        alert("Won");
    }
}

export function playWith(obj) {
    obj.speak();
}