function countVowel(str) {
  let vowels = new Set(["a", "e", "i", "o", "u"]);
  let counter = 0;
  for (let letter of str.toLowerCase()) {
    if (vowels.has(letter)) {
      counter++;
    }
  }
  return counter;
}
console.log(countVowel("O rato Roeu a roupa do rei de Roma"));
