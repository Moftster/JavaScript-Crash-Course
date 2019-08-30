// Constructor function
function Person(firstName, lastName, dob) {
  this.firstName = firstName;
  this.lastName = lastName;
  this.dob = new Date(dob);
  this.getBirthYear = function() {
    return this.dob.getFullYear();
  }
  this.getFullName = function() {
    return `${this.firstName} ${this.lastName}`;
  }
}

// Instantiate object
const person1 = new Person('John', 'Doe', '8-5-1983');
const person2 = new Person('Dave', 'Jones', '8-7-1993');
const person3 = new Person('Mary', 'Phillips', '1-9-1976');

console.log(person1.getBirthYear());
console.log(person2.getFullName());
