function calculator(num1, num2, operator) {
  if (typeof num1 !== "number" || typeof num2 !== "number") {
    throw new Error("Ambos args precisam ser números");
  }
  return operator(num1, num2);
}
let sum = (num1, num2) => {
  return num1 + num2;
};
let sub = (num1, num2) => {
  return num1 - num2;
};
let mult = (num1, num2) => {
  return num1 * num2;
};
let div = (num1, num2) => {
  let div = num1 / num2;
  return div === Infinity ? "Não divisivel por 0" : div;
};
