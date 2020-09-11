import { Dog, playWith as play, Animal } from "./library2.js";
let animal = new Dog("GG", 10);
let animal_=[
    new Dog("US", 10),
    new Dog("US", 10),
    new Dog("US", 10),
    new Dog("US", 10),
    new Dog("US", 10),
]
// animal.speak();
// alert(animal.weight);
// play(animal);
// animal.location = "GG";
// alert(animal.location);
animal_[3].location = animal.location;
alert(animal_[3].location);