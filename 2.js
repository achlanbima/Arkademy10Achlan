let results = [];

function generateString(count){
  
  const valid = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
  const valLength = valid.length;
  for(let i = 0; i < count; i++){
    let result = "";
    for(let j = 0; j < 32; j++){
      
      result+=valid.charAt((Math.random()*valLength));
    }
    results.push(result);
  }

  return results;
  

}

function resultChecker(arr){
  
  for(let i = 0; i < arr.length; i++){
    for(let j = i; j < arr.length; j++){
      if(i != j && arr[i] == arr[j]){
        return "Hasil ada duplikat";
      }else{
        return "Hasil tidak ada duplikat";
      }
    }
  }
  
}


console.log(generateString(3));
console.log(resultChecker(results));

