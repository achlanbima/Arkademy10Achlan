function myCountChar(word, search){
  let arrWord = word.split('');
  let resCount = 0;
  arrWord.forEach(function(char){
    if(char === search){
      resCount+=1;
    }
  });
  return resCount;
}
console.log(myCountChar("bootcamp","o"));
