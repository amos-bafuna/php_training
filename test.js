let int = 2;
let my_array = [1, 2, 3, 4];
let super_arr = { a: 2, b: 4, c: 6 };

if (Number.isInteger(int)) {
  console.log('The value is an integer');
} else {
  console.log('The value is not an integer');
}
console.log(my_array);
console.log(super_arr['a']);

let test = 'Je vais bien merci';
console.log(test.split(' '));

let i = 0;
while (i <= 5) {
  console.log('The value of i is: ' + i + '\n');
  i++;
}

for (let a = 0; a <= 5; a++) {
  console.log('The value of a is: ' + a);
}

let person = ['Amos', 18];
person.forEach((element) => {
  console.log(element);
});

let notes = [];
while (true) {
  let input = prompt('Entrez un chiffre: ');

  if (input == 'fin' || input == '') {
    break;
  }
  notes.push(input);
}
console.log(notes);
