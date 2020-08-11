import Dog, { playWith as play, Animal } from "./library2.js";
let animal = new Dog("US", 10);
// animal.speak();
alert(animal.weight);
play(animal);