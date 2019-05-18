function cetak_gambar(param){
  output = "";
  let oY = param-1;
  for(let x = 0; x < param; x++){
    for(let y = 0; y < param; y++){
      if(x ==y || y == oY){
        output+="X "
      }else{
      output+="= ";
      }
      
    }
    output+="\n";
    oY--;
  }

  return output;
}

console.log(cetak_gambar(7));
