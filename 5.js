const arr = ['h','g','a','b','d','f'];

function minmax(data){
  let asciiData = [], min ="", max="",imax="",imin="", result = [];
  
  
  data.forEach(function(item){
    asciiData.push(item.charCodeAt(0));
  });
  
  getMinMax();

  function getMinMax(){

    min = Math.min(...asciiData);
    max = Math.max(...asciiData);
  
    imin=asciiData.indexOf(min);
    imax=asciiData.indexOf(max);
    
    if(imax<imin){
      asciiData.splice(imax, 1);
      getMinMax();
      
    }else{
  
      result.push(String.fromCharCode(min));
      result.push(String.fromCharCode(max));
    
    }
  }
    return result;
}

console.log(minmax(['a','b','c','d']));
