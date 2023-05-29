console.time("your code took time");
console.log("Bhabindra");
console.log("its me");
let name = "prakash";
console.log("My Name Is " + name);
console.log("my data type is " + (typeof name));
console.log(4+5);
console.timeEnd("your code took time");
console.log([34,44,55,66]);
console.table([12,13,14,15]);
console.log({ harry:"this", marks:20});
console.error("this is error");
console.warn("this is a warning");
console.assert(200<500, 'this is not possible');
console.clear();
 // object literals
 let stmarks = {
    prakash: 25,
    shyam: 88,
    bishnu: 35
 }
 console.log(typeof stmarks);
 console.log(stmarks);
function findName() {  
}
console.log( typeof findName);

let date = new Date();
console.log(typeof date);
let myvar ;
myvar= String(38);
console.log(myvar, (typeof myvar));
let boolean= String(true);
console.log(boolean,(typeof boolean));

let date1= String(new Date());
console.log(date1, (typeof date1));

let arr= String([1,2,3,4,5]);
console.log(arr.length,(typeof arr));

let i= 45;
console.log(i.toString());

let stri= Number("1234");
stri= Number("123d4");
stri= Number(true);
stri= Number(false);
stri= Number([1,2,3,45,7]);
console.log(stri, (typeof stri));

let number= parseFloat('34.06');
console.log(number.toFixed(4), (typeof number));

//type coercion
let mystr= "888"
let mynum= 55;
console.log(mystr + mynum);